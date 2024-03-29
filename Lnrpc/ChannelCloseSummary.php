<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelCloseSummary</code>
 */
class ChannelCloseSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * The outpoint (txid:index) of the funding transaction.
     *
     * Generated from protobuf field <code>string channel_point = 1;</code>
     */
    protected $channel_point = '';
    /**
     *  The unique channel ID for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 2 [jstype = JS_STRING];</code>
     */
    protected $chan_id = 0;
    /**
     * The hash of the genesis block that this channel resides within.
     *
     * Generated from protobuf field <code>string chain_hash = 3;</code>
     */
    protected $chain_hash = '';
    /**
     * The txid of the transaction which ultimately closed this channel.
     *
     * Generated from protobuf field <code>string closing_tx_hash = 4;</code>
     */
    protected $closing_tx_hash = '';
    /**
     * Public key of the remote peer that we formerly had a channel with.
     *
     * Generated from protobuf field <code>string remote_pubkey = 5;</code>
     */
    protected $remote_pubkey = '';
    /**
     * Total capacity of the channel.
     *
     * Generated from protobuf field <code>int64 capacity = 6;</code>
     */
    protected $capacity = 0;
    /**
     * Height at which the funding transaction was spent.
     *
     * Generated from protobuf field <code>uint32 close_height = 7;</code>
     */
    protected $close_height = 0;
    /**
     * Settled balance at the time of channel closure
     *
     * Generated from protobuf field <code>int64 settled_balance = 8;</code>
     */
    protected $settled_balance = 0;
    /**
     * The sum of all the time-locked outputs at the time of channel closure
     *
     * Generated from protobuf field <code>int64 time_locked_balance = 9;</code>
     */
    protected $time_locked_balance = 0;
    /**
     * Details on how the channel was closed.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary.ClosureType close_type = 10;</code>
     */
    protected $close_type = 0;
    /**
     *Open initiator is the party that initiated opening the channel. Note that
     *this value may be unknown if the channel was closed before we migrated to
     *store open channel information after close.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator open_initiator = 11;</code>
     */
    protected $open_initiator = 0;
    /**
     *Close initiator indicates which party initiated the close. This value will
     *be unknown for channels that were cooperatively closed before we started
     *tracking cooperative close initiators. Note that this indicates which party
     *initiated a close, and it is possible for both to initiate cooperative or
     *force closes, although only one party's close will be confirmed on chain.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator close_initiator = 12;</code>
     */
    protected $close_initiator = 0;
    /**
     * Generated from protobuf field <code>repeated .lnrpc.Resolution resolutions = 13;</code>
     */
    private $resolutions;
    /**
     *This lists out the set of alias short channel ids that existed for the
     *closed channel. This may be empty.
     *
     * Generated from protobuf field <code>repeated uint64 alias_scids = 14;</code>
     */
    private $alias_scids;
    /**
     *  The confirmed SCID for a zero-conf channel.
     *
     * Generated from protobuf field <code>uint64 zero_conf_confirmed_scid = 15 [jstype = JS_STRING];</code>
     */
    protected $zero_conf_confirmed_scid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_point
     *           The outpoint (txid:index) of the funding transaction.
     *     @type int|string $chan_id
     *            The unique channel ID for the channel.
     *     @type string $chain_hash
     *           The hash of the genesis block that this channel resides within.
     *     @type string $closing_tx_hash
     *           The txid of the transaction which ultimately closed this channel.
     *     @type string $remote_pubkey
     *           Public key of the remote peer that we formerly had a channel with.
     *     @type int|string $capacity
     *           Total capacity of the channel.
     *     @type int $close_height
     *           Height at which the funding transaction was spent.
     *     @type int|string $settled_balance
     *           Settled balance at the time of channel closure
     *     @type int|string $time_locked_balance
     *           The sum of all the time-locked outputs at the time of channel closure
     *     @type int $close_type
     *           Details on how the channel was closed.
     *     @type int $open_initiator
     *          Open initiator is the party that initiated opening the channel. Note that
     *          this value may be unknown if the channel was closed before we migrated to
     *          store open channel information after close.
     *     @type int $close_initiator
     *          Close initiator indicates which party initiated the close. This value will
     *          be unknown for channels that were cooperatively closed before we started
     *          tracking cooperative close initiators. Note that this indicates which party
     *          initiated a close, and it is possible for both to initiate cooperative or
     *          force closes, although only one party's close will be confirmed on chain.
     *     @type array<\Lnrpc\Resolution>|\Google\Protobuf\Internal\RepeatedField $resolutions
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $alias_scids
     *          This lists out the set of alias short channel ids that existed for the
     *          closed channel. This may be empty.
     *     @type int|string $zero_conf_confirmed_scid
     *            The confirmed SCID for a zero-conf channel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * The outpoint (txid:index) of the funding transaction.
     *
     * Generated from protobuf field <code>string channel_point = 1;</code>
     * @return string
     */
    public function getChannelPoint()
    {
        return $this->channel_point;
    }

    /**
     * The outpoint (txid:index) of the funding transaction.
     *
     * Generated from protobuf field <code>string channel_point = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_point = $var;

        return $this;
    }

    /**
     *  The unique channel ID for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     *  The unique channel ID for the channel.
     *
     * Generated from protobuf field <code>uint64 chan_id = 2 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

    /**
     * The hash of the genesis block that this channel resides within.
     *
     * Generated from protobuf field <code>string chain_hash = 3;</code>
     * @return string
     */
    public function getChainHash()
    {
        return $this->chain_hash;
    }

    /**
     * The hash of the genesis block that this channel resides within.
     *
     * Generated from protobuf field <code>string chain_hash = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setChainHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->chain_hash = $var;

        return $this;
    }

    /**
     * The txid of the transaction which ultimately closed this channel.
     *
     * Generated from protobuf field <code>string closing_tx_hash = 4;</code>
     * @return string
     */
    public function getClosingTxHash()
    {
        return $this->closing_tx_hash;
    }

    /**
     * The txid of the transaction which ultimately closed this channel.
     *
     * Generated from protobuf field <code>string closing_tx_hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClosingTxHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->closing_tx_hash = $var;

        return $this;
    }

    /**
     * Public key of the remote peer that we formerly had a channel with.
     *
     * Generated from protobuf field <code>string remote_pubkey = 5;</code>
     * @return string
     */
    public function getRemotePubkey()
    {
        return $this->remote_pubkey;
    }

    /**
     * Public key of the remote peer that we formerly had a channel with.
     *
     * Generated from protobuf field <code>string remote_pubkey = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRemotePubkey($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_pubkey = $var;

        return $this;
    }

    /**
     * Total capacity of the channel.
     *
     * Generated from protobuf field <code>int64 capacity = 6;</code>
     * @return int|string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Total capacity of the channel.
     *
     * Generated from protobuf field <code>int64 capacity = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity = $var;

        return $this;
    }

    /**
     * Height at which the funding transaction was spent.
     *
     * Generated from protobuf field <code>uint32 close_height = 7;</code>
     * @return int
     */
    public function getCloseHeight()
    {
        return $this->close_height;
    }

    /**
     * Height at which the funding transaction was spent.
     *
     * Generated from protobuf field <code>uint32 close_height = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCloseHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->close_height = $var;

        return $this;
    }

    /**
     * Settled balance at the time of channel closure
     *
     * Generated from protobuf field <code>int64 settled_balance = 8;</code>
     * @return int|string
     */
    public function getSettledBalance()
    {
        return $this->settled_balance;
    }

    /**
     * Settled balance at the time of channel closure
     *
     * Generated from protobuf field <code>int64 settled_balance = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSettledBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->settled_balance = $var;

        return $this;
    }

    /**
     * The sum of all the time-locked outputs at the time of channel closure
     *
     * Generated from protobuf field <code>int64 time_locked_balance = 9;</code>
     * @return int|string
     */
    public function getTimeLockedBalance()
    {
        return $this->time_locked_balance;
    }

    /**
     * The sum of all the time-locked outputs at the time of channel closure
     *
     * Generated from protobuf field <code>int64 time_locked_balance = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeLockedBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_locked_balance = $var;

        return $this;
    }

    /**
     * Details on how the channel was closed.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary.ClosureType close_type = 10;</code>
     * @return int
     */
    public function getCloseType()
    {
        return $this->close_type;
    }

    /**
     * Details on how the channel was closed.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary.ClosureType close_type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCloseType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\ChannelCloseSummary\ClosureType::class);
        $this->close_type = $var;

        return $this;
    }

    /**
     *Open initiator is the party that initiated opening the channel. Note that
     *this value may be unknown if the channel was closed before we migrated to
     *store open channel information after close.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator open_initiator = 11;</code>
     * @return int
     */
    public function getOpenInitiator()
    {
        return $this->open_initiator;
    }

    /**
     *Open initiator is the party that initiated opening the channel. Note that
     *this value may be unknown if the channel was closed before we migrated to
     *store open channel information after close.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator open_initiator = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setOpenInitiator($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Initiator::class);
        $this->open_initiator = $var;

        return $this;
    }

    /**
     *Close initiator indicates which party initiated the close. This value will
     *be unknown for channels that were cooperatively closed before we started
     *tracking cooperative close initiators. Note that this indicates which party
     *initiated a close, and it is possible for both to initiate cooperative or
     *force closes, although only one party's close will be confirmed on chain.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator close_initiator = 12;</code>
     * @return int
     */
    public function getCloseInitiator()
    {
        return $this->close_initiator;
    }

    /**
     *Close initiator indicates which party initiated the close. This value will
     *be unknown for channels that were cooperatively closed before we started
     *tracking cooperative close initiators. Note that this indicates which party
     *initiated a close, and it is possible for both to initiate cooperative or
     *force closes, although only one party's close will be confirmed on chain.
     *
     * Generated from protobuf field <code>.lnrpc.Initiator close_initiator = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCloseInitiator($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\Initiator::class);
        $this->close_initiator = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Resolution resolutions = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResolutions()
    {
        return $this->resolutions;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Resolution resolutions = 13;</code>
     * @param array<\Lnrpc\Resolution>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResolutions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Resolution::class);
        $this->resolutions = $arr;

        return $this;
    }

    /**
     *This lists out the set of alias short channel ids that existed for the
     *closed channel. This may be empty.
     *
     * Generated from protobuf field <code>repeated uint64 alias_scids = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAliasScids()
    {
        return $this->alias_scids;
    }

    /**
     *This lists out the set of alias short channel ids that existed for the
     *closed channel. This may be empty.
     *
     * Generated from protobuf field <code>repeated uint64 alias_scids = 14;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAliasScids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->alias_scids = $arr;

        return $this;
    }

    /**
     *  The confirmed SCID for a zero-conf channel.
     *
     * Generated from protobuf field <code>uint64 zero_conf_confirmed_scid = 15 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getZeroConfConfirmedScid()
    {
        return $this->zero_conf_confirmed_scid;
    }

    /**
     *  The confirmed SCID for a zero-conf channel.
     *
     * Generated from protobuf field <code>uint64 zero_conf_confirmed_scid = 15 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setZeroConfConfirmedScid($var)
    {
        GPBUtil::checkUint64($var);
        $this->zero_conf_confirmed_scid = $var;

        return $this;
    }

}

