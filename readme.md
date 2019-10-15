# LND RPC FOR PHP


## PHP Requirements

```
$ sudo apt-get install php-dev php-pear
$ pecl install grpc
$ echo 'extension=grpc.so' >> /etc/php/7.2/cli/php.ini
```

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/):

```
composer require tkijewski/lnrpc
```

Basic Usage
-----------

Then can be used as such: 

```
<?php

require __DIR__ . '/vendor/autoload.php';

$certPath = '/path/to/tls.cert';

$cert = file_get_contents($certPath);

$credentials = \Grpc\ChannelCredentials::createSsl($cert);
$x = new \Lnrpc\LightningClient('52.87.176.11:10009',['credentials'=>$credentials]);

$gir = new \Lnrpc\WalletBalanceRequest();
$result = $x->WalletBalance($gir);
print_r( $result->wait() );

```

## Updating the RPC definitions

```
$ cd grpc
$ make grpc_php_plugin
$ bash regenerate_rpc.sh
```

`regenerate_rpc.sh` pulls in https://raw.githubusercontent.com/lightningnetwork/lnd/master/lnrpc/rpc.proto and generates based on this.

I am going to try and keep this up to date. As of Oct 15 2019 they are up to date. If not just run the above script and it should have the most recent changes to rpc. 
