<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Routerrpc;

/**
 * Router is a service that offers advanced interaction with the router
 * subsystem of the daemon.
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
     *
     * SendPaymentV2 attempts to route a payment described by the passed
     * PaymentRequest to the final destination. The call returns a stream of
     * payment updates.
     * @param \Routerrpc\SendPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SendPaymentV2(\Routerrpc\SendPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/SendPaymentV2',
        $argument,
        ['\Lnrpc\Payment', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * TrackPaymentV2 returns an update stream for the payment identified by the
     * payment hash.
     * @param \Routerrpc\TrackPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function TrackPaymentV2(\Routerrpc\TrackPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/TrackPaymentV2',
        $argument,
        ['\Lnrpc\Payment', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * TrackPayments returns an update stream for every payment that is not in a
     * terminal state. Note that if payments are in-flight while starting a new
     * subscription, the start of the payment stream could produce out-of-order
     * and/or duplicate events. In order to get updates for every in-flight
     * payment attempt make sure to subscribe to this method before initiating any
     * payments.
     * @param \Routerrpc\TrackPaymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function TrackPayments(\Routerrpc\TrackPaymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/TrackPayments',
        $argument,
        ['\Lnrpc\Payment', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * EstimateRouteFee allows callers to obtain a lower bound w.r.t how much it
     * may cost to send an HTLC to the target end destination.
     * @param \Routerrpc\RouteFeeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EstimateRouteFee(\Routerrpc\RouteFeeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/EstimateRouteFee',
        $argument,
        ['\Routerrpc\RouteFeeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     *
     * Deprecated, use SendToRouteV2. SendToRoute attempts to make a payment via
     * the specified route. This method differs from SendPayment in that it
     * allows users to specify a full route manually. This can be used for
     * things like rebalancing, and atomic swaps. It differs from the newer
     * SendToRouteV2 in that it doesn't return the full HTLC information.
     * @param \Routerrpc\SendToRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendToRoute(\Routerrpc\SendToRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/SendToRoute',
        $argument,
        ['\Routerrpc\SendToRouteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SendToRouteV2 attempts to make a payment via the specified route. This
     * method differs from SendPayment in that it allows users to specify a full
     * route manually. This can be used for things like rebalancing, and atomic
     * swaps.
     * @param \Routerrpc\SendToRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendToRouteV2(\Routerrpc\SendToRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/SendToRouteV2',
        $argument,
        ['\Lnrpc\HTLCAttempt', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ResetMissionControl clears all mission control state and starts with a clean
     * slate.
     * @param \Routerrpc\ResetMissionControlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetMissionControl(\Routerrpc\ResetMissionControlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/ResetMissionControl',
        $argument,
        ['\Routerrpc\ResetMissionControlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * QueryMissionControl exposes the internal mission control state to callers.
     * It is a development feature.
     * @param \Routerrpc\QueryMissionControlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryMissionControl(\Routerrpc\QueryMissionControlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/QueryMissionControl',
        $argument,
        ['\Routerrpc\QueryMissionControlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * XImportMissionControl is an experimental API that imports the state provided
     * to the internal mission control's state, using all results which are more
     * recent than our existing values. These values will only be imported
     * in-memory, and will not be persisted across restarts.
     * @param \Routerrpc\XImportMissionControlRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function XImportMissionControl(\Routerrpc\XImportMissionControlRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/XImportMissionControl',
        $argument,
        ['\Routerrpc\XImportMissionControlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * GetMissionControlConfig returns mission control's current config.
     * @param \Routerrpc\GetMissionControlConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMissionControlConfig(\Routerrpc\GetMissionControlConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/GetMissionControlConfig',
        $argument,
        ['\Routerrpc\GetMissionControlConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SetMissionControlConfig will set mission control's config, if the config
     * provided is valid.
     * @param \Routerrpc\SetMissionControlConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetMissionControlConfig(\Routerrpc\SetMissionControlConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/SetMissionControlConfig',
        $argument,
        ['\Routerrpc\SetMissionControlConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * Deprecated. QueryProbability returns the current success probability
     * estimate for a given node pair and amount. The call returns a zero success
     * probability if no channel is available or if the amount violates min/max
     * HTLC constraints.
     * @param \Routerrpc\QueryProbabilityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryProbability(\Routerrpc\QueryProbabilityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/QueryProbability',
        $argument,
        ['\Routerrpc\QueryProbabilityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * BuildRoute builds a fully specified route based on a list of hop public
     * keys. It retrieves the relevant channel policies from the graph in order to
     * calculate the correct fees and time locks.
     * @param \Routerrpc\BuildRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BuildRoute(\Routerrpc\BuildRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/BuildRoute',
        $argument,
        ['\Routerrpc\BuildRouteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribeHtlcEvents creates a uni-directional stream from the server to
     * the client which delivers a stream of htlc events.
     * @param \Routerrpc\SubscribeHtlcEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeHtlcEvents(\Routerrpc\SubscribeHtlcEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/SubscribeHtlcEvents',
        $argument,
        ['\Routerrpc\HtlcEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     *
     * Deprecated, use SendPaymentV2. SendPayment attempts to route a payment
     * described by the passed PaymentRequest to the final destination. The call
     * returns a stream of payment status updates.
     * @param \Routerrpc\SendPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SendPayment(\Routerrpc\SendPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/SendPayment',
        $argument,
        ['\Routerrpc\PaymentStatus', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     *
     * Deprecated, use TrackPaymentV2. TrackPayment returns an update stream for
     * the payment identified by the payment hash.
     * @param \Routerrpc\TrackPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function TrackPayment(\Routerrpc\TrackPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/routerrpc.Router/TrackPayment',
        $argument,
        ['\Routerrpc\PaymentStatus', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * HtlcInterceptor dispatches a bi-directional streaming RPC in which
     * Forwarded HTLC requests are sent to the client and the client responds with
     * a boolean that tells LND if this htlc should be intercepted.
     * In case of interception, the htlc can be either settled, cancelled or
     * resumed later by using the ResolveHoldForward endpoint.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function HtlcInterceptor($metadata = [], $options = []) {
        return $this->_bidiRequest('/routerrpc.Router/HtlcInterceptor',
        ['\Routerrpc\ForwardHtlcInterceptRequest','decode'],
        $metadata, $options);
    }

    /**
     *
     * UpdateChanStatus attempts to manually set the state of a channel
     * (enabled, disabled, or auto). A manual "disable" request will cause the
     * channel to stay disabled until a subsequent manual request of either
     * "enable" or "auto".
     * @param \Routerrpc\UpdateChanStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateChanStatus(\Routerrpc\UpdateChanStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/routerrpc.Router/UpdateChanStatus',
        $argument,
        ['\Routerrpc\UpdateChanStatusResponse', 'decode'],
        $metadata, $options);
    }

}
