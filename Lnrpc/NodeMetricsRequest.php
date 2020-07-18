<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NodeMetricsRequest</code>
 */
class NodeMetricsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The requested node metrics.
     *
     * Generated from protobuf field <code>repeated .lnrpc.NodeMetricType types = 1;</code>
     */
    private $types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $types
     *           The requested node metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested node metrics.
     *
     * Generated from protobuf field <code>repeated .lnrpc.NodeMetricType types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * The requested node metrics.
     *
     * Generated from protobuf field <code>repeated .lnrpc.NodeMetricType types = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Lnrpc\NodeMetricType::class);
        $this->types = $arr;

        return $this;
    }

}
