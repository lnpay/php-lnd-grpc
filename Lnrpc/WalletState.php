<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stateservice.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.WalletState</code>
 */
class WalletState
{
    /**
     * NON_EXISTING means that the wallet has not yet been initialized.
     *
     * Generated from protobuf enum <code>NON_EXISTING = 0;</code>
     */
    const NON_EXISTING = 0;
    /**
     * LOCKED means that the wallet is locked and requires a password to unlock.
     *
     * Generated from protobuf enum <code>LOCKED = 1;</code>
     */
    const LOCKED = 1;
    /**
     * UNLOCKED means that the wallet was unlocked successfully, but RPC server
     * isn't ready.
     *
     * Generated from protobuf enum <code>UNLOCKED = 2;</code>
     */
    const UNLOCKED = 2;
    /**
     * RPC_ACTIVE means that the lnd server is active but not fully ready for
     * calls.
     *
     * Generated from protobuf enum <code>RPC_ACTIVE = 3;</code>
     */
    const RPC_ACTIVE = 3;
    /**
     * SERVER_ACTIVE means that the lnd server is ready to accept calls.
     *
     * Generated from protobuf enum <code>SERVER_ACTIVE = 4;</code>
     */
    const SERVER_ACTIVE = 4;
    /**
     * WAITING_TO_START means that node is waiting to become the leader in a
     * cluster and is not started yet.
     *
     * Generated from protobuf enum <code>WAITING_TO_START = 255;</code>
     */
    const WAITING_TO_START = 255;

    private static $valueToName = [
        self::NON_EXISTING => 'NON_EXISTING',
        self::LOCKED => 'LOCKED',
        self::UNLOCKED => 'UNLOCKED',
        self::RPC_ACTIVE => 'RPC_ACTIVE',
        self::SERVER_ACTIVE => 'SERVER_ACTIVE',
        self::WAITING_TO_START => 'WAITING_TO_START',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

