<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.FeeReportResponse</code>
 */
class FeeReportResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * An array of channel fee reports which describes the current fee schedule
     * for each channel.
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelFeeReport channel_fees = 1;</code>
     */
    private $channel_fees;
    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 24 hrs.
     *
     * Generated from protobuf field <code>uint64 day_fee_sum = 2;</code>
     */
    protected $day_fee_sum = 0;
    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 1 week.
     *
     * Generated from protobuf field <code>uint64 week_fee_sum = 3;</code>
     */
    protected $week_fee_sum = 0;
    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 1 month.
     *
     * Generated from protobuf field <code>uint64 month_fee_sum = 4;</code>
     */
    protected $month_fee_sum = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Lnrpc\ChannelFeeReport>|\Google\Protobuf\Internal\RepeatedField $channel_fees
     *           An array of channel fee reports which describes the current fee schedule
     *           for each channel.
     *     @type int|string $day_fee_sum
     *           The total amount of fee revenue (in satoshis) the switch has collected
     *           over the past 24 hrs.
     *     @type int|string $week_fee_sum
     *           The total amount of fee revenue (in satoshis) the switch has collected
     *           over the past 1 week.
     *     @type int|string $month_fee_sum
     *           The total amount of fee revenue (in satoshis) the switch has collected
     *           over the past 1 month.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * An array of channel fee reports which describes the current fee schedule
     * for each channel.
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelFeeReport channel_fees = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelFees()
    {
        return $this->channel_fees;
    }

    /**
     * An array of channel fee reports which describes the current fee schedule
     * for each channel.
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelFeeReport channel_fees = 1;</code>
     * @param array<\Lnrpc\ChannelFeeReport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelFees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\ChannelFeeReport::class);
        $this->channel_fees = $arr;

        return $this;
    }

    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 24 hrs.
     *
     * Generated from protobuf field <code>uint64 day_fee_sum = 2;</code>
     * @return int|string
     */
    public function getDayFeeSum()
    {
        return $this->day_fee_sum;
    }

    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 24 hrs.
     *
     * Generated from protobuf field <code>uint64 day_fee_sum = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDayFeeSum($var)
    {
        GPBUtil::checkUint64($var);
        $this->day_fee_sum = $var;

        return $this;
    }

    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 1 week.
     *
     * Generated from protobuf field <code>uint64 week_fee_sum = 3;</code>
     * @return int|string
     */
    public function getWeekFeeSum()
    {
        return $this->week_fee_sum;
    }

    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 1 week.
     *
     * Generated from protobuf field <code>uint64 week_fee_sum = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWeekFeeSum($var)
    {
        GPBUtil::checkUint64($var);
        $this->week_fee_sum = $var;

        return $this;
    }

    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 1 month.
     *
     * Generated from protobuf field <code>uint64 month_fee_sum = 4;</code>
     * @return int|string
     */
    public function getMonthFeeSum()
    {
        return $this->month_fee_sum;
    }

    /**
     * The total amount of fee revenue (in satoshis) the switch has collected
     * over the past 1 month.
     *
     * Generated from protobuf field <code>uint64 month_fee_sum = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMonthFeeSum($var)
    {
        GPBUtil::checkUint64($var);
        $this->month_fee_sum = $var;

        return $this;
    }

}

