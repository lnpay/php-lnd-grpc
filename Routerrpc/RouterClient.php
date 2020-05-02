<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Routerrpc;

/**
 */
class RouterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * *
     * SendPaymentV2 attempts to route a payment described by the passed
     * PaymentRequest to the final destination. The call returns a stream of
     * payment updates.
     * @param \Routerrpc\SendPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendPaymentV2(\Routerrpc\SendPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/SendPaymentV2',
        $argument,
        ['\Lnrpc\Payment', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * TrackPaymentV2 returns an update stream for the payment identified by the
     * payment hash.
     * @param \Routerrpc\TrackPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TrackPaymentV2(\Routerrpc\TrackPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/TrackPaymentV2',
        $argument,
        ['\Lnrpc\Payment', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * EstimateRouteFee allows callers to obtain a lower bound w.r.t how much it
     * may cost to send an HTLC to the target end destination.
     * @param \Routerrpc\RouteFeeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EstimateRouteFee(\Routerrpc\RouteFeeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/EstimateRouteFee',
        $argument,
        ['\Routerrpc\RouteFeeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * SendToRoute attempts to make a payment via the specified route. This method
     * differs from SendPayment in that it allows users to specify a full route
     * manually. This can be used for things like rebalancing, and atomic swaps.
     * @param \Routerrpc\SendToRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendToRoute(\Routerrpc\SendToRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/SendToRoute',
        $argument,
        ['\Routerrpc\SendToRouteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * ResetMissionControl clears all mission control state and starts with a clean
     * slate.
     * @param \Routerrpc\ResetMissionControlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ResetMissionControl(\Routerrpc\ResetMissionControlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/ResetMissionControl',
        $argument,
        ['\Routerrpc\ResetMissionControlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * QueryMissionControl exposes the internal mission control state to callers.
     * It is a development feature.
     * @param \Routerrpc\QueryMissionControlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryMissionControl(\Routerrpc\QueryMissionControlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/QueryMissionControl',
        $argument,
        ['\Routerrpc\QueryMissionControlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * QueryProbability returns the current success probability estimate for a
     * given node pair and amount.
     * @param \Routerrpc\QueryProbabilityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryProbability(\Routerrpc\QueryProbabilityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/QueryProbability',
        $argument,
        ['\Routerrpc\QueryProbabilityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * BuildRoute builds a fully specified route based on a list of hop public
     * keys. It retrieves the relevant channel policies from the graph in order to
     * calculate the correct fees and time locks.
     * @param \Routerrpc\BuildRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BuildRoute(\Routerrpc\BuildRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/BuildRoute',
        $argument,
        ['\Routerrpc\BuildRouteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * SubscribeHtlcEvents creates a uni-directional stream from the server to
     * the client which delivers a stream of htlc events.
     * @param \Routerrpc\SubscribeHtlcEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubscribeHtlcEvents(\Routerrpc\SubscribeHtlcEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/SubscribeHtlcEvents',
        $argument,
        ['\Routerrpc\HtlcEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * Deprecated, use SendPaymentV2. SendPayment attempts to route a payment 
     * described by the passed PaymentRequest to the final destination. The call
     * returns a stream of payment status updates.
     * @param \Routerrpc\SendPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendPayment(\Routerrpc\SendPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/SendPayment',
        $argument,
        ['\Routerrpc\PaymentStatus', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * Deprecated, use TrackPaymentV2. TrackPayment returns an update stream for
     * the payment identified by the payment hash.
     * @param \Routerrpc\TrackPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function TrackPayment(\Routerrpc\TrackPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/TrackPayment',
        $argument,
        ['\Routerrpc\PaymentStatus', 'decode'],
        $metadata, $options);
    }

}
