<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.EdgeLocator</code>
 */
class EdgeLocator extends \Google\Protobuf\Internal\Message
{
    /**
     * The short channel id of this edge.
     *
     * Generated from protobuf field <code>uint64 channel_id = 1 [jstype = JS_STRING];</code>
     */
    protected $channel_id = 0;
    /**
     *The direction of this edge. If direction_reverse is false, the direction
     *of this edge is from the channel endpoint with the lexicographically smaller
     *pub key to the endpoint with the larger pub key. If direction_reverse is
     *is true, the edge goes the other way.
     *
     * Generated from protobuf field <code>bool direction_reverse = 2;</code>
     */
    protected $direction_reverse = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $channel_id
     *           The short channel id of this edge.
     *     @type bool $direction_reverse
     *          The direction of this edge. If direction_reverse is false, the direction
     *          of this edge is from the channel endpoint with the lexicographically smaller
     *          pub key to the endpoint with the larger pub key. If direction_reverse is
     *          is true, the edge goes the other way.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The short channel id of this edge.
     *
     * Generated from protobuf field <code>uint64 channel_id = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * The short channel id of this edge.
     *
     * Generated from protobuf field <code>uint64 channel_id = 1 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkUint64($var);
        $this->channel_id = $var;

        return $this;
    }

    /**
     *The direction of this edge. If direction_reverse is false, the direction
     *of this edge is from the channel endpoint with the lexicographically smaller
     *pub key to the endpoint with the larger pub key. If direction_reverse is
     *is true, the edge goes the other way.
     *
     * Generated from protobuf field <code>bool direction_reverse = 2;</code>
     * @return bool
     */
    public function getDirectionReverse()
    {
        return $this->direction_reverse;
    }

    /**
     *The direction of this edge. If direction_reverse is false, the direction
     *of this edge is from the channel endpoint with the lexicographically smaller
     *pub key to the endpoint with the larger pub key. If direction_reverse is
     *is true, the edge goes the other way.
     *
     * Generated from protobuf field <code>bool direction_reverse = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDirectionReverse($var)
    {
        GPBUtil::checkBool($var);
        $this->direction_reverse = $var;

        return $this;
    }

}

