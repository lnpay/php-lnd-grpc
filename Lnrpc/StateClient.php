<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lnrpc;

/**
 *
 * Comments in this file will be directly parsed into the API
 * Documentation as descriptions of the associated method, message, or field.
 * These descriptions should go right above the definition of the object, and
 * can be in either block or // comment format.
 *
 * An RPC method can be matched to an lncli command by placing a line in the
 * beginning of the description in exactly the following format:
 * lncli: `methodname`
 *
 * Failure to specify the exact name of the command will cause documentation
 * generation to fail.
 *
 * More information on how exactly the gRPC documentation is generated from
 * this proto file can be found here:
 * https://github.com/lightninglabs/lightning-api
 *
 * State service is a always running service that exposes the current state of
 * the wallet and RPC server.
 */
class StateClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * SubscribeState subscribes to the state of the wallet. The current wallet
     * state will always be delivered immediately.
     * @param \Lnrpc\SubscribeStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeState(\Lnrpc\SubscribeStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.State/SubscribeState',
        $argument,
        ['\Lnrpc\SubscribeStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetState returns the current wallet state without streaming further
     * changes.
     * @param \Lnrpc\GetStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetState(\Lnrpc\GetStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.State/GetState',
        $argument,
        ['\Lnrpc\GetStateResponse', 'decode'],
        $metadata, $options);
    }

}
