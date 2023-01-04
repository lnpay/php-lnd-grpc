<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.BatchOpenChannelRequest</code>
 */
class BatchOpenChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of channels to open.
     *
     * Generated from protobuf field <code>repeated .lnrpc.BatchOpenChannel channels = 1;</code>
     */
    private $channels;
    /**
     * The target number of blocks that the funding transaction should be
     * confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 2;</code>
     */
    protected $target_conf = 0;
    /**
     * A manual fee rate set in sat/vByte that should be used when crafting the
     * funding transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_vbyte = 3;</code>
     */
    protected $sat_per_vbyte = 0;
    /**
     * The minimum number of confirmations each one of your outputs used for
     * the funding transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 4;</code>
     */
    protected $min_confs = 0;
    /**
     * Whether unconfirmed outputs should be used as inputs for the funding
     * transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 5;</code>
     */
    protected $spend_unconfirmed = false;
    /**
     * An optional label for the batch transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 6;</code>
     */
    protected $label = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Lnrpc\BatchOpenChannel>|\Google\Protobuf\Internal\RepeatedField $channels
     *           The list of channels to open.
     *     @type int $target_conf
     *           The target number of blocks that the funding transaction should be
     *           confirmed by.
     *     @type int|string $sat_per_vbyte
     *           A manual fee rate set in sat/vByte that should be used when crafting the
     *           funding transaction.
     *     @type int $min_confs
     *           The minimum number of confirmations each one of your outputs used for
     *           the funding transaction must satisfy.
     *     @type bool $spend_unconfirmed
     *           Whether unconfirmed outputs should be used as inputs for the funding
     *           transaction.
     *     @type string $label
     *           An optional label for the batch transaction, limited to 500 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of channels to open.
     *
     * Generated from protobuf field <code>repeated .lnrpc.BatchOpenChannel channels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * The list of channels to open.
     *
     * Generated from protobuf field <code>repeated .lnrpc.BatchOpenChannel channels = 1;</code>
     * @param array<\Lnrpc\BatchOpenChannel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\BatchOpenChannel::class);
        $this->channels = $arr;

        return $this;
    }

    /**
     * The target number of blocks that the funding transaction should be
     * confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 2;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->target_conf;
    }

    /**
     * The target number of blocks that the funding transaction should be
     * confirmed by.
     *
     * Generated from protobuf field <code>int32 target_conf = 2;</code>
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
     * A manual fee rate set in sat/vByte that should be used when crafting the
     * funding transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_vbyte = 3;</code>
     * @return int|string
     */
    public function getSatPerVbyte()
    {
        return $this->sat_per_vbyte;
    }

    /**
     * A manual fee rate set in sat/vByte that should be used when crafting the
     * funding transaction.
     *
     * Generated from protobuf field <code>int64 sat_per_vbyte = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerVbyte($var)
    {
        GPBUtil::checkInt64($var);
        $this->sat_per_vbyte = $var;

        return $this;
    }

    /**
     * The minimum number of confirmations each one of your outputs used for
     * the funding transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 4;</code>
     * @return int
     */
    public function getMinConfs()
    {
        return $this->min_confs;
    }

    /**
     * The minimum number of confirmations each one of your outputs used for
     * the funding transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMinConfs($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_confs = $var;

        return $this;
    }

    /**
     * Whether unconfirmed outputs should be used as inputs for the funding
     * transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 5;</code>
     * @return bool
     */
    public function getSpendUnconfirmed()
    {
        return $this->spend_unconfirmed;
    }

    /**
     * Whether unconfirmed outputs should be used as inputs for the funding
     * transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSpendUnconfirmed($var)
    {
        GPBUtil::checkBool($var);
        $this->spend_unconfirmed = $var;

        return $this;
    }

    /**
     * An optional label for the batch transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 6;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * An optional label for the batch transaction, limited to 500 characters.
     *
     * Generated from protobuf field <code>string label = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

}

