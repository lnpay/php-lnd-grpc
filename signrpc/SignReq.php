<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.SignReq</code>
 */
class SignReq extends \Google\Protobuf\Internal\Message
{
    /**
     * The raw bytes of the transaction to be signed.
     *
     * Generated from protobuf field <code>bytes raw_tx_bytes = 1;</code>
     */
    protected $raw_tx_bytes = '';
    /**
     * A set of sign descriptors, for each input to be signed.
     *
     * Generated from protobuf field <code>repeated .signrpc.SignDescriptor sign_descs = 2;</code>
     */
    private $sign_descs;
    /**
     *The full list of UTXO information for each of the inputs being spent. This
     *is required when spending one or more taproot (SegWit v1) outputs.
     *
     * Generated from protobuf field <code>repeated .signrpc.TxOut prev_outputs = 3;</code>
     */
    private $prev_outputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $raw_tx_bytes
     *           The raw bytes of the transaction to be signed.
     *     @type array<\Signrpc\SignDescriptor>|\Google\Protobuf\Internal\RepeatedField $sign_descs
     *           A set of sign descriptors, for each input to be signed.
     *     @type array<\Signrpc\TxOut>|\Google\Protobuf\Internal\RepeatedField $prev_outputs
     *          The full list of UTXO information for each of the inputs being spent. This
     *          is required when spending one or more taproot (SegWit v1) outputs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     * The raw bytes of the transaction to be signed.
     *
     * Generated from protobuf field <code>bytes raw_tx_bytes = 1;</code>
     * @return string
     */
    public function getRawTxBytes()
    {
        return $this->raw_tx_bytes;
    }

    /**
     * The raw bytes of the transaction to be signed.
     *
     * Generated from protobuf field <code>bytes raw_tx_bytes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRawTxBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->raw_tx_bytes = $var;

        return $this;
    }

    /**
     * A set of sign descriptors, for each input to be signed.
     *
     * Generated from protobuf field <code>repeated .signrpc.SignDescriptor sign_descs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignDescs()
    {
        return $this->sign_descs;
    }

    /**
     * A set of sign descriptors, for each input to be signed.
     *
     * Generated from protobuf field <code>repeated .signrpc.SignDescriptor sign_descs = 2;</code>
     * @param array<\Signrpc\SignDescriptor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignDescs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Signrpc\SignDescriptor::class);
        $this->sign_descs = $arr;

        return $this;
    }

    /**
     *The full list of UTXO information for each of the inputs being spent. This
     *is required when spending one or more taproot (SegWit v1) outputs.
     *
     * Generated from protobuf field <code>repeated .signrpc.TxOut prev_outputs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrevOutputs()
    {
        return $this->prev_outputs;
    }

    /**
     *The full list of UTXO information for each of the inputs being spent. This
     *is required when spending one or more taproot (SegWit v1) outputs.
     *
     * Generated from protobuf field <code>repeated .signrpc.TxOut prev_outputs = 3;</code>
     * @param array<\Signrpc\TxOut>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrevOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Signrpc\TxOut::class);
        $this->prev_outputs = $arr;

        return $this;
    }

}

