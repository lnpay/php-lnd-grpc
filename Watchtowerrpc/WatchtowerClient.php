<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Watchtowerrpc;

/**
 * Watchtower is a service that grants access to the watchtower server
 * functionality of the daemon.
 */
class WatchtowerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * lncli: tower info
     * GetInfo returns general information concerning the companion watchtower
     * including its public key and URIs where the server is currently
     * listening for clients.
     * @param \Watchtowerrpc\GetInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInfo(\Watchtowerrpc\GetInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/watchtowerrpc.Watchtower/GetInfo',
        $argument,
        ['\Watchtowerrpc\GetInfoResponse', 'decode'],
        $metadata, $options);
    }

}
