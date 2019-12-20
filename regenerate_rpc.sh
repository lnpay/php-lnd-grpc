#!/usr/bin/env bash

curl -o rpc.proto https://raw.githubusercontent.com/lightningnetwork/lnd/master/lnrpc/rpc.proto
curl -o invoices.proto https://raw.githubusercontent.com/lightningnetwork/lnd/master/lnrpc/invoicesrpc/invoices.proto

git submodule update --init

./grpc/bins/opt/protobuf/protoc \
	--proto_path=googleapis/ \
	--php_out=./ \
	--grpc_out=./ \
	--plugin=protoc-gen-grpc=grpc/bins/opt/grpc_php_plugin \
	-Igrpc/third_party/protobuf/src \
	-I./ \
	rpc.proto

