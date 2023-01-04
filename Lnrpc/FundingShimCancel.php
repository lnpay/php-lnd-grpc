<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.FundingShimCancel</code>
 */
class FundingShimCancel extends \Google\Protobuf\Internal\Message
{
    /**
     * The pending channel ID of the channel to cancel the funding shim for.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 1;</code>
     */
    protected $pending_chan_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pending_chan_id
     *           The pending channel ID of the channel to cancel the funding shim for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The pending channel ID of the channel to cancel the funding shim for.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 1;</code>
     * @return string
     */
    public function getPendingChanId()
    {
        return $this->pending_chan_id;
    }

    /**
     * The pending channel ID of the channel to cancel the funding shim for.
     *
     * Generated from protobuf field <code>bytes pending_chan_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPendingChanId($var)
    {
        GPBUtil::checkString($var, False);
        $this->pending_chan_id = $var;

        return $this;
    }

}

