<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.OutPoint</code>
 */
class OutPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Raw bytes representing the transaction id.
     *
     * Generated from protobuf field <code>bytes txid_bytes = 1;</code>
     */
    protected $txid_bytes = '';
    /**
     * Reversed, hex-encoded string representing the transaction id.
     *
     * Generated from protobuf field <code>string txid_str = 2;</code>
     */
    protected $txid_str = '';
    /**
     * The index of the output on the transaction.
     *
     * Generated from protobuf field <code>uint32 output_index = 3;</code>
     */
    protected $output_index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $txid_bytes
     *           Raw bytes representing the transaction id.
     *     @type string $txid_str
     *           Reversed, hex-encoded string representing the transaction id.
     *     @type int $output_index
     *           The index of the output on the transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Raw bytes representing the transaction id.
     *
     * Generated from protobuf field <code>bytes txid_bytes = 1;</code>
     * @return string
     */
    public function getTxidBytes()
    {
        return $this->txid_bytes;
    }

    /**
     * Raw bytes representing the transaction id.
     *
     * Generated from protobuf field <code>bytes txid_bytes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxidBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->txid_bytes = $var;

        return $this;
    }

    /**
     * Reversed, hex-encoded string representing the transaction id.
     *
     * Generated from protobuf field <code>string txid_str = 2;</code>
     * @return string
     */
    public function getTxidStr()
    {
        return $this->txid_str;
    }

    /**
     * Reversed, hex-encoded string representing the transaction id.
     *
     * Generated from protobuf field <code>string txid_str = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTxidStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->txid_str = $var;

        return $this;
    }

    /**
     * The index of the output on the transaction.
     *
     * Generated from protobuf field <code>uint32 output_index = 3;</code>
     * @return int
     */
    public function getOutputIndex()
    {
        return $this->output_index;
    }

    /**
     * The index of the output on the transaction.
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

}

