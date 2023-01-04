<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc\PeerEvent;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.PeerEvent.EventType</code>
 */
class EventType
{
    /**
     * Generated from protobuf enum <code>PEER_ONLINE = 0;</code>
     */
    const PEER_ONLINE = 0;
    /**
     * Generated from protobuf enum <code>PEER_OFFLINE = 1;</code>
     */
    const PEER_OFFLINE = 1;

    private static $valueToName = [
        self::PEER_ONLINE => 'PEER_ONLINE',
        self::PEER_OFFLINE => 'PEER_OFFLINE',
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
class_alias(EventType::class, \Lnrpc\PeerEvent_EventType::class);

