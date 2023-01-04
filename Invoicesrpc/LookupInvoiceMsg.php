<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: invoices.proto

namespace Invoicesrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>invoicesrpc.LookupInvoiceMsg</code>
 */
class LookupInvoiceMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.invoicesrpc.LookupModifier lookup_modifier = 4;</code>
     */
    protected $lookup_modifier = 0;
    protected $invoice_ref;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payment_hash
     *           When using REST, this field must be encoded as base64.
     *     @type string $payment_addr
     *     @type string $set_id
     *     @type int $lookup_modifier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoices::initOnce();
        parent::__construct($data);
    }

    /**
     * When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes payment_hash = 1;</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->readOneof(1);
    }

    public function hasPaymentHash()
    {
        return $this->hasOneof(1);
    }

    /**
     * When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes payment_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payment_addr = 2;</code>
     * @return string
     */
    public function getPaymentAddr()
    {
        return $this->readOneof(2);
    }

    public function hasPaymentAddr()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>bytes payment_addr = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes set_id = 3;</code>
     * @return string
     */
    public function getSetId()
    {
        return $this->readOneof(3);
    }

    public function hasSetId()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>bytes set_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSetId($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.invoicesrpc.LookupModifier lookup_modifier = 4;</code>
     * @return int
     */
    public function getLookupModifier()
    {
        return $this->lookup_modifier;
    }

    /**
     * Generated from protobuf field <code>.invoicesrpc.LookupModifier lookup_modifier = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLookupModifier($var)
    {
        GPBUtil::checkEnum($var, \Invoicesrpc\LookupModifier::class);
        $this->lookup_modifier = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceRef()
    {
        return $this->whichOneof("invoice_ref");
    }

}

