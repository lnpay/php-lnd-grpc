<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>walletrpc.AddressType</code>
 */
class AddressType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>WITNESS_PUBKEY_HASH = 1;</code>
     */
    const WITNESS_PUBKEY_HASH = 1;
    /**
     * Generated from protobuf enum <code>NESTED_WITNESS_PUBKEY_HASH = 2;</code>
     */
    const NESTED_WITNESS_PUBKEY_HASH = 2;
    /**
     * Generated from protobuf enum <code>HYBRID_NESTED_WITNESS_PUBKEY_HASH = 3;</code>
     */
    const HYBRID_NESTED_WITNESS_PUBKEY_HASH = 3;
    /**
     * Generated from protobuf enum <code>TAPROOT_PUBKEY = 4;</code>
     */
    const TAPROOT_PUBKEY = 4;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::WITNESS_PUBKEY_HASH => 'WITNESS_PUBKEY_HASH',
        self::NESTED_WITNESS_PUBKEY_HASH => 'NESTED_WITNESS_PUBKEY_HASH',
        self::HYBRID_NESTED_WITNESS_PUBKEY_HASH => 'HYBRID_NESTED_WITNESS_PUBKEY_HASH',
        self::TAPROOT_PUBKEY => 'TAPROOT_PUBKEY',
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
