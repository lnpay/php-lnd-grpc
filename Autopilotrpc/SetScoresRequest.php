<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: autopilot.proto

namespace Autopilotrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>autopilotrpc.SetScoresRequest</code>
 */
class SetScoresRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the heuristic to provide scores to.
     *
     * Generated from protobuf field <code>string heuristic = 1;</code>
     */
    protected $heuristic = '';
    /**
     *A map from hex-encoded public keys to scores. Scores must be in the range
     *[0.0, 1.0].
     *
     * Generated from protobuf field <code>map<string, double> scores = 2;</code>
     */
    private $scores;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $heuristic
     *           The name of the heuristic to provide scores to.
     *     @type array|\Google\Protobuf\Internal\MapField $scores
     *          A map from hex-encoded public keys to scores. Scores must be in the range
     *          [0.0, 1.0].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Autopilot::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the heuristic to provide scores to.
     *
     * Generated from protobuf field <code>string heuristic = 1;</code>
     * @return string
     */
    public function getHeuristic()
    {
        return $this->heuristic;
    }

    /**
     * The name of the heuristic to provide scores to.
     *
     * Generated from protobuf field <code>string heuristic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHeuristic($var)
    {
        GPBUtil::checkString($var, True);
        $this->heuristic = $var;

        return $this;
    }

    /**
     *A map from hex-encoded public keys to scores. Scores must be in the range
     *[0.0, 1.0].
     *
     * Generated from protobuf field <code>map<string, double> scores = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     *A map from hex-encoded public keys to scores. Scores must be in the range
     *[0.0, 1.0].
     *
     * Generated from protobuf field <code>map<string, double> scores = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setScores($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->scores = $arr;

        return $this;
    }

}
