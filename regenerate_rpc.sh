#!/usr/bin/env bash

TAG=$1

curl -o rpc.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/rpc.proto"
curl -o invoices.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/invoicesrpc/invoices.proto"
curl -o router.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/routerrpc/router.proto"
curl -o walletkit.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/walletrpc/walletkit.proto"
curl -o chainnotifier.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/chainrpc/chainnotifier.proto"
curl -o signer.proto "https://raw.githubusercontent.com/lightningnetwork/lnd/$TAG/lnrpc/signrpc/signer.proto"

git submodule update --init --recursive

# apt-get update
# apt-get install build-essential autoconf automake libtool pkg-config libc-ares-dev google-perftools

./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        rpc.proto

./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        invoices.proto

./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        router.proto


./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        signer.proto


./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        walletkit.proto

./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        chainnotifier.proto

./grpc/bins/opt/protobuf/protoc \
        --proto_path=googleapis/ \
        --php_out=./ \
        --grpc_out=./ \
        --plugin=protoc-gen-grpc=bin/grpc_php_plugin \
        -Igrpc/third_party/protobuf/src \
        -I./ \
        signer.proto

echo "DONE - $1"