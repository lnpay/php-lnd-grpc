<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc\Invoice;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.Invoice.InvoiceState</code>
 */
class InvoiceState
{
    /**
     * Generated from protobuf enum <code>OPEN = 0;</code>
     */
    const OPEN = 0;
    /**
     * Generated from protobuf enum <code>SETTLED = 1;</code>
     */
    const SETTLED = 1;
    /**
     * Generated from protobuf enum <code>CANCELED = 2;</code>
     */
    const CANCELED = 2;
    /**
     * Generated from protobuf enum <code>ACCEPTED = 3;</code>
     */
    const ACCEPTED = 3;

    private static $valueToName = [
        self::OPEN => 'OPEN',
        self::SETTLED => 'SETTLED',
        self::CANCELED => 'CANCELED',
        self::ACCEPTED => 'ACCEPTED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InvoiceState::class, \Lnrpc\Invoice_InvoiceState::class);

