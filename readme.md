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
composer require lnpay/php-lnrpc
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

## Multiple client example
```
//EXAMPLE BY @MrHash

use Invoicesrpc\InvoicesClient;
use Lnrpc\LightningClient;

final class LndGrpcClient
{
    /** @var LightningClient */
    public $lnrpc;

    /** @var InvoicesClient */
    public $invoicesrpc;

    public function __construct(string $endpoint, array $options)
    {
        $this->lnrpc = new LightningClient($endpoint, $options); //$options example seen in Basic Usage
        $this->invoicesrpc = new InvoicesClient($endpoint, $options); //$options example seen in Basic Usage
    }
}
```

## Updating the RPC definitions

```
$ bash regenerate_rpc.sh v0.10.4-beta
```

`regenerate_rpc.sh` pulls in https://raw.githubusercontent.com/lightningnetwork/lnd/master/v0.10.4-beta/XXX.proto and generates based on this.

Currently generated: rpc.proto
invoices.proto
router.proto
walletkit.proto
chainnotifier.proto
signer.proto 
