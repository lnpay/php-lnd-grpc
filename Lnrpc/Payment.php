<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Payment</code>
 */
class Payment extends \Google\Protobuf\Internal\Message
{
    /**
     * The payment hash
     *
     * Generated from protobuf field <code>string payment_hash = 1;</code>
     */
    protected $payment_hash = '';
    /**
     * Deprecated, use value_sat or value_msat.
     *
     * Generated from protobuf field <code>int64 value = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $value = 0;
    /**
     * Deprecated, use creation_time_ns
     *
     * Generated from protobuf field <code>int64 creation_date = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $creation_date = 0;
    /**
     * Deprecated, use fee_sat or fee_msat.
     *
     * Generated from protobuf field <code>int64 fee = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $fee = 0;
    /**
     * The payment preimage
     *
     * Generated from protobuf field <code>string payment_preimage = 6;</code>
     */
    protected $payment_preimage = '';
    /**
     * The value of the payment in satoshis
     *
     * Generated from protobuf field <code>int64 value_sat = 7;</code>
     */
    protected $value_sat = 0;
    /**
     * The value of the payment in milli-satoshis
     *
     * Generated from protobuf field <code>int64 value_msat = 8;</code>
     */
    protected $value_msat = 0;
    /**
     * The optional payment request being fulfilled.
     *
     * Generated from protobuf field <code>string payment_request = 9;</code>
     */
    protected $payment_request = '';
    /**
     * The status of the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Payment.PaymentStatus status = 10;</code>
     */
    protected $status = 0;
    /**
     *  The fee paid for this payment in satoshis
     *
     * Generated from protobuf field <code>int64 fee_sat = 11;</code>
     */
    protected $fee_sat = 0;
    /**
     *  The fee paid for this payment in milli-satoshis
     *
     * Generated from protobuf field <code>int64 fee_msat = 12;</code>
     */
    protected $fee_msat = 0;
    /**
     * The time in UNIX nanoseconds at which the payment was created.
     *
     * Generated from protobuf field <code>int64 creation_time_ns = 13;</code>
     */
    protected $creation_time_ns = 0;
    /**
     * The HTLCs made in attempt to settle the payment.
     *
     * Generated from protobuf field <code>repeated .lnrpc.HTLCAttempt htlcs = 14;</code>
     */
    private $htlcs;
    /**
     *The creation index of this payment. Each payment can be uniquely identified
     *by this index, which may not strictly increment by 1 for payments made in
     *older versions of lnd.
     *
     * Generated from protobuf field <code>uint64 payment_index = 15;</code>
     */
    protected $payment_index = 0;
    /**
     * Generated from protobuf field <code>.lnrpc.PaymentFailureReason failure_reason = 16;</code>
     */
    protected $failure_reason = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payment_hash
     *           The payment hash
     *     @type int|string $value
     *           Deprecated, use value_sat or value_msat.
     *     @type int|string $creation_date
     *           Deprecated, use creation_time_ns
     *     @type int|string $fee
     *           Deprecated, use fee_sat or fee_msat.
     *     @type string $payment_preimage
     *           The payment preimage
     *     @type int|string $value_sat
     *           The value of the payment in satoshis
     *     @type int|string $value_msat
     *           The value of the payment in milli-satoshis
     *     @type string $payment_request
     *           The optional payment request being fulfilled.
     *     @type int $status
     *           The status of the payment.
     *     @type int|string $fee_sat
     *            The fee paid for this payment in satoshis
     *     @type int|string $fee_msat
     *            The fee paid for this payment in milli-satoshis
     *     @type int|string $creation_time_ns
     *           The time in UNIX nanoseconds at which the payment was created.
     *     @type array<\Lnrpc\HTLCAttempt>|\Google\Protobuf\Internal\RepeatedField $htlcs
     *           The HTLCs made in attempt to settle the payment.
     *     @type int|string $payment_index
     *          The creation index of this payment. Each payment can be uniquely identified
     *          by this index, which may not strictly increment by 1 for payments made in
     *          older versions of lnd.
     *     @type int $failure_reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The payment hash
     *
     * Generated from protobuf field <code>string payment_hash = 1;</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     * The payment hash
     *
     * Generated from protobuf field <code>string payment_hash = 1;</code>
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
     * Deprecated, use value_sat or value_msat.
     *
     * Generated from protobuf field <code>int64 value = 2 [deprecated = true];</code>
     * @return int|string
     * @deprecated
     */
    public function getValue()
    {
        @trigger_error('value is deprecated.', E_USER_DEPRECATED);
        return $this->value;
    }

    /**
     * Deprecated, use value_sat or value_msat.
     *
     * Generated from protobuf field <code>int64 value = 2 [deprecated = true];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setValue($var)
    {
        @trigger_error('value is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Deprecated, use creation_time_ns
     *
     * Generated from protobuf field <code>int64 creation_date = 3 [deprecated = true];</code>
     * @return int|string
     * @deprecated
     */
    public function getCreationDate()
    {
        @trigger_error('creation_date is deprecated.', E_USER_DEPRECATED);
        return $this->creation_date;
    }

