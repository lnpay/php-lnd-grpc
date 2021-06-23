<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Verrpc;

/**
 * Versioner is a service that can be used to get information about the version
 * and build information of the running daemon.
 */
class VersionerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * lncli: `version`
     * GetVersion returns the current version and build information of the running
     * daemon.
     * @param \Verrpc\VersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetVersion(\Verrpc\VersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/verrpc.Versioner/GetVersion',
        $argument,
        ['\Verrpc\Version', 'decode'],
        $metadata, $options);
    }

}
