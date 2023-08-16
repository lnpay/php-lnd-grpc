<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: router.proto

namespace Routerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>routerrpc.MissionControlConfig</code>
 */
class MissionControlConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *Deprecated, use AprioriParameters. The amount of time mission control will
     *take to restore a penalized node or channel back to 50% success probability,
     *expressed in seconds. Setting this value to a higher value will penalize
     *failures for longer, making mission control less likely to route through
     *nodes and channels that we have previously recorded failures for.
     *
     * Generated from protobuf field <code>uint64 half_life_seconds = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $half_life_seconds = 0;
    /**
     *Deprecated, use AprioriParameters. The probability of success mission
     *control should assign to hop in a route where it has no other information
     *available. Higher values will make mission control more willing to try hops
     *that we have no information about, lower values will discourage trying these
     *hops.
     *
     * Generated from protobuf field <code>float hop_probability = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $hop_probability = 0.0;
    /**
     *Deprecated, use AprioriParameters. The importance that mission control
     *should place on historical results, expressed as a value in [0;1]. Setting
     *this value to 1 will ignore all historical payments and just use the hop
     *probability to assess the probability of success for each hop. A zero value
     *ignores hop probability completely and relies entirely on historical
     *results, unless none are available.
     *
     * Generated from protobuf field <code>float weight = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $weight = 0.0;
    /**
     *The maximum number of payment results that mission control will store.
     *
     * Generated from protobuf field <code>uint32 maximum_payment_results = 4;</code>
     */
    protected $maximum_payment_results = 0;
    /**
     *The minimum time that must have passed since the previously recorded failure
     *before we raise the failure amount.
     *
     * Generated from protobuf field <code>uint64 minimum_failure_relax_interval = 5;</code>
     */
    protected $minimum_failure_relax_interval = 0;
    /**
     *ProbabilityModel defines which probability estimator should be used in
     *pathfinding. Note that the bimodal estimator is experimental.
     *
     * Generated from protobuf field <code>.routerrpc.MissionControlConfig.ProbabilityModel model = 6;</code>
     */
    protected $model = 0;
    protected $EstimatorConfig;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $half_life_seconds
     *          Deprecated, use AprioriParameters. The amount of time mission control will
     *          take to restore a penalized node or channel back to 50% success probability,
     *          expressed in seconds. Setting this value to a higher value will penalize
     *          failures for longer, making mission control less likely to route through
     *          nodes and channels that we have previously recorded failures for.
     *     @type float $hop_probability
     *          Deprecated, use AprioriParameters. The probability of success mission
     *          control should assign to hop in a route where it has no other information
     *          available. Higher values will make mission control more willing to try hops
     *          that we have no information about, lower values will discourage trying these
     *          hops.
     *     @type float $weight
     *          Deprecated, use AprioriParameters. The importance that mission control
     *          should place on historical results, expressed as a value in [0;1]. Setting
     *          this value to 1 will ignore all historical payments and just use the hop
     *          probability to assess the probability of success for each hop. A zero value
     *          ignores hop probability completely and relies entirely on historical
     *          results, unless none are available.
     *     @type int $maximum_payment_results
     *          The maximum number of payment results that mission control will store.
     *     @type int|string $minimum_failure_relax_interval
     *          The minimum time that must have passed since the previously recorded failure
     *          before we raise the failure amount.
     *     @type int $model
     *          ProbabilityModel defines which probability estimator should be used in
     *          pathfinding. Note that the bimodal estimator is experimental.
     *     @type \Routerrpc\AprioriParameters $apriori
     *     @type \Routerrpc\BimodalParameters $bimodal
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Router::initOnce();
        parent::__construct($data);
    }

    /**
     *Deprecated, use AprioriParameters. The amount of time mission control will
     *take to restore a penalized node or channel back to 50% success probability,
     *expressed in seconds. Setting this value to a higher value will penalize
     *failures for longer, making mission control less likely to route through
     *nodes and channels that we have previously recorded failures for.
     *
     * Generated from protobuf field <code>uint64 half_life_seconds = 1 [deprecated = true];</code>
     * @return int|string
     * @deprecated
     */
    public function getHalfLifeSeconds()
    {
        @trigger_error('half_life_seconds is deprecated.', E_USER_DEPRECATED);
        return $this->half_life_seconds;
    }

    /**
     *Deprecated, use AprioriParameters. The amount of time mission control will
     *take to restore a penalized node or channel back to 50% success probability,
     *expressed in seconds. Setting this value to a higher value will penalize
     *failures for longer, making mission control less likely to route through
     *nodes and channels that we have previously recorded failures for.
     *
     * Generated from protobuf field <code>uint64 half_life_seconds = 1 [deprecated = true];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setHalfLifeSeconds($var)
    {
        @trigger_error('half_life_seconds is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkUint64($var);
        $this->half_life_seconds = $var;

        return $this;
    }

    /**
     *Deprecated, use AprioriParameters. The probability of success mission
     *control should assign to hop in a route where it has no other information
     *available. Higher values will make mission control more willing to try hops
     *that we have no information about, lower values will discourage trying these
     *hops.
     *
     * Generated from protobuf field <code>float hop_probability = 2 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getHopProbability()
    {
        @trigger_error('hop_probability is deprecated.', E_USER_DEPRECATED);
        return $this->hop_probability;
    }

    /**
     *Deprecated, use AprioriParameters. The probability of success mission
     *control should assign to hop in a route where it has no other information
     *available. Higher values will make mission control more willing to try hops
     *that we have no information about, lower values will discourage trying these
     *hops.
     *
     * Generated from protobuf field <code>float hop_probability = 2 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setHopProbability($var)
    {
        @trigger_error('hop_probability is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkFloat($var);
        $this->hop_probability = $var;

        return $this;
    }

    /**
     *Deprecated, use AprioriParameters. The importance that mission control
     *should place on historical results, expressed as a value in [0;1]. Setting
     *this value to 1 will ignore all historical payments and just use the hop
     *probability to assess the probability of success for each hop. A zero value
     *ignores hop probability completely and relies entirely on historical
     *results, unless none are available.
     *
     * Generated from protobuf field <code>float weight = 3 [deprecated = true];</code>
     * @return float
     * @deprecated
     */
    public function getWeight()
    {
        @trigger_error('weight is deprecated.', E_USER_DEPRECATED);
        return $this->weight;
    }

    /**
     *Deprecated, use AprioriParameters. The importance that mission control
     *should place on historical results, expressed as a value in [0;1]. Setting
     *this value to 1 will ignore all historical payments and just use the hop
     *probability to assess the probability of success for each hop. A zero value
     *ignores hop probability completely and relies entirely on historical
     *results, unless none are available.
     *
     * Generated from protobuf field <code>float weight = 3 [deprecated = true];</code>
     * @param float $var
     * @return $this
     * @deprecated
     */
    public function setWeight($var)
    {
        @trigger_error('weight is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkFloat($var);
        $this->weight = $var;

        return $this;
    }

    /**
     *The maximum number of payment results that mission control will store.
     *
     * Generated from protobuf field <code>uint32 maximum_payment_results = 4;</code>
     * @return int
     */
    public function getMaximumPaymentResults()
    {
        return $this->maximum_payment_results;
    }

    /**
     *The maximum number of payment results that mission control will store.
     *
     * Generated from protobuf field <code>uint32 maximum_payment_results = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumPaymentResults($var)
    {
        GPBUtil::checkUint32($var);
        $this->maximum_payment_results = $var;

        return $this;
    }

    /**
     *The minimum time that must have passed since the previously recorded failure
     *before we raise the failure amount.
     *
     * Generated from protobuf field <code>uint64 minimum_failure_relax_interval = 5;</code>
     * @return int|string
     */
    public function getMinimumFailureRelaxInterval()
    {
        return $this->minimum_failure_relax_interval;
    }

    /**
     *The minimum time that must have passed since the previously recorded failure
     *before we raise the failure amount.
     *
     * Generated from protobuf field <code>uint64 minimum_failure_relax_interval = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinimumFailureRelaxInterval($var)
    {
        GPBUtil::checkUint64($var);
        $this->minimum_failure_relax_interval = $var;

        return $this;
    }

    /**
     *ProbabilityModel defines which probability estimator should be used in
     *pathfinding. Note that the bimodal estimator is experimental.
     *
     * Generated from protobuf field <code>.routerrpc.MissionControlConfig.ProbabilityModel model = 6;</code>
     * @return int
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     *ProbabilityModel defines which probability estimator should be used in
     *pathfinding. Note that the bimodal estimator is experimental.
     *
     * Generated from protobuf field <code>.routerrpc.MissionControlConfig.ProbabilityModel model = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkEnum($var, \Routerrpc\MissionControlConfig\ProbabilityModel::class);
        $this->model = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.routerrpc.AprioriParameters apriori = 7;</code>
     * @return \Routerrpc\AprioriParameters|null
     */
    public function getApriori()
    {
        return $this->readOneof(7);
    }

    public function hasApriori()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.routerrpc.AprioriParameters apriori = 7;</code>
     * @param \Routerrpc\AprioriParameters $var
     * @return $this
     */
    public function setApriori($var)
    {
        GPBUtil::checkMessage($var, \Routerrpc\AprioriParameters::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.routerrpc.BimodalParameters bimodal = 8;</code>
     * @return \Routerrpc\BimodalParameters|null
     */
    public function getBimodal()
    {
        return $this->readOneof(8);
    }

    public function hasBimodal()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.routerrpc.BimodalParameters bimodal = 8;</code>
     * @param \Routerrpc\BimodalParameters $var
     * @return $this
     */
    public function setBimodal($var)
    {
        GPBUtil::checkMessage($var, \Routerrpc\BimodalParameters::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEstimatorConfig()
    {
        return $this->whichOneof("EstimatorConfig");
    }

}

