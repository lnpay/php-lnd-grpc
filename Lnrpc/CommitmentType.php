<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use UnexpectedValueException;

/**
 * Protobuf type <code>lnrpc.CommitmentType</code>
 */
class CommitmentType
{
    /**
     *A channel using the legacy commitment format having tweaked to_remote
     *keys.
     *
     * Generated from protobuf enum <code>LEGACY = 0;</code>
     */
    const LEGACY = 0;
    /**
     *A channel that uses the modern commitment format where the key in the
     *output of the remote party does not change each state. This makes back
     *up and recovery easier as when the channel is closed, the funds go
     *directly to that key.
     *
     * Generated from protobuf enum <code>STATIC_REMOTE_KEY = 1;</code>
     */
    const STATIC_REMOTE_KEY = 1;
    /**
     *A channel that uses a commitment format that has anchor outputs on the
     *commitments, allowing fee bumping after a force close transaction has
     *been broadcast.
     *
     * Generated from protobuf enum <code>ANCHORS = 2;</code>
     */
    const ANCHORS = 2;
    /**
     *Returned when the commitment type isn't known or unavailable.
     *
     * Generated from protobuf enum <code>UNKNOWN_COMMITMENT_TYPE = 999;</code>
     */
    const UNKNOWN_COMMITMENT_TYPE = 999;

    private static $valueToName = [
        self::LEGACY => 'LEGACY',
        self::STATIC_REMOTE_KEY => 'STATIC_REMOTE_KEY',
        self::ANCHORS => 'ANCHORS',
        self::UNKNOWN_COMMITMENT_TYPE => 'UNKNOWN_COMMITMENT_TYPE',
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
