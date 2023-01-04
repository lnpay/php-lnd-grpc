<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.FundPsbtRequest</code>
 */
class FundPsbtRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The name of the account to fund the PSBT with. If empty, the default wallet
     *account is used.
     *
     * Generated from protobuf field <code>string account = 5;</code>
     */
    protected $account = '';
    /**
     * The minimum number of confirmations each one of your outputs used for
     * the transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 6;</code>
     */
    protected $min_confs = 0;
    /**
     * Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 7;</code>
     */
    protected $spend_unconfirmed = false;
    protected $template;
    protected $fees;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $psbt
     *          Use an existing PSBT packet as the template for the funded PSBT.
     *          The packet must contain at least one non-dust output. If one or more
     *          inputs are specified, no coin selection is performed. In that case every
     *          input must be an UTXO known to the wallet that has not been locked
     *          before. The sum of all inputs must be sufficiently greater than the sum
     *          of all outputs to pay a miner fee with the specified fee rate. A change
     *          output is added to the PSBT if necessary.
     *     @type \Walletrpc\TxTemplate $raw
     *          Use the outputs and optional inputs from this raw template.
     *     @type int $target_conf
     *          The target number of blocks that the transaction should be confirmed in.
     *     @type int|string $sat_per_vbyte
     *          The fee rate, expressed in sat/vbyte, that should be used to spend the
     *          input with.
     *     @type string $account
     *          The name of the account to fund the PSBT with. If empty, the default wallet
     *          account is used.
     *     @type int $min_confs
     *           The minimum number of confirmations each one of your outputs used for
     *           the transaction must satisfy.
     *     @type bool $spend_unconfirmed
     *           Whether unconfirmed outputs should be used as inputs for the transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *Use an existing PSBT packet as the template for the funded PSBT.
     *The packet must contain at least one non-dust output. If one or more
     *inputs are specified, no coin selection is performed. In that case every
     *input must be an UTXO known to the wallet that has not been locked
     *before. The sum of all inputs must be sufficiently greater than the sum
     *of all outputs to pay a miner fee with the specified fee rate. A change
     *output is added to the PSBT if necessary.
     *
     * Generated from protobuf field <code>bytes psbt = 1;</code>
     * @return string
     */
    public function getPsbt()
    {
        return $this->readOneof(1);
    }

    public function hasPsbt()
    {
        return $this->hasOneof(1);
    }

    /**
     *Use an existing PSBT packet as the template for the funded PSBT.
     *The packet must contain at least one non-dust output. If one or more
     *inputs are specified, no coin selection is performed. In that case every
     *input must be an UTXO known to the wallet that has not been locked
     *before. The sum of all inputs must be sufficiently greater than the sum
     *of all outputs to pay a miner fee with the specified fee rate. A change
     *output is added to the PSBT if necessary.
     *
     * Generated from protobuf field <code>bytes psbt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPsbt($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *Use the outputs and optional inputs from this raw template.
     *
     * Generated from protobuf field <code>.walletrpc.TxTemplate raw = 2;</code>
     * @return \Walletrpc\TxTemplate|null
     */
    public function getRaw()
    {
        return $this->readOneof(2);
    }

    public function hasRaw()
    {
        return $this->hasOneof(2);
    }

    /**
     *Use the outputs and optional inputs from this raw template.
     *
     * Generated from protobuf field <code>.walletrpc.TxTemplate raw = 2;</code>
     * @param \Walletrpc\TxTemplate $var
     * @return $this
     */
    public function setRaw($var)
    {
        GPBUtil::checkMessage($var, \Walletrpc\TxTemplate::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *The target number of blocks that the transaction should be confirmed in.
     *
     * Generated from protobuf field <code>uint32 target_conf = 3;</code>
     * @return int
     */
    public function getTargetConf()
    {
        return $this->readOneof(3);
    }

    public function hasTargetConf()
    {
        return $this->hasOneof(3);
    }

    /**
     *The target number of blocks that the transaction should be confirmed in.
     *
     * Generated from protobuf field <code>uint32 target_conf = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetConf($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     *The fee rate, expressed in sat/vbyte, that should be used to spend the
     *input with.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 4;</code>
     * @return int|string
     */
    public function getSatPerVbyte()
    {
        return $this->readOneof(4);
    }

    public function hasSatPerVbyte()
    {
        return $this->hasOneof(4);
    }

    /**
     *The fee rate, expressed in sat/vbyte, that should be used to spend the
     *input with.
     *
     * Generated from protobuf field <code>uint64 sat_per_vbyte = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSatPerVbyte($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     *The name of the account to fund the PSBT with. If empty, the default wallet
     *account is used.
     *
     * Generated from protobuf field <code>string account = 5;</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     *The name of the account to fund the PSBT with. If empty, the default wallet
     *account is used.
     *
     * Generated from protobuf field <code>string account = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     * The minimum number of confirmations each one of your outputs used for
     * the transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 6;</code>
     * @return int
     */
    public function getMinConfs()
    {
        return $this->min_confs;
    }

    /**
     * The minimum number of confirmations each one of your outputs used for
     * the transaction must satisfy.
     *
     * Generated from protobuf field <code>int32 min_confs = 6;</code>
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
     * Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 7;</code>
     * @return bool
     */
    public function getSpendUnconfirmed()
    {
        return $this->spend_unconfirmed;
    }

    /**
     * Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * Generated from protobuf field <code>bool spend_unconfirmed = 7;</code>
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
     * @return string
     */
    public function getTemplate()
    {
        return $this->whichOneof("template");
    }

    /**
     * @return string
     */
    public function getFees()
    {
        return $this->whichOneof("fees");
    }

}

