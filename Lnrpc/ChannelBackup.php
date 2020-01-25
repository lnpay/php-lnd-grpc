<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelBackup</code>
 */
class ChannelBackup extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *Identifies the channel that this backup belongs to.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 1[json_name = "chan_point"];</code>
     */
    private $chan_point = null;
    /**
     **
     *Is an encrypted single-chan backup. this can be passed to
     *RestoreChannelBackups, or the WalletUnlocker Init and Unlock methods in
     *order to trigger the recovery protocol. When using REST, this field must be
     *encoded as base64.
     *
     * Generated from protobuf field <code>bytes chan_backup = 2[json_name = "chan_backup"];</code>
     */
    private $chan_backup = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\ChannelPoint $chan_point
     *          *
     *          Identifies the channel that this backup belongs to.
     *     @type string $chan_backup
     *          *
     *          Is an encrypted single-chan backup. this can be passed to
     *          RestoreChannelBackups, or the WalletUnlocker Init and Unlock methods in
     *          order to trigger the recovery protocol. When using REST, this field must be
     *          encoded as base64.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *Identifies the channel that this backup belongs to.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 1[json_name = "chan_point"];</code>
     * @return \Lnrpc\ChannelPoint
     */
    public function getChanPoint()
    {
        return $this->chan_point;
    }

    /**
     **
     *Identifies the channel that this backup belongs to.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 1[json_name = "chan_point"];</code>
     * @param \Lnrpc\ChannelPoint $var
     * @return $this
     */
    public function setChanPoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelPoint::class);
        $this->chan_point = $var;

        return $this;
    }

    /**
     **
     *Is an encrypted single-chan backup. this can be passed to
     *RestoreChannelBackups, or the WalletUnlocker Init and Unlock methods in
     *order to trigger the recovery protocol. When using REST, this field must be
     *encoded as base64.
     *
     * Generated from protobuf field <code>bytes chan_backup = 2[json_name = "chan_backup"];</code>
     * @return string
     */
    public function getChanBackup()
    {
        return $this->chan_backup;
    }

    /**
     **
     *Is an encrypted single-chan backup. this can be passed to
     *RestoreChannelBackups, or the WalletUnlocker Init and Unlock methods in
     *order to trigger the recovery protocol. When using REST, this field must be
     *encoded as base64.
     *
     * Generated from protobuf field <code>bytes chan_backup = 2[json_name = "chan_backup"];</code>
     * @param string $var
     * @return $this
     */
    public function setChanBackup($var)
    {
        GPBUtil::checkString($var, False);
        $this->chan_backup = $var;

        return $this;
    }

}

