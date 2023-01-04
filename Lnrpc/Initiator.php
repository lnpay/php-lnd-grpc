<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.Initiator</code>
 */
class Initiator
{
    /**
     * Generated from protobuf enum <code>INITIATOR_UNKNOWN = 0;</code>
     */
    const INITIATOR_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>INITIATOR_LOCAL = 1;</code>
     */
    const INITIATOR_LOCAL = 1;
    /**
     * Generated from protobuf enum <code>INITIATOR_REMOTE = 2;</code>
     */
    const INITIATOR_REMOTE = 2;
    /**
     * Generated from protobuf enum <code>INITIATOR_BOTH = 3;</code>
     */
    const INITIATOR_BOTH = 3;

    private static $valueToName = [
        self::INITIATOR_UNKNOWN => 'INITIATOR_UNKNOWN',
        self::INITIATOR_LOCAL => 'INITIATOR_LOCAL',
        self::INITIATOR_REMOTE => 'INITIATOR_REMOTE',
        self::INITIATOR_BOTH => 'INITIATOR_BOTH',
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