    /**
     * Deprecated, use creation_time_ns
     *
     * Generated from protobuf field <code>int64 creation_date = 3 [deprecated = true];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setCreationDate($var)
    {
        @trigger_error('creation_date is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt64($var);
        $this->creation_date = $var;

        return $this;
    }

    /**
     * Deprecated, use fee_sat or fee_msat.
     *
     * Generated from protobuf field <code>int64 fee = 5 [deprecated = true];</code>
     * @return int|string
     * @deprecated
     */
    public function getFee()
    {
        @trigger_error('fee is deprecated.', E_USER_DEPRECATED);
        return $this->fee;
    }

    /**
     * Deprecated, use fee_sat or fee_msat.
     *
     * Generated from protobuf field <code>int64 fee = 5 [deprecated = true];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setFee($var)
    {
        @trigger_error('fee is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * The payment preimage
     *
     * Generated from protobuf field <code>string payment_preimage = 6;</code>
     * @return string
     */
    public function getPaymentPreimage()
    {
        return $this->payment_preimage;
    }

    /**
     * The payment preimage
     *
     * Generated from protobuf field <code>string payment_preimage = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentPreimage($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_preimage = $var;

        return $this;
    }

    /**
     * The value of the payment in satoshis
     *
     * Generated from protobuf field <code>int64 value_sat = 7;</code>
     * @return int|string
     */
    public function getValueSat()
    {
        return $this->value_sat;
    }

    /**
     * The value of the payment in satoshis
     *
     * Generated from protobuf field <code>int64 value_sat = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValueSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->value_sat = $var;

        return $this;
    }

    /**
     * The value of the payment in milli-satoshis
     *
     * Generated from protobuf field <code>int64 value_msat = 8;</code>
     * @return int|string
     */
    public function getValueMsat()
    {
        return $this->value_msat;
    }

    /**
     * The value of the payment in milli-satoshis
     *
     * Generated from protobuf field <code>int64 value_msat = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValueMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->value_msat = $var;

        return $this;
    }

    /**
     * The optional payment request being fulfilled.
     *
     * Generated from protobuf field <code>string payment_request = 9;</code>
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->payment_request;
    }

    /**
     * The optional payment request being fulfilled.
     *
     * Generated from protobuf field <code>string payment_request = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_request = $var;

        return $this;
    }

    /**
     * The status of the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Payment.PaymentStatus status = 10;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the payment.
     *
     * Generated from protobuf field <code>.lnrpc.Payment.PaymentStatus status = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Payment\PaymentStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     *  The fee paid for this payment in satoshis
     *
     * Generated from protobuf field <code>int64 fee_sat = 11;</code>
     * @return int|string
     */
    public function getFeeSat()
    {
        return $this->fee_sat;
    }

    /**
     *  The fee paid for this payment in satoshis
     *
     * Generated from protobuf field <code>int64 fee_sat = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeeSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_sat = $var;

        return $this;
    }

    /**
     *  The fee paid for this payment in milli-satoshis
     *
     * Generated from protobuf field <code>int64 fee_msat = 12;</code>
     * @return int|string
     */
    public function getFeeMsat()
    {
        return $this->fee_msat;
    }

    /**
     *  The fee paid for this payment in milli-satoshis
     *
     * Generated from protobuf field <code>int64 fee_msat = 12;</code>
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
     * The time in UNIX nanoseconds at which the payment was created.
     *
     * Generated from protobuf field <code>int64 creation_time_ns = 13;</code>
     * @return int|string
     */
    public function getCreationTimeNs()
    {
        return $this->creation_time_ns;
    }

    /**
     * The time in UNIX nanoseconds at which the payment was created.
     *
     * Generated from protobuf field <code>int64 creation_time_ns = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTimeNs($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_time_ns = $var;

        return $this;
    }

    /**
     * The HTLCs made in attempt to settle the payment.
     *
     * Generated from protobuf field <code>repeated .lnrpc.HTLCAttempt htlcs = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHtlcs()
    {
        return $this->htlcs;
    }

    /**
     * The HTLCs made in attempt to settle the payment.
     *
     * Generated from protobuf field <code>repeated .lnrpc.HTLCAttempt htlcs = 14;</code>
     * @param array<\Lnrpc\HTLCAttempt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHtlcs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\HTLCAttempt::class);
        $this->htlcs = $arr;

        return $this;
    }

    /**
     *The creation index of this payment. Each payment can be uniquely identified
     *by this index, which may not strictly increment by 1 for payments made in
     *older versions of lnd.
     *
     * Generated from protobuf field <code>uint64 payment_index = 15;</code>
     * @return int|string
     */
    public function getPaymentIndex()
    {
        return $this->payment_index;
    }

    /**
     *The creation index of this payment. Each payment can be uniquely identified
     *by this index, which may not strictly increment by 1 for payments made in
     *older versions of lnd.
     *
     * Generated from protobuf field <code>uint64 payment_index = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPaymentIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->payment_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PaymentFailureReason failure_reason = 16;</code>
     * @return int
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PaymentFailureReason failure_reason = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\PaymentFailureReason::class);
        $this->failure_reason = $var;

        return $this;
    }

}

