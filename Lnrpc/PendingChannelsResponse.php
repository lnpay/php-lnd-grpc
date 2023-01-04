<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelsResponse</code>
 */
class PendingChannelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The balance in satoshis encumbered in pending channels
     *
     * Generated from protobuf field <code>int64 total_limbo_balance = 1;</code>
     */
    protected $total_limbo_balance = 0;
    /**
     * Channels pending opening
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.PendingOpenChannel pending_open_channels = 2;</code>
     */
    private $pending_open_channels;
    /**
     *Deprecated: Channels pending closing previously contained cooperatively
     *closed channels with a single confirmation. These channels are now
     *considered closed from the time we see them on chain.
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.ClosedChannel pending_closing_channels = 3 [deprecated = true];</code>
     * @deprecated
     */
    private $pending_closing_channels;
    /**
     * Channels pending force closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.ForceClosedChannel pending_force_closing_channels = 4;</code>
     */
    private $pending_force_closing_channels;
    /**
     * Channels waiting for closing tx to confirm
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.WaitingCloseChannel waiting_close_channels = 5;</code>
     */
    private $waiting_close_channels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_limbo_balance
     *           The balance in satoshis encumbered in pending channels
     *     @type array<\Lnrpc\PendingChannelsResponse\PendingOpenChannel>|\Google\Protobuf\Internal\RepeatedField $pending_open_channels
     *           Channels pending opening
     *     @type array<\Lnrpc\PendingChannelsResponse\ClosedChannel>|\Google\Protobuf\Internal\RepeatedField $pending_closing_channels
     *          Deprecated: Channels pending closing previously contained cooperatively
     *          closed channels with a single confirmation. These channels are now
     *          considered closed from the time we see them on chain.
     *     @type array<\Lnrpc\PendingChannelsResponse\ForceClosedChannel>|\Google\Protobuf\Internal\RepeatedField $pending_force_closing_channels
     *           Channels pending force closing
     *     @type array<\Lnrpc\PendingChannelsResponse\WaitingCloseChannel>|\Google\Protobuf\Internal\RepeatedField $waiting_close_channels
     *           Channels waiting for closing tx to confirm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The balance in satoshis encumbered in pending channels
     *
     * Generated from protobuf field <code>int64 total_limbo_balance = 1;</code>
     * @return int|string
     */
    public function getTotalLimboBalance()
    {
        return $this->total_limbo_balance;
    }

    /**
     * The balance in satoshis encumbered in pending channels
     *
     * Generated from protobuf field <code>int64 total_limbo_balance = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalLimboBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_limbo_balance = $var;

        return $this;
    }

    /**
     * Channels pending opening
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.PendingOpenChannel pending_open_channels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingOpenChannels()
    {
        return $this->pending_open_channels;
    }

    /**
     * Channels pending opening
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.PendingOpenChannel pending_open_channels = 2;</code>
     * @param array<\Lnrpc\PendingChannelsResponse\PendingOpenChannel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingOpenChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\PendingChannelsResponse\PendingOpenChannel::class);
        $this->pending_open_channels = $arr;

        return $this;
    }

    /**
     *Deprecated: Channels pending closing previously contained cooperatively
     *closed channels with a single confirmation. These channels are now
     *considered closed from the time we see them on chain.
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.ClosedChannel pending_closing_channels = 3 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getPendingClosingChannels()
    {
        @trigger_error('pending_closing_channels is deprecated.', E_USER_DEPRECATED);
        return $this->pending_closing_channels;
    }

    /**
     *Deprecated: Channels pending closing previously contained cooperatively
     *closed channels with a single confirmation. These channels are now
     *considered closed from the time we see them on chain.
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.ClosedChannel pending_closing_channels = 3 [deprecated = true];</code>
     * @param array<\Lnrpc\PendingChannelsResponse\ClosedChannel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setPendingClosingChannels($var)
    {
        @trigger_error('pending_closing_channels is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\PendingChannelsResponse\ClosedChannel::class);
        $this->pending_closing_channels = $arr;

        return $this;
    }

    /**
     * Channels pending force closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.ForceClosedChannel pending_force_closing_channels = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingForceClosingChannels()
    {
        return $this->pending_force_closing_channels;
    }

    /**
     * Channels pending force closing
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.ForceClosedChannel pending_force_closing_channels = 4;</code>
     * @param array<\Lnrpc\PendingChannelsResponse\ForceClosedChannel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingForceClosingChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\PendingChannelsResponse\ForceClosedChannel::class);
        $this->pending_force_closing_channels = $arr;

        return $this;
    }

    /**
     * Channels waiting for closing tx to confirm
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.WaitingCloseChannel waiting_close_channels = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWaitingCloseChannels()
    {
        return $this->waiting_close_channels;
    }

    /**
     * Channels waiting for closing tx to confirm
     *
     * Generated from protobuf field <code>repeated .lnrpc.PendingChannelsResponse.WaitingCloseChannel waiting_close_channels = 5;</code>
     * @param array<\Lnrpc\PendingChannelsResponse\WaitingCloseChannel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWaitingCloseChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\PendingChannelsResponse\WaitingCloseChannel::class);
        $this->waiting_close_channels = $arr;

        return $this;
    }

}

