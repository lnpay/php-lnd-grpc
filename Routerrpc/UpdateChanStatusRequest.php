<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.UpdateChanStatusRequest</code>
 */
class UpdateChanStatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 1;</code>
     */
    protected $chan_point = null;
    /**
     * Generated from protobuf field <code>.routerrpc.ChanStatusAction action = 2;</code>
     */
    protected $action = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\ChannelPoint $chan_point
     *     @type int $action
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 1;</code>
     * @return \Lnrpc\ChannelPoint|null
     */
    public function getChanPoint()
    {
        return $this->chan_point;
    }

    public function hasChanPoint()
    {
        return isset($this->chan_point);
    }

    public function clearChanPoint()
    {
        unset($this->chan_point);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelPoint chan_point = 1;</code>
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
     * Generated from protobuf field <code>.routerrpc.ChanStatusAction action = 2;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.routerrpc.ChanStatusAction action = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Routerrpc\ChanStatusAction::class);
        $this->action = $var;

        return $this;
    }

}

