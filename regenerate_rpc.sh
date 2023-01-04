#!/usr/bin/env bash

TAG=$1

#autopilotrpc
echo "----autopilotrpc"
curl -o proto/autopilot.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/autopilotrpc/autopilot.proto"
./bin/protoc -I=./proto autopilot.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

# chainrpc
echo "----chainrpc"
curl -o proto/chainnotifier.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/chainrpc/chainnotifier.proto"
./bin/protoc -I=./proto chainnotifier.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

# curl -o proto/chainkit.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/chainrpc/chainkit.proto"
#./bin/protoc -I=./proto chainkit.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#devrpc
echo "----devrpc"
curl -o proto/dev.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/devrpc/dev.proto"
./bin/protoc -I=./proto dev.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#invoicesrpc
echo "----invoicesrpc"
curl -o proto/invoices.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/invoicesrpc/invoices.proto"
./bin/protoc -I=./proto invoices.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#verrpc
echo "-----verrpc"
curl -o proto/verrpc.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/verrpc/verrpc.proto"
curl -o proto/verrpc/verrpc.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/verrpc/verrpc.proto"
./bin/protoc -I=./proto verrpc.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#lnclipb
echo "----lnclipb"
curl -o proto/lncli.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/lnclipb/lncli.proto"
./bin/protoc -I=./proto lncli.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#neutrinorpc
echo "----neutrinorpc"
curl -o proto/neutrino.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/neutrinorpc/neutrino.proto"
./bin/protoc -I=./proto neutrino.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#peersrpc
echo "----peersrpc"
curl -o proto/peers.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/peersrpc/peers.proto"
./bin/protoc -I=./proto peers.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#routerrpc
echo "----routerrpc"
curl -o proto/router.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/routerrpc/router.proto"
./bin/protoc -I=./proto router.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#signrpc
echo "----signrpc"
curl -o proto/signer.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/signrpc/signer.proto"
curl -o proto/signrpc/signer.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/signrpc/signer.proto"
./bin/protoc -I=./proto signer.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#walletrpc
echo "-----walletrpc"
curl -o proto/walletkit.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/walletrpc/walletkit.proto"
./bin/protoc -I=./proto walletkit.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#watchtowerrpc
echo "----watchtowerrpc"
curl -o proto/watchtower.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/watchtowerrpc/watchtower.proto"
./bin/protoc -I=./proto watchtower.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#wtclientrpc
echo "----wtclientrpc"
curl -o proto/wtclient.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/wtclientrpc/wtclient.proto"
./bin/protoc -I=./proto wtclient.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#lightning
echo "----lightning"
curl -o proto/lightning.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/lightning.proto"
./bin/protoc -I=./proto lightning.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#stateservice
echo "----stateservice"
curl -o proto/stateservice.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/stateservice.proto"
./bin/protoc -I=./proto stateservice.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

#walletunlocker
echo "-----walletunlocker"
curl -o proto/walletunlocker.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/walletunlocker.proto"
./bin/protoc -I=./proto walletunlocker.proto --php_out=./ --grpc_out=./ --plugin=protoc-gen-grpc=bin/grpc_php_plugin

echo "DONE - $1"