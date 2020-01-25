<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.MPPRecord</code>
 */
class MPPRecord extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *A unique, random identifier used to authenticate the sender as the intended
     *payer of a multi-path payment. The payment_addr must be the same for all
     *subpayments, and match the payment_addr provided in the receiver's invoice.
     *The same payment_addr must be used on all subpayments.
     *
     * Generated from protobuf field <code>bytes payment_addr = 11[json_name = "payment_addr"];</code>
     */
    private $payment_addr = '';
    /**
     **
     *The total amount in milli-satoshis being sent as part of a larger multi-path
     *payment. The caller is responsible for ensuring subpayments to the same node
     *and payment_hash sum exactly to total_amt_msat. The same
     *total_amt_msat must be used on all subpayments.
     *
     * Generated from protobuf field <code>int64 total_amt_msat = 10[json_name = "total_amt_msat"];</code>
     */
    private $total_amt_msat = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payment_addr
     *          *
     *          A unique, random identifier used to authenticate the sender as the intended
     *          payer of a multi-path payment. The payment_addr must be the same for all
     *          subpayments, and match the payment_addr provided in the receiver's invoice.
     *          The same payment_addr must be used on all subpayments.
     *     @type int|string $total_amt_msat
     *          *
     *          The total amount in milli-satoshis being sent as part of a larger multi-path
     *          payment. The caller is responsible for ensuring subpayments to the same node
     *          and payment_hash sum exactly to total_amt_msat. The same
     *          total_amt_msat must be used on all subpayments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *A unique, random identifier used to authenticate the sender as the intended
     *payer of a multi-path payment. The payment_addr must be the same for all
     *subpayments, and match the payment_addr provided in the receiver's invoice.
     *The same payment_addr must be used on all subpayments.
     *
     * Generated from protobuf field <code>bytes payment_addr = 11[json_name = "payment_addr"];</code>
     * @return string
     */
    public function getPaymentAddr()
    {
        return $this->payment_addr;
    }

    /**
     **
     *A unique, random identifier used to authenticate the sender as the intended
     *payer of a multi-path payment. The payment_addr must be the same for all
     *subpayments, and match the payment_addr provided in the receiver's invoice.
     *The same payment_addr must be used on all subpayments.
     *
     * Generated from protobuf field <code>bytes payment_addr = 11[json_name = "payment_addr"];</code>
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
     **
     *The total amount in milli-satoshis being sent as part of a larger multi-path
     *payment. The caller is responsible for ensuring subpayments to the same node
     *and payment_hash sum exactly to total_amt_msat. The same
     *total_amt_msat must be used on all subpayments.
     *
     * Generated from protobuf field <code>int64 total_amt_msat = 10[json_name = "total_amt_msat"];</code>
     * @return int|string
     */
    public function getTotalAmtMsat()
    {
        return $this->total_amt_msat;
    }

    /**
     **
     *The total amount in milli-satoshis being sent as part of a larger multi-path
     *payment. The caller is responsible for ensuring subpayments to the same node
     *and payment_hash sum exactly to total_amt_msat. The same
     *total_amt_msat must be used on all subpayments.
     *
     * Generated from protobuf field <code>int64 total_amt_msat = 10[json_name = "total_amt_msat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalAmtMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_amt_msat = $var;

        return $this;
    }

}

