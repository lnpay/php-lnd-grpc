<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: autopilot.proto

namespace Autopilotrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>autopilotrpc.ModifyStatusRequest</code>
 */
class ModifyStatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the autopilot agent should be enabled or not.
     *
     * Generated from protobuf field <code>bool enable = 1;</code>
     */
    protected $enable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable
     *           Whether the autopilot agent should be enabled or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Autopilot::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the autopilot agent should be enabled or not.
     *
     * Generated from protobuf field <code>bool enable = 1;</code>
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Whether the autopilot agent should be enabled or not.
     *
     * Generated from protobuf field <code>bool enable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->enable = $var;

        return $this;
    }

}

