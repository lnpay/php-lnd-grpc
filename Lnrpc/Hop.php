<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Hop</code>
 */
class Hop extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1[json_name = "chan_id"];</code>
     */
    private $chan_id = 0;
    /**
     * Generated from protobuf field <code>int64 chan_capacity = 2[json_name = "chan_capacity"];</code>
     */
    private $chan_capacity = 0;
    /**
     * Generated from protobuf field <code>int64 amt_to_forward = 3[json_name = "amt_to_forward", deprecated = true];</code>
     */
    private $amt_to_forward = 0;
    /**
     * Generated from protobuf field <code>int64 fee = 4[json_name = "fee", deprecated = true];</code>
     */
    private $fee = 0;
    /**
     * Generated from protobuf field <code>uint32 expiry = 5[json_name = "expiry"];</code>
     */
    private $expiry = 0;
    /**
     * Generated from protobuf field <code>int64 amt_to_forward_msat = 6[json_name = "amt_to_forward_msat"];</code>
     */
    private $amt_to_forward_msat = 0;
    /**
     * Generated from protobuf field <code>int64 fee_msat = 7[json_name = "fee_msat"];</code>
     */
    private $fee_msat = 0;
    /**
     **
     *An optional public key of the hop. If the public key is given, the payment
     *can be executed without relying on a copy of the channel graph.
     *
     * Generated from protobuf field <code>string pub_key = 8[json_name = "pub_key"];</code>
     */
    private $pub_key = '';
    /**
     ** 
     *If set to true, then this hop will be encoded using the new variable length
     *TLV format.
     *
     * Generated from protobuf field <code>bool tlv_payload = 9[json_name = "tlv_payload"];</code>
     */
    private $tlv_payload = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $chan_id
     *          *
     *          The unique channel ID for the channel. The first 3 bytes are the block
     *          height, the next 3 the index within the block, and the last 2 bytes are the
     *          output index for the channel.
     *     @type int|string $chan_capacity
     *     @type int|string $amt_to_forward
     *     @type int|string $fee
     *     @type int $expiry
     *     @type int|string $amt_to_forward_msat
     *     @type int|string $fee_msat
     *     @type string $pub_key
     *          *
     *          An optional public key of the hop. If the public key is given, the payment
     *          can be executed without relying on a copy of the channel graph.
     *     @type bool $tlv_payload
     *          * 
     *          If set to true, then this hop will be encoded using the new variable length
     *          TLV format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1[json_name = "chan_id"];</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     **
     *The unique channel ID for the channel. The first 3 bytes are the block
     *height, the next 3 the index within the block, and the last 2 bytes are the
     *output index for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 1[json_name = "chan_id"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 chan_capacity = 2[json_name = "chan_capacity"];</code>
     * @return int|string
     */
    public function getChanCapacity()
    {
        return $this->chan_capacity;
    }

    /**
     * Generated from protobuf field <code>int64 chan_capacity = 2[json_name = "chan_capacity"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->chan_capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amt_to_forward = 3[json_name = "amt_to_forward", deprecated = true];</code>
     * @return int|string
     */
    public function getAmtToForward()
    {
        return $this->amt_to_forward;
    }

    /**
     * Generated from protobuf field <code>int64 amt_to_forward = 3[json_name = "amt_to_forward", deprecated = true];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtToForward($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_to_forward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 4[json_name = "fee", deprecated = true];</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 4[json_name = "fee", deprecated = true];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expiry = 5[json_name = "expiry"];</code>
     * @return int
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Generated from protobuf field <code>uint32 expiry = 5[json_name = "expiry"];</code>
     * @param int $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkUint32($var);
        $this->expiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amt_to_forward_msat = 6[json_name = "amt_to_forward_msat"];</code>
     * @return int|string
     */
    public function getAmtToForwardMsat()
    {
        return $this->amt_to_forward_msat;
    }

    /**
     * Generated from protobuf field <code>int64 amt_to_forward_msat = 6[json_name = "amt_to_forward_msat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtToForwardMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_to_forward_msat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee_msat = 7[json_name = "fee_msat"];</code>
     * @return int|string
     */
    public function getFeeMsat()
    {
        return $this->fee_msat;
    }

    /**
     * Generated from protobuf field <code>int64 fee_msat = 7[json_name = "fee_msat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeeMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_msat = $var;

        return $this;
    }

    /**
     **
     *An optional public key of the hop. If the public key is given, the payment
     *can be executed without relying on a copy of the channel graph.
     *
     * Generated from protobuf field <code>string pub_key = 8[json_name = "pub_key"];</code>
     * @return string
     */
    public function getPubKey()
    {
        return $this->pub_key;
    }

    /**
     **
     *An optional public key of the hop. If the public key is given, the payment
     *can be executed without relying on a copy of the channel graph.
     *
     * Generated from protobuf field <code>string pub_key = 8[json_name = "pub_key"];</code>
     * @param string $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pub_key = $var;

        return $this;
    }

    /**
     ** 
     *If set to true, then this hop will be encoded using the new variable length
     *TLV format.
     *
     * Generated from protobuf field <code>bool tlv_payload = 9[json_name = "tlv_payload"];</code>
     * @return bool
     */
    public function getTlvPayload()
    {
        return $this->tlv_payload;
    }

    /**
     ** 
     *If set to true, then this hop will be encoded using the new variable length
     *TLV format.
     *
     * Generated from protobuf field <code>bool tlv_payload = 9[json_name = "tlv_payload"];</code>
     * @param bool $var
     * @return $this
     */
    public function setTlvPayload($var)
    {
        GPBUtil::checkBool($var);
        $this->tlv_payload = $var;

        return $this;
    }

}

