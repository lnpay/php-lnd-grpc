<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Autopilotrpc;

/**
 * Autopilot is a service that can be used to get information about the current
 * state of the daemon's autopilot agent, and also supply it with information
 * that can be used when deciding where to open channels.
 */
class AutopilotClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     *
     * Status returns whether the daemon's autopilot agent is active.
     * @param \Autopilotrpc\StatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Status(\Autopilotrpc\StatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/autopilotrpc.Autopilot/Status',
        $argument,
        ['\Autopilotrpc\StatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ModifyStatus is used to modify the status of the autopilot agent, like
     * enabling or disabling it.
     * @param \Autopilotrpc\ModifyStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ModifyStatus(\Autopilotrpc\ModifyStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/autopilotrpc.Autopilot/ModifyStatus',
        $argument,
        ['\Autopilotrpc\ModifyStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * QueryScores queries all available autopilot heuristics, in addition to any
     * active combination of these heruristics, for the scores they would give to
     * the given nodes.
     * @param \Autopilotrpc\QueryScoresRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryScores(\Autopilotrpc\QueryScoresRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/autopilotrpc.Autopilot/QueryScores',
        $argument,
        ['\Autopilotrpc\QueryScoresResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SetScores attempts to set the scores used by the running autopilot agent,
     * if the external scoring heuristic is enabled.
     * @param \Autopilotrpc\SetScoresRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetScores(\Autopilotrpc\SetScoresRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/autopilotrpc.Autopilot/SetScores',
        $argument,
        ['\Autopilotrpc\SetScoresResponse', 'decode'],
        $metadata, $options);
    }

}
