<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.QueryProbabilityResponse</code>
 */
class QueryProbabilityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The success probability for the requested pair.
     *
     * Generated from protobuf field <code>double probability = 1;</code>
     */
    private $probability = 0.0;
    /**
     * The historical data for the requested pair.
     *
     * Generated from protobuf field <code>.routerrpc.PairData history = 2;</code>
     */
    private $history = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $probability
     *           The success probability for the requested pair.
     *     @type \Routerrpc\PairData $history
     *           The historical data for the requested pair.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     * The success probability for the requested pair.
     *
     * Generated from protobuf field <code>double probability = 1;</code>
     * @return float
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * The success probability for the requested pair.
     *
     * Generated from protobuf field <code>double probability = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setProbability($var)
    {
        GPBUtil::checkDouble($var);
        $this->probability = $var;

        return $this;
    }

    /**
     * The historical data for the requested pair.
     *
     * Generated from protobuf field <code>.routerrpc.PairData history = 2;</code>
     * @return \Routerrpc\PairData
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * The historical data for the requested pair.
     *
     * Generated from protobuf field <code>.routerrpc.PairData history = 2;</code>
     * @param \Routerrpc\PairData $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkMessage($var, \Routerrpc\PairData::class);
        $this->history = $var;

        return $this;
    }

}
