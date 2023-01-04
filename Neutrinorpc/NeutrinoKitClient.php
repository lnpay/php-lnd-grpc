<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Neutrinorpc;

/**
 * NeutrinoKit is a service that can be used to get information about the
 * current state of the neutrino instance, fetch blocks and add/remove peers.
 */
class NeutrinoKitClient extends \Grpc\BaseStub {

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
     * Status returns the status of the light client neutrino instance,
     * along with height and hash of the best block, and a list of connected
     * peers.
     * @param \Neutrinorpc\StatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Status(\Neutrinorpc\StatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/Status',
        $argument,
        ['\Neutrinorpc\StatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * AddPeer adds a new peer that has already been connected to the server.
     * @param \Neutrinorpc\AddPeerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddPeer(\Neutrinorpc\AddPeerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/AddPeer',
        $argument,
        ['\Neutrinorpc\AddPeerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * DisconnectPeer disconnects a peer by target address. Both outbound and
     * inbound nodes will be searched for the target node. An error message will
     * be returned if the peer was not found.
     * @param \Neutrinorpc\DisconnectPeerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DisconnectPeer(\Neutrinorpc\DisconnectPeerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/DisconnectPeer',
        $argument,
        ['\Neutrinorpc\DisconnectPeerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * IsBanned returns true if the peer is banned, otherwise false.
     * @param \Neutrinorpc\IsBannedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IsBanned(\Neutrinorpc\IsBannedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/IsBanned',
        $argument,
        ['\Neutrinorpc\IsBannedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * GetBlockHeader returns a block header with a particular block hash.
     * @param \Neutrinorpc\GetBlockHeaderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBlockHeader(\Neutrinorpc\GetBlockHeaderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/GetBlockHeader',
        $argument,
        ['\Neutrinorpc\GetBlockHeaderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * GetBlock returns a block with a particular block hash.
     * @param \Neutrinorpc\GetBlockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBlock(\Neutrinorpc\GetBlockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/GetBlock',
        $argument,
        ['\Neutrinorpc\GetBlockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * GetCFilter returns a compact filter from a block.
     * @param \Neutrinorpc\GetCFilterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCFilter(\Neutrinorpc\GetCFilterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/GetCFilter',
        $argument,
        ['\Neutrinorpc\GetCFilterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * GetBlockHash returns the header hash of a block at a given height.
     * @param \Neutrinorpc\GetBlockHashRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBlockHash(\Neutrinorpc\GetBlockHashRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/neutrinorpc.NeutrinoKit/GetBlockHash',
        $argument,
        ['\Neutrinorpc\GetBlockHashResponse', 'decode'],
        $metadata, $options);
    }

}
