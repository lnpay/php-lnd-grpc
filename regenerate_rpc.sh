#!/usr/bin/env bash

curl -o rpc.proto https://raw.githubusercontent.com/lightningnetwork/lnd/master/lnrpc/rpc.proto

./grpc/bins/opt/protobuf/protoc \
	--proto_path=googleapis/ \
	--php_out=Lnrpc \
	--grpc_out=Lnrpc \
	--plugin=protoc-gen-grpc=grpc/bins/opt/grpc_php_plugin \
	-Igrpc/third_party/protobuf/src \
	-I./ \
	rpc.proto

