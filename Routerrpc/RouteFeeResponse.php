<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.RouteFeeResponse</code>
 */
class RouteFeeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *A lower bound of the estimated fee to the target destination within the
     *network, expressed in milli-satoshis.
     *
     * Generated from protobuf field <code>int64 routing_fee_msat = 1;</code>
     */
    private $routing_fee_msat = 0;
    /**
     *An estimate of the worst case time delay that can occur. Note that callers
     *will still need to factor in the final CLTV delta of the last hop into this
     *value.
     *
     * Generated from protobuf field <code>int64 time_lock_delay = 2;</code>
     */
    private $time_lock_delay = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $routing_fee_msat
     *          A lower bound of the estimated fee to the target destination within the
     *          network, expressed in milli-satoshis.
     *     @type int|string $time_lock_delay
     *          An estimate of the worst case time delay that can occur. Note that callers
     *          will still need to factor in the final CLTV delta of the last hop into this
     *          value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *A lower bound of the estimated fee to the target destination within the
     *network, expressed in milli-satoshis.
     *
     * Generated from protobuf field <code>int64 routing_fee_msat = 1;</code>
     * @return int|string
     */
    public function getRoutingFeeMsat()
    {
        return $this->routing_fee_msat;
    }

    /**
     *A lower bound of the estimated fee to the target destination within the
     *network, expressed in milli-satoshis.
     *
     * Generated from protobuf field <code>int64 routing_fee_msat = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoutingFeeMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->routing_fee_msat = $var;

        return $this;
    }

    /**
     *An estimate of the worst case time delay that can occur. Note that callers
     *will still need to factor in the final CLTV delta of the last hop into this
     *value.
     *
     * Generated from protobuf field <code>int64 time_lock_delay = 2;</code>
     * @return int|string
     */
    public function getTimeLockDelay()
    {
        return $this->time_lock_delay;
    }

    /**
     *An estimate of the worst case time delay that can occur. Note that callers
     *will still need to factor in the final CLTV delta of the last hop into this
     *value.
     *
     * Generated from protobuf field <code>int64 time_lock_delay = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeLockDelay($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_lock_delay = $var;

        return $this;
    }

}

