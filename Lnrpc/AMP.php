<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details specific to AMP HTLCs.
 *
 * Generated from protobuf message <code>lnrpc.AMP</code>
 */
class AMP extends \Google\Protobuf\Internal\Message
{
    /**
     * An n-of-n secret share of the root seed from which child payment hashes
     * and preimages are derived.
     *
     * Generated from protobuf field <code>bytes root_share = 1;</code>
     */
    protected $root_share = '';
    /**
     * An identifier for the HTLC set that this HTLC belongs to.
     *
     * Generated from protobuf field <code>bytes set_id = 2;</code>
     */
    protected $set_id = '';
    /**
     * A nonce used to randomize the child preimage and child hash from a given
     * root_share.
     *
     * Generated from protobuf field <code>uint32 child_index = 3;</code>
     */
    protected $child_index = 0;
    /**
     * The payment hash of the AMP HTLC.
     *
     * Generated from protobuf field <code>bytes hash = 4;</code>
     */
    protected $hash = '';
    /**
     * The preimage used to settle this AMP htlc. This field will only be
     * populated if the invoice is in InvoiceState_ACCEPTED or
     * InvoiceState_SETTLED.
     *
     * Generated from protobuf field <code>bytes preimage = 5;</code>
     */
    protected $preimage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $root_share
     *           An n-of-n secret share of the root seed from which child payment hashes
     *           and preimages are derived.
     *     @type string $set_id
     *           An identifier for the HTLC set that this HTLC belongs to.
     *     @type int $child_index
     *           A nonce used to randomize the child preimage and child hash from a given
     *           root_share.
     *     @type string $hash
     *           The payment hash of the AMP HTLC.
     *     @type string $preimage
     *           The preimage used to settle this AMP htlc. This field will only be
     *           populated if the invoice is in InvoiceState_ACCEPTED or
     *           InvoiceState_SETTLED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * An n-of-n secret share of the root seed from which child payment hashes
     * and preimages are derived.
     *
     * Generated from protobuf field <code>bytes root_share = 1;</code>
     * @return string
     */
    public function getRootShare()
    {
        return $this->root_share;
    }

    /**
     * An n-of-n secret share of the root seed from which child payment hashes
     * and preimages are derived.
     *
     * Generated from protobuf field <code>bytes root_share = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRootShare($var)
    {
        GPBUtil::checkString($var, False);
        $this->root_share = $var;

        return $this;
    }

    /**
     * An identifier for the HTLC set that this HTLC belongs to.
     *
     * Generated from protobuf field <code>bytes set_id = 2;</code>
     * @return string
     */
    public function getSetId()
    {
        return $this->set_id;
    }

    /**
     * An identifier for the HTLC set that this HTLC belongs to.
     *
     * Generated from protobuf field <code>bytes set_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSetId($var)
    {
        GPBUtil::checkString($var, False);
        $this->set_id = $var;

        return $this;
    }

    /**
     * A nonce used to randomize the child preimage and child hash from a given
     * root_share.
     *
     * Generated from protobuf field <code>uint32 child_index = 3;</code>
     * @return int
     */
    public function getChildIndex()
    {
        return $this->child_index;
    }

    /**
     * A nonce used to randomize the child preimage and child hash from a given
     * root_share.
     *
     * Generated from protobuf field <code>uint32 child_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChildIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->child_index = $var;

        return $this;
    }

    /**
     * The payment hash of the AMP HTLC.
     *
     * Generated from protobuf field <code>bytes hash = 4;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The payment hash of the AMP HTLC.
     *
     * Generated from protobuf field <code>bytes hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * The preimage used to settle this AMP htlc. This field will only be
     * populated if the invoice is in InvoiceState_ACCEPTED or
     * InvoiceState_SETTLED.
     *
     * Generated from protobuf field <code>bytes preimage = 5;</code>
     * @return string
     */
    public function getPreimage()
    {
        return $this->preimage;
    }

    /**
     * The preimage used to settle this AMP htlc. This field will only be
     * populated if the invoice is in InvoiceState_ACCEPTED or
     * InvoiceState_SETTLED.
     *
     * Generated from protobuf field <code>bytes preimage = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->preimage = $var;

        return $this;
    }

}

