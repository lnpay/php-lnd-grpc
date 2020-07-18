<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Failure</code>
 */
class Failure extends \Google\Protobuf\Internal\Message
{
    /**
     * Failure code as defined in the Lightning spec
     *
     * Generated from protobuf field <code>.lnrpc.Failure.FailureCode code = 1;</code>
     */
    private $code = 0;
    /**
     * An optional channel update message.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelUpdate channel_update = 3;</code>
     */
    private $channel_update = null;
    /**
     * A failure type-dependent htlc value.
     *
     * Generated from protobuf field <code>uint64 htlc_msat = 4;</code>
     */
    private $htlc_msat = 0;
    /**
     * The sha256 sum of the onion payload.
     *
     * Generated from protobuf field <code>bytes onion_sha_256 = 5;</code>
     */
    private $onion_sha_256 = '';
    /**
     * A failure type-dependent cltv expiry value.
     *
     * Generated from protobuf field <code>uint32 cltv_expiry = 6;</code>
     */
    private $cltv_expiry = 0;
    /**
     * A failure type-dependent flags value.
     *
     * Generated from protobuf field <code>uint32 flags = 7;</code>
     */
    private $flags = 0;
    /**
     *The position in the path of the intermediate or final node that generated
     *the failure message. Position zero is the sender node.
     *
     * Generated from protobuf field <code>uint32 failure_source_index = 8;</code>
     */
    private $failure_source_index = 0;
    /**
     * A failure type-dependent block height.
     *
     * Generated from protobuf field <code>uint32 height = 9;</code>
     */
    private $height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Failure code as defined in the Lightning spec
     *     @type \Lnrpc\ChannelUpdate $channel_update
     *           An optional channel update message.
     *     @type int|string $htlc_msat
     *           A failure type-dependent htlc value.
     *     @type string $onion_sha_256
     *           The sha256 sum of the onion payload.
     *     @type int $cltv_expiry
     *           A failure type-dependent cltv expiry value.
     *     @type int $flags
     *           A failure type-dependent flags value.
     *     @type int $failure_source_index
     *          The position in the path of the intermediate or final node that generated
     *          the failure message. Position zero is the sender node.
     *     @type int $height
     *           A failure type-dependent block height.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Failure code as defined in the Lightning spec
     *
     * Generated from protobuf field <code>.lnrpc.Failure.FailureCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Failure code as defined in the Lightning spec
     *
     * Generated from protobuf field <code>.lnrpc.Failure.FailureCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Failure_FailureCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * An optional channel update message.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelUpdate channel_update = 3;</code>
     * @return \Lnrpc\ChannelUpdate
     */
    public function getChannelUpdate()
    {
        return $this->channel_update;
    }

    /**
     * An optional channel update message.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelUpdate channel_update = 3;</code>
     * @param \Lnrpc\ChannelUpdate $var
     * @return $this
     */
    public function setChannelUpdate($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelUpdate::class);
        $this->channel_update = $var;

        return $this;
    }

    /**
     * A failure type-dependent htlc value.
     *
     * Generated from protobuf field <code>uint64 htlc_msat = 4;</code>
     * @return int|string
     */
    public function getHtlcMsat()
    {
        return $this->htlc_msat;
    }

    /**
     * A failure type-dependent htlc value.
     *
     * Generated from protobuf field <code>uint64 htlc_msat = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHtlcMsat($var)
    {
        GPBUtil::checkUint64($var);
        $this->htlc_msat = $var;

        return $this;
    }

    /**
     * The sha256 sum of the onion payload.
     *
     * Generated from protobuf field <code>bytes onion_sha_256 = 5;</code>
     * @return string
     */
    public function getOnionSha256()
    {
        return $this->onion_sha_256;
    }

    /**
     * The sha256 sum of the onion payload.
     *
     * Generated from protobuf field <code>bytes onion_sha_256 = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOnionSha256($var)
    {
        GPBUtil::checkString($var, False);
        $this->onion_sha_256 = $var;

        return $this;
    }

    /**
     * A failure type-dependent cltv expiry value.
     *
     * Generated from protobuf field <code>uint32 cltv_expiry = 6;</code>
     * @return int
     */
    public function getCltvExpiry()
    {
        return $this->cltv_expiry;
    }

    /**
     * A failure type-dependent cltv expiry value.
     *
     * Generated from protobuf field <code>uint32 cltv_expiry = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCltvExpiry($var)
    {
        GPBUtil::checkUint32($var);
        $this->cltv_expiry = $var;

        return $this;
    }

    /**
     * A failure type-dependent flags value.
     *
     * Generated from protobuf field <code>uint32 flags = 7;</code>
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * A failure type-dependent flags value.
     *
     * Generated from protobuf field <code>uint32 flags = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->flags = $var;

        return $this;
    }

    /**
     *The position in the path of the intermediate or final node that generated
     *the failure message. Position zero is the sender node.
     *
     * Generated from protobuf field <code>uint32 failure_source_index = 8;</code>
     * @return int
     */
    public function getFailureSourceIndex()
    {
        return $this->failure_source_index;
    }

    /**
     *The position in the path of the intermediate or final node that generated
     *the failure message. Position zero is the sender node.
     *
     * Generated from protobuf field <code>uint32 failure_source_index = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setFailureSourceIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->failure_source_index = $var;

        return $this;
    }

    /**
     * A failure type-dependent block height.
     *
     * Generated from protobuf field <code>uint32 height = 9;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * A failure type-dependent block height.
     *
     * Generated from protobuf field <code>uint32 height = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->height = $var;

        return $this;
    }

}
