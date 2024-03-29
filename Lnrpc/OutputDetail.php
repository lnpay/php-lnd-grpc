<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.OutputDetail</code>
 */
class OutputDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the output
     *
     * Generated from protobuf field <code>.lnrpc.OutputScriptType output_type = 1;</code>
     */
    protected $output_type = 0;
    /**
     * The address
     *
     * Generated from protobuf field <code>string address = 2;</code>
     */
    protected $address = '';
    /**
     * The pkscript in hex
     *
     * Generated from protobuf field <code>string pk_script = 3;</code>
     */
    protected $pk_script = '';
    /**
     * The output index used in the raw transaction
     *
     * Generated from protobuf field <code>int64 output_index = 4;</code>
     */
    protected $output_index = 0;
    /**
     * The value of the output coin in satoshis
     *
     * Generated from protobuf field <code>int64 amount = 5;</code>
     */
    protected $amount = 0;
    /**
     * Denotes if the output is controlled by the internal wallet
     *
     * Generated from protobuf field <code>bool is_our_address = 6;</code>
     */
    protected $is_our_address = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $output_type
     *           The type of the output
     *     @type string $address
     *           The address
     *     @type string $pk_script
     *           The pkscript in hex
     *     @type int|string $output_index
     *           The output index used in the raw transaction
     *     @type int|string $amount
     *           The value of the output coin in satoshis
     *     @type bool $is_our_address
     *           Denotes if the output is controlled by the internal wallet
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the output
     *
     * Generated from protobuf field <code>.lnrpc.OutputScriptType output_type = 1;</code>
     * @return int
     */
    public function getOutputType()
    {
        return $this->output_type;
    }

    /**
     * The type of the output
     *
     * Generated from protobuf field <code>.lnrpc.OutputScriptType output_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOutputType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\OutputScriptType::class);
        $this->output_type = $var;

        return $this;
    }

    /**
     * The address
     *
     * Generated from protobuf field <code>string address = 2;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The address
     *
     * Generated from protobuf field <code>string address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * The pkscript in hex
     *
     * Generated from protobuf field <code>string pk_script = 3;</code>
     * @return string
     */
    public function getPkScript()
    {
        return $this->pk_script;
    }

    /**
     * The pkscript in hex
     *
     * Generated from protobuf field <code>string pk_script = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPkScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->pk_script = $var;

        return $this;
    }

    /**
     * The output index used in the raw transaction
     *
     * Generated from protobuf field <code>int64 output_index = 4;</code>
     * @return int|string
     */
    public function getOutputIndex()
    {
        return $this->output_index;
    }

    /**
     * The output index used in the raw transaction
     *
     * Generated from protobuf field <code>int64 output_index = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOutputIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->output_index = $var;

        return $this;
    }

    /**
     * The value of the output coin in satoshis
     *
     * Generated from protobuf field <code>int64 amount = 5;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * The value of the output coin in satoshis
     *
     * Generated from protobuf field <code>int64 amount = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Denotes if the output is controlled by the internal wallet
     *
     * Generated from protobuf field <code>bool is_our_address = 6;</code>
     * @return bool
     */
    public function getIsOurAddress()
    {
        return $this->is_our_address;
    }

    /**
     * Denotes if the output is controlled by the internal wallet
     *
     * Generated from protobuf field <code>bool is_our_address = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOurAddress($var)
    {
        GPBUtil::checkBool($var);
        $this->is_our_address = $var;

        return $this;
    }

}

