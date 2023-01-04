<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.FeeLimit</code>
 */
class FeeLimit extends \Google\Protobuf\Internal\Message
{
    protected $limit;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $fixed
     *          The fee limit expressed as a fixed amount of satoshis.
     *          The fields fixed and fixed_msat are mutually exclusive.
     *     @type int|string $fixed_msat
     *          The fee limit expressed as a fixed amount of millisatoshis.
     *          The fields fixed and fixed_msat are mutually exclusive.
     *     @type int|string $percent
     *           The fee limit expressed as a percentage of the payment amount.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The fee limit expressed as a fixed amount of satoshis.
     *The fields fixed and fixed_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 fixed = 1;</code>
     * @return int|string
     */
    public function getFixed()
    {
        return $this->readOneof(1);
    }

    public function hasFixed()
    {
        return $this->hasOneof(1);
    }

    /**
     *The fee limit expressed as a fixed amount of satoshis.
     *The fields fixed and fixed_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 fixed = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFixed($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *The fee limit expressed as a fixed amount of millisatoshis.
     *The fields fixed and fixed_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 fixed_msat = 3;</code>
     * @return int|string
     */
    public function getFixedMsat()
    {
        return $this->readOneof(3);
    }

    public function hasFixedMsat()
    {
        return $this->hasOneof(3);
    }

    /**
     *The fee limit expressed as a fixed amount of millisatoshis.
     *The fields fixed and fixed_msat are mutually exclusive.
     *
     * Generated from protobuf field <code>int64 fixed_msat = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFixedMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The fee limit expressed as a percentage of the payment amount.
     *
     * Generated from protobuf field <code>int64 percent = 2;</code>
     * @return int|string
     */
    public function getPercent()
    {
        return $this->readOneof(2);
    }

    public function hasPercent()
    {
        return $this->hasOneof(2);
    }

    /**
     * The fee limit expressed as a percentage of the payment amount.
     *
     * Generated from protobuf field <code>int64 percent = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPercent($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->whichOneof("limit");
    }

}

