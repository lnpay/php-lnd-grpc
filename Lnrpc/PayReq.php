<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PayReq</code>
 */
class PayReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string destination = 1;</code>
     */
    protected $destination = '';
    /**
     * Generated from protobuf field <code>string payment_hash = 2;</code>
     */
    protected $payment_hash = '';
    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3;</code>
     */
    protected $num_satoshis = 0;
    /**
     * Generated from protobuf field <code>int64 timestamp = 4;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 expiry = 5;</code>
     */
    protected $expiry = 0;
    /**
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string description_hash = 7;</code>
     */
    protected $description_hash = '';
    /**
     * Generated from protobuf field <code>string fallback_addr = 8;</code>
     */
    protected $fallback_addr = '';
    /**
     * Generated from protobuf field <code>int64 cltv_expiry = 9;</code>
     */
    protected $cltv_expiry = 0;
    /**
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 10;</code>
     */
    private $route_hints;
    /**
     * Generated from protobuf field <code>bytes payment_addr = 11;</code>
     */
    protected $payment_addr = '';
    /**
     * Generated from protobuf field <code>int64 num_msat = 12;</code>
     */
    protected $num_msat = 0;
    /**
     * Generated from protobuf field <code>map<uint32, .lnrpc.Feature> features = 13;</code>
     */
    private $features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination
     *     @type string $payment_hash
     *     @type int|string $num_satoshis
     *     @type int|string $timestamp
     *     @type int|string $expiry
     *     @type string $description
     *     @type string $description_hash
     *     @type string $fallback_addr
     *     @type int|string $cltv_expiry
     *     @type array<\Lnrpc\RouteHint>|\Google\Protobuf\Internal\RepeatedField $route_hints
     *     @type string $payment_addr
     *     @type int|string $num_msat
     *     @type array|\Google\Protobuf\Internal\MapField $features
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string destination = 1;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Generated from protobuf field <code>string destination = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payment_hash = 2;</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     * Generated from protobuf field <code>string payment_hash = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3;</code>
     * @return int|string
     */
    public function getNumSatoshis()
    {
        return $this->num_satoshis;
    }

    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumSatoshis($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_satoshis = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 4;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expiry = 5;</code>
     * @return int|string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Generated from protobuf field <code>int64 expiry = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description_hash = 7;</code>
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     * Generated from protobuf field <code>string description_hash = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->description_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fallback_addr = 8;</code>
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->fallback_addr;
    }

    /**
     * Generated from protobuf field <code>string fallback_addr = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFallbackAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->fallback_addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 cltv_expiry = 9;</code>
     * @return int|string
     */
    public function getCltvExpiry()
    {
        return $this->cltv_expiry;
    }

    /**
     * Generated from protobuf field <code>int64 cltv_expiry = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCltvExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->cltv_expiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRouteHints()
    {
        return $this->route_hints;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 10;</code>
     * @param array<\Lnrpc\RouteHint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRouteHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\RouteHint::class);
        $this->route_hints = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payment_addr = 11;</code>
     * @return string
     */
    public function getPaymentAddr()
    {
        return $this->payment_addr;
    }

    /**
     * Generated from protobuf field <code>bytes payment_addr = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->payment_addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_msat = 12;</code>
     * @return int|string
     */
    public function getNumMsat()
    {
        return $this->num_msat;
    }

    /**
     * Generated from protobuf field <code>int64 num_msat = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_msat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .lnrpc.Feature> features = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .lnrpc.Feature> features = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Feature::class);
        $this->features = $arr;

        return $this;
    }

}

