# LND RPC FOR PHP


## PHP Requirements

```
$ sudo apt-get install php-dev php-pear zlib1g-dev zip unzip
$ pecl install grpc
$ sudo sh -c "echo 'extension=grpc.so' >> /etc/php/7.2/cli/php.ini" #depends on PHP version you are using. Add this line in the ini file
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/):

```
composer require tkijewski/php-lnrpc
```

Basic Usage
-----------

Then can be used as such: 

```
<?php

putenv('GRPC_SSL_CIPHER_SUITES=HIGH+ECDSA');

require __DIR__ . '/vendor/autoload.php';

$certPath = '../.lnd/tls.cert';
$macaroonPath = '../.lnd/data/chain/bitcoin/mainnet/admin.macaroon';

$cert = file_get_contents($certPath);
$macaroon = file_get_contents($macaroonPath);
$callback = function ($metadata) use ($macaroon) {
        return ['macaroon' => [bin2hex($macaroon)]];
    };

$credentials = \Grpc\ChannelCredentials::createSsl($cert);
$x = new \Lnrpc\LightningClient('127.0.0.1:10009',['credentials'=>$credentials,'update_metadata'=>$callback]);
$gir = new \Lnrpc\WalletBalanceRequest();
$result = $x->WalletBalance($gir);
echo "Balance:".$result->wait()[0]->getTotalBalance();

```

## Updating the RPC definitions

```
$ cd grpc
$ make grpc_php_plugin
$ bash regenerate_rpc.sh
```

`regenerate_rpc.sh` pulls in https://raw.githubusercontent.com/lightningnetwork/lnd/master/lnrpc/rpc.proto and generates based on this.
