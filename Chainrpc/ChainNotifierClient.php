<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Chainrpc;

/**
 * ChainNotifier is a service that can be used to get information about the
 * chain backend by registering notifiers for chain events.
 */
class ChainNotifierClient extends \Grpc\BaseStub {

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
     * RegisterConfirmationsNtfn is a synchronous response-streaming RPC that
     * registers an intent for a client to be notified once a confirmation request
     * has reached its required number of confirmations on-chain.
     *
     * A confirmation request must have a valid output script. It is also possible
     * to give a transaction ID. If the transaction ID is not set, a notification
     * is sent once the output script confirms. If the transaction ID is also set,
     * a notification is sent once the output script confirms in the given
     * transaction.
     * @param \Chainrpc\ConfRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function RegisterConfirmationsNtfn(\Chainrpc\ConfRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/chainrpc.ChainNotifier/RegisterConfirmationsNtfn',
        $argument,
        ['\Chainrpc\ConfEvent', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * RegisterSpendNtfn is a synchronous response-streaming RPC that registers an
     * intent for a client to be notification once a spend request has been spent
     * by a transaction that has confirmed on-chain.
     *
     * A client can specify whether the spend request should be for a particular
     * outpoint  or for an output script by specifying a zero outpoint.
     * @param \Chainrpc\SpendRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function RegisterSpendNtfn(\Chainrpc\SpendRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/chainrpc.ChainNotifier/RegisterSpendNtfn',
        $argument,
        ['\Chainrpc\SpendEvent', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * RegisterBlockEpochNtfn is a synchronous response-streaming RPC that
     * registers an intent for a client to be notified of blocks in the chain. The
     * stream will return a hash and height tuple of a block for each new/stale
     * block in the chain. It is the client's responsibility to determine whether
     * the tuple returned is for a new or stale block in the chain.
     *
     * A client can also request a historical backlog of blocks from a particular
     * point. This allows clients to be idempotent by ensuring that they do not
     * missing processing a single block within the chain.
     * @param \Chainrpc\BlockEpoch $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function RegisterBlockEpochNtfn(\Chainrpc\BlockEpoch $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/chainrpc.ChainNotifier/RegisterBlockEpochNtfn',
        $argument,
        ['\Chainrpc\BlockEpoch', 'decode'],
        $metadata, $options);
    }

}
