<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.MuSig2RegisterNoncesResponse</code>
 */
class MuSig2RegisterNoncesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Indicates whether all nonces required to start the signing process are known
     *now.
     *
     * Generated from protobuf field <code>bool have_all_nonces = 1;</code>
     */
    protected $have_all_nonces = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $have_all_nonces
     *          Indicates whether all nonces required to start the signing process are known
     *          now.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *Indicates whether all nonces required to start the signing process are known
     *now.
     *
     * Generated from protobuf field <code>bool have_all_nonces = 1;</code>
     * @return bool
     */
    public function getHaveAllNonces()
    {
        return $this->have_all_nonces;
    }

    /**
     *Indicates whether all nonces required to start the signing process are known
     *now.
     *
     * Generated from protobuf field <code>bool have_all_nonces = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setHaveAllNonces($var)
    {
        GPBUtil::checkBool($var);
        $this->have_all_nonces = $var;

        return $this;
    }

}

