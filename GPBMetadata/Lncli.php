<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lncli.proto

namespace GPBMetadata;

class Lncli
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Verrpc\Verrpc::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
lncli.protolnclipb"O
VersionResponse
lncli (2.verrpc.Version
lnd (2.verrpc.VersionB/Z-github.com/lightningnetwork/lnd/lnrpc/lnclipbbproto3'
        , true);

        static::$is_initialized = true;
    }
}
