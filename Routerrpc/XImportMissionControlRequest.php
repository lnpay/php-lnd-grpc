<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.XImportMissionControlRequest</code>
 */
class XImportMissionControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Node pair-level mission control state to be imported.
     *
     * Generated from protobuf field <code>repeated .routerrpc.PairHistory pairs = 1;</code>
     */
    private $pairs;
    /**
     * Whether to force override MC pair history. Note that even with force
     * override the failure pair is imported before the success pair and both
     * still clamp existing failure/success amounts.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Routerrpc\PairHistory>|\Google\Protobuf\Internal\RepeatedField $pairs
     *           Node pair-level mission control state to be imported.
     *     @type bool $force
     *           Whether to force override MC pair history. Note that even with force
     *           override the failure pair is imported before the success pair and both
     *           still clamp existing failure/success amounts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     * Node pair-level mission control state to be imported.
     *
     * Generated from protobuf field <code>repeated .routerrpc.PairHistory pairs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPairs()
    {
        return $this->pairs;
    }

    /**
     * Node pair-level mission control state to be imported.
     *
     * Generated from protobuf field <code>repeated .routerrpc.PairHistory pairs = 1;</code>
     * @param array<\Routerrpc\PairHistory>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPairs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Routerrpc\PairHistory::class);
        $this->pairs = $arr;

        return $this;
    }

    /**
     * Whether to force override MC pair history. Note that even with force
     * override the failure pair is imported before the success pair and both
     * still clamp existing failure/success amounts.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Whether to force override MC pair history. Note that even with force
     * override the failure pair is imported before the success pair and both
     * still clamp existing failure/success amounts.
     *
     * Generated from protobuf field <code>bool force = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}
