# How to write a PHP gRPC client for the Lightning Network Daemon

This section enumerates what you need to do to write a client that communicates
with `lnd` in PHP.

### Introduction

`lnd` uses the `gRPC` protocol for communication with clients like `lncli`.

`gRPC` is based on protocol buffers and as such, you will need to compile
the `lnd` proto file in PHP before you can use it to communicate with `lnd`.

Tested with `PHP 7.2` on Ubuntu `18.04` but should work with any PHP 7+

Reference: https://grpc.io/docs/quickstart/php/

### Setup

Setup our PHP directory

```
$ composer require grpc/grpc ^1.22.0
$ composer require google/protobuf ^3.8.0
```

Add these namespace to composer.json manually
```
"autoload": {
    "psr-4": {
        "Lnrpc\\": "gen/Lnrpc",
        "GPBMetadata\\": "gen/GPBMetadata"
    }
}
```

Install grpc PHP extension:
```
$ sudo apt-get install php-dev php-pear zlib1g-dev zip unzip
$ sudo pecl install grpc
$ sudo sh -c "echo 'extension=grpc.so' >> /etc/php/7.2/cli/php.ini" #depends on PHP version you are using. Add this line in the ini file
$ php -i | grep grpc #should show something like grpc, grpc module version => 1.xx.x if not, wrong php ini file
```

Clone the Google common protos repository:

```
$ git clone https://github.com/googleapis/api-common-protos
```

Fetch the `rpc.proto` file (or copy it from your local source directory):

```
$ curl -o rpc.proto -s https://raw.githubusercontent.com/lightningnetwork/lnd/master/lnrpc/rpc.proto
$ curl -o annotations.proto -s https://raw.githubusercontent.com/googleapis/api-common-protos/master/google/api/annotations.proto
```

Create the PHP grpc tool
```
$ git clone -b $(curl -L https://grpc.io/release) https://github.com/grpc/grpc
$ cd grpc
$ git submodule update --init
$ make grpc_php_plugin
$ cd ..
```

Compile the proto file:

```
$ mkdir gen
$ ./grpc/bins/opt/protobuf/protoc \
	--proto_path=grpc/third_party/googleapis/ \
	--php_out=gen \
	--grpc_out=gen \
	--plugin=protoc-gen-grpc=grpc/bins/opt/grpc_php_plugin \
	-Igrpc/third_party/protobuf/src \
	-I./ \
	rpc.proto
```

You should see a bunch of files generated in the Lnrpc directory: 

* `AbandonChannelRequest.php`
* `AbandonChannelResponse.php`
* `...`
* `LightningClient.php`
* `...`
* `WalletUnlockerClient.php`

### Examples

#### Simple client to display `total_balance` of wallet

We assume that `lnd` runs on the default `localhost:10009`.

```
<?php 

require __DIR__ . '/vendor/autoload.php';

$certPath = '/path/to/lnd/tls.cert';
$macaroonPath = '/path/to/lnd/admin.macaroon';

$cert = file_get_contents($certPath);
$macaroon = file_get_contents($macaroonPath);
$callback = function ($metadata) use ($macaroon) {
    return ['macaroon' => [bin2hex($macaroon)]];
};

$credentials = \Grpc\ChannelCredentials::createSsl($cert);
$x = new \Lnrpc\LightningClient('localhost:10009',['credentials'=>$credentials,'update_metadata'=>$callback]);
$gir = new \Lnrpc\WalletBalanceRequest();
$result = $x->WalletBalance($gir);

echo "balance req:";
echo $result->wait()[0]->getTotalBalance();
```

#### Streaming client for invoice payment updates

```
<?php

require __DIR__ . '/vendor/autoload.php';

$certPath = '/path/to/lnd/tls.cert';
$macaroonPath = '/path/to/lnd/admin.macaroon';

$cert = file_get_contents($certPath);
$macaroon = file_get_contents($macaroonPath);
$callback = function ($metadata) use ($macaroon) {
    return ['macaroon' => [bin2hex($macaroon)]];
};

$credentials = \Grpc\ChannelCredentials::createSsl($cert);
$x = new \Lnrpc\LightningClient('localhost:10009',['credentials'=>$credentials,'update_metadata'=>$callback]);
$sub = new \Lnrpc\InvoiceSubscription();
$result = $x->SubscribeInvoices($sub);

echo "invoice stream:\n";
foreach ($result->responses() as $y) {
    echo $y->getPaymentRequest()."\n";
}
```
