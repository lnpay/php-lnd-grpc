<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.NodeMetricsResponse</code>
 */
class NodeMetricsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Betweenness centrality is the sum of the ratio of shortest paths that pass
     *through the node for each pair of nodes in the graph (not counting paths
     *starting or ending at this node).
     *Map of node pubkey to betweenness centrality of the node. Normalized
     *values are in the [0,1] closed interval.
     *
     * Generated from protobuf field <code>map<string, .lnrpc.FloatMetric> betweenness_centrality = 1;</code>
     */
    private $betweenness_centrality;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $betweenness_centrality
     *          Betweenness centrality is the sum of the ratio of shortest paths that pass
     *          through the node for each pair of nodes in the graph (not counting paths
     *          starting or ending at this node).
     *          Map of node pubkey to betweenness centrality of the node. Normalized
     *          values are in the [0,1] closed interval.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *Betweenness centrality is the sum of the ratio of shortest paths that pass
     *through the node for each pair of nodes in the graph (not counting paths
     *starting or ending at this node).
     *Map of node pubkey to betweenness centrality of the node. Normalized
     *values are in the [0,1] closed interval.
     *
     * Generated from protobuf field <code>map<string, .lnrpc.FloatMetric> betweenness_centrality = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getBetweennessCentrality()
    {
        return $this->betweenness_centrality;
    }

    /**
     *Betweenness centrality is the sum of the ratio of shortest paths that pass
     *through the node for each pair of nodes in the graph (not counting paths
     *starting or ending at this node).
     *Map of node pubkey to betweenness centrality of the node. Normalized
     *values are in the [0,1] closed interval.
     *
     * Generated from protobuf field <code>map<string, .lnrpc.FloatMetric> betweenness_centrality = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setBetweennessCentrality($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\FloatMetric::class);
        $this->betweenness_centrality = $arr;

        return $this;
    }

}

