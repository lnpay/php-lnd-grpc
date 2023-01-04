<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Devrpc;

/**
 */
class DevClient extends \Grpc\BaseStub {

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
     * ImportGraph imports a ChannelGraph into the graph database. Should only be
     * used for development.
     * @param \Lnrpc\ChannelGraph $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ImportGraph(\Lnrpc\ChannelGraph $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/devrpc.Dev/ImportGraph',
        $argument,
        ['\Devrpc\ImportGraphResponse', 'decode'],
        $metadata, $options);
    }

}
