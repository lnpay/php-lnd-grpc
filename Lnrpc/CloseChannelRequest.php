<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.CloseChannelRequest</code>
 */
class CloseChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The outpoint (txid:index) of the funding transaction. With this value, Bob
     *will be able to generate a signature for Alice's version of the commitment
     *transaction.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint channel_point = 1;</code>
     */
    private $channel_point = null;
    /**
     *&#47; If true, then the channel will be closed forcibly. This means the current commitment transaction will be signed and broadcast.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    private $force = false;
    /**
     *&#47; The target number of blocks that the closure transaction should be confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     */
    private $target_conf = 0;
    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the closure transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 4;</code>
     */
    private $sat_per_byte = 0;
    /**
     *An optional address to send funds to in the case of a cooperative close.
     *If the channel was opened with an upfront shutdown script and this field
     *is set, the request to close will fail because the channel must pay out
     *to the upfront shutdown addresss.
     *
     * Generated from protobuf field <code>string delivery_address = 5[json_name = "delivery_address"];</code>
     */
    private $delivery_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\ChannelPoint $channel_point
     *          *
     *          The outpoint (txid:index) of the funding transaction. With this value, Bob
     *          will be able to generate a signature for Alice's version of the commitment
     *          transaction.
     *     @type bool $force
     *          &#47; If true, then the channel will be closed forcibly. This means the current commitment transaction will be signed and broadcast.
     *     @type int $target_conf
     *          &#47; The target number of blocks that the closure transaction should be confirmed by.
     *     @type int|string $sat_per_byte
     *          &#47; A manual fee rate set in sat/byte that should be used when crafting the closure transaction.
     *     @type string $delivery_address
     *          An optional address to send funds to in the case of a cooperative close.
     *          If the channel was opened with an upfront shutdown script and this field
     *          is set, the request to close will fail because the channel must pay out
     *          to the upfront shutdown addresss.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The outpoint (txid:index) of the funding transaction. With this value, Bob
     *will be able to generate a signature for Alice's version of the commitment
     *transaction.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint channel_point = 1;</code>
     * @return \Lnrpc\ChannelPoint
     */
    public function getChannelPoint()
    {
        return $this->channel_point;
    }

    /**
     **
     *The outpoint (txid:index) of the funding transaction. With this value, Bob
     *will be able to generate a signature for Alice's version of the commitment
     *transaction.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint channel_point = 1;</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setChannelPoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->channel_point = $var;

        return $this;
    }

    /**
     *&#47; If true, then the channel will be closed forcibly. This means the current commitment transaction will be signed and broadcast.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     *&#47; If true, then the channel will be closed forcibly. This means the current commitment transaction will be signed and broadcast.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

    /**
     *&#47; The target number of blocks that the closure transaction should be confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     *&#47; The target number of blocks that the closure transaction should be confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_conf = $var;

        return $this;
    }

    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the closure transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 4;</code>
     * @return int|string
     */
    public function getSatPerByte()
    {
        return $this->sat_per_byte;
    }

    /**
     *&#47; A manual fee rate set in sat/byte that should be used when crafting the closure transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_byte = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerByte($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_per_byte = $var;

        return $this;
    }

    /**
     *An optional address to send funds to in the case of a cooperative close.
     *If the channel was opened with an upfront shutdown script and this field
     *is set, the request to close will fail because the channel must pay out
     *to the upfront shutdown addresss.
     *
     * Generated from protobuf field <code>string delivery_address = 5[json_name = "delivery_address"];</code>
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->delivery_address;
    }

    /**
     *An optional address to send funds to in the case of a cooperative close.
     *If the channel was opened with an upfront shutdown script and this field
     *is set, the request to close will fail because the channel must pay out
     *to the upfront shutdown addresss.
     *
     * Generated from protobuf field <code>string delivery_address = 5[json_name = "delivery_address"];</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveryAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->delivery_address = $var;

        return $this;
    }

}

