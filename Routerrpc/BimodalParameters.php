<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.BimodalParameters</code>
 */
class BimodalParameters extends \Google\Protobuf\Internal\Message
{
    /**
     *NodeWeight defines how strongly other previous forwardings on channels of a
     *router should be taken into account when computing a channel's probability
     *to route. The allowed values are in the range [0, 1], where a value of 0
     *means that only direct information about a channel is taken into account.
     *
     * Generated from protobuf field <code>double node_weight = 1;</code>
     */
    protected $node_weight = 0.0;
    /**
     *ScaleMsat describes the scale over which channels statistically have some
     *liquidity left. The value determines how quickly the bimodal distribution
     *drops off from the edges of a channel. A larger value (compared to typical
     *channel capacities) means that the drop off is slow and that channel
     *balances are distributed more uniformly. A small value leads to the
     *assumption of very unbalanced channels.
     *
     * Generated from protobuf field <code>uint64 scale_msat = 2;</code>
     */
    protected $scale_msat = 0;
    /**
     *DecayTime describes the information decay of knowledge about previous
     *successes and failures in channels. The smaller the decay time, the quicker
     *we forget about past forwardings.
     *
     * Generated from protobuf field <code>uint64 decay_time = 3;</code>
     */
    protected $decay_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $node_weight
     *          NodeWeight defines how strongly other previous forwardings on channels of a
     *          router should be taken into account when computing a channel's probability
     *          to route. The allowed values are in the range [0, 1], where a value of 0
     *          means that only direct information about a channel is taken into account.
     *     @type int|string $scale_msat
     *          ScaleMsat describes the scale over which channels statistically have some
     *          liquidity left. The value determines how quickly the bimodal distribution
     *          drops off from the edges of a channel. A larger value (compared to typical
     *          channel capacities) means that the drop off is slow and that channel
     *          balances are distributed more uniformly. A small value leads to the
     *          assumption of very unbalanced channels.
     *     @type int|string $decay_time
     *          DecayTime describes the information decay of knowledge about previous
     *          successes and failures in channels. The smaller the decay time, the quicker
     *          we forget about past forwardings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *NodeWeight defines how strongly other previous forwardings on channels of a
     *router should be taken into account when computing a channel's probability
     *to route. The allowed values are in the range [0, 1], where a value of 0
     *means that only direct information about a channel is taken into account.
     *
     * Generated from protobuf field <code>double node_weight = 1;</code>
     * @return float
     */
    public function getNodeWeight()
    {
        return $this->node_weight;
    }

    /**
     *NodeWeight defines how strongly other previous forwardings on channels of a
     *router should be taken into account when computing a channel's probability
     *to route. The allowed values are in the range [0, 1], where a value of 0
     *means that only direct information about a channel is taken into account.
     *
     * Generated from protobuf field <code>double node_weight = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setNodeWeight($var)
    {
        GPBUtil::checkDouble($var);
        $this->node_weight = $var;

        return $this;
    }

    /**
     *ScaleMsat describes the scale over which channels statistically have some
     *liquidity left. The value determines how quickly the bimodal distribution
     *drops off from the edges of a channel. A larger value (compared to typical
     *channel capacities) means that the drop off is slow and that channel
     *balances are distributed more uniformly. A small value leads to the
     *assumption of very unbalanced channels.
     *
     * Generated from protobuf field <code>uint64 scale_msat = 2;</code>
     * @return int|string
     */
    public function getScaleMsat()
    {
        return $this->scale_msat;
    }

    /**
     *ScaleMsat describes the scale over which channels statistically have some
     *liquidity left. The value determines how quickly the bimodal distribution
     *drops off from the edges of a channel. A larger value (compared to typical
     *channel capacities) means that the drop off is slow and that channel
     *balances are distributed more uniformly. A small value leads to the
     *assumption of very unbalanced channels.
     *
     * Generated from protobuf field <code>uint64 scale_msat = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setScaleMsat($var)
    {
        GPBUtil::checkUint64($var);
        $this->scale_msat = $var;

        return $this;
    }

    /**
     *DecayTime describes the information decay of knowledge about previous
     *successes and failures in channels. The smaller the decay time, the quicker
     *we forget about past forwardings.
     *
     * Generated from protobuf field <code>uint64 decay_time = 3;</code>
     * @return int|string
     */
    public function getDecayTime()
    {
        return $this->decay_time;
    }

    /**
     *DecayTime describes the information decay of knowledge about previous
     *successes and failures in channels. The smaller the decay time, the quicker
     *we forget about past forwardings.
     *
     * Generated from protobuf field <code>uint64 decay_time = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDecayTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->decay_time = $var;

        return $this;
    }

}

