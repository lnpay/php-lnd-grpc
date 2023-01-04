<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelPoint</code>
 */
class ChannelPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The index of the output of the funding transaction
     *
     * Generated from protobuf field <code>uint32 output_index = 3;</code>
     */
    protected $output_index = 0;
    protected $funding_txid;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $funding_txid_bytes
     *          Txid of the funding transaction. When using REST, this field must be
     *          encoded as base64.
     *     @type string $funding_txid_str
     *          Hex-encoded string representing the byte-reversed hash of the funding
     *          transaction.
     *     @type int $output_index
     *           The index of the output of the funding transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *Txid of the funding transaction. When using REST, this field must be
     *encoded as base64.
     *
     * Generated from protobuf field <code>bytes funding_txid_bytes = 1;</code>
     * @return string
     */
    public function getFundingTxidBytes()
    {
        return $this->readOneof(1);
    }

    public function hasFundingTxidBytes()
    {
        return $this->hasOneof(1);
    }

    /**
     *Txid of the funding transaction. When using REST, this field must be
     *encoded as base64.
     *
     * Generated from protobuf field <code>bytes funding_txid_bytes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFundingTxidBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *Hex-encoded string representing the byte-reversed hash of the funding
     *transaction.
     *
     * Generated from protobuf field <code>string funding_txid_str = 2;</code>
     * @return string
     */
    public function getFundingTxidStr()
    {
        return $this->readOneof(2);
    }

    public function hasFundingTxidStr()
    {
        return $this->hasOneof(2);
    }

    /**
     *Hex-encoded string representing the byte-reversed hash of the funding
     *transaction.
     *
     * Generated from protobuf field <code>string funding_txid_str = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFundingTxidStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The index of the output of the funding transaction
     *
     * Generated from protobuf field <code>uint32 output_index = 3;</code>
     * @return int
     */
    public function getOutputIndex()
    {
        return $this->output_index;
    }

    /**
     * The index of the output of the funding transaction
     *
     * Generated from protobuf field <code>uint32 output_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOutputIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->output_index = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFundingTxid()
    {
        return $this->whichOneof("funding_txid");
    }

}

