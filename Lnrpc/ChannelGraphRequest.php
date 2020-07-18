<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelGraphRequest</code>
 */
class ChannelGraphRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Whether unannounced channels are included in the response or not. If set,
     *unannounced channels are included. Unannounced channels are both private
     *channels, and public channels that are not yet announced to the network.
     *
     * Generated from protobuf field <code>bool include_unannounced = 1;</code>
     */
    private $include_unannounced = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $include_unannounced
     *          Whether unannounced channels are included in the response or not. If set,
     *          unannounced channels are included. Unannounced channels are both private
     *          channels, and public channels that are not yet announced to the network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *Whether unannounced channels are included in the response or not. If set,
     *unannounced channels are included. Unannounced channels are both private
     *channels, and public channels that are not yet announced to the network.
     *
     * Generated from protobuf field <code>bool include_unannounced = 1;</code>
     * @return bool
     */
    public function getIncludeUnannounced()
    {
        return $this->include_unannounced;
    }

    /**
     *Whether unannounced channels are included in the response or not. If set,
     *unannounced channels are included. Unannounced channels are both private
     *channels, and public channels that are not yet announced to the network.
     *
     * Generated from protobuf field <code>bool include_unannounced = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeUnannounced($var)
    {
        GPBUtil::checkBool($var);
        $this->include_unannounced = $var;

        return $this;
    }

}

