<?php

require __DIR__ . '/vendor/autoload.php';

$certPath = '../.lnd/tls.cert';

$cert = file_get_contents($certPath);

$credentials = \Grpc\ChannelCredentials::createSsl($cert);
$x = new \Lnrpc\LightningClient('52.87.176.11:10009',['credentials'=>$credentials]);

$gir = new \Lnrpc\WalletBalanceRequest();
$result = $x->WalletBalance($gir);
print_r( $result->wait() );
