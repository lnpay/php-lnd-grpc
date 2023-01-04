<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Wtclientrpc;

/**
 * WatchtowerClient is a service that grants access to the watchtower client
 * functionality of the daemon.
 */
class WatchtowerClientClient extends \Grpc\BaseStub {

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
     * AddTower adds a new watchtower reachable at the given address and
     * considers it for new sessions. If the watchtower already exists, then
     * any new addresses included will be considered when dialing it for
     * session negotiations and backups.
     * @param \Wtclientrpc\AddTowerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddTower(\Wtclientrpc\AddTowerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wtclientrpc.WatchtowerClient/AddTower',
        $argument,
        ['\Wtclientrpc\AddTowerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * RemoveTower removes a watchtower from being considered for future session
     * negotiations and from being used for any subsequent backups until it's added
     * again. If an address is provided, then this RPC only serves as a way of
     * removing the address from the watchtower instead.
     * @param \Wtclientrpc\RemoveTowerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RemoveTower(\Wtclientrpc\RemoveTowerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wtclientrpc.WatchtowerClient/RemoveTower',
        $argument,
        ['\Wtclientrpc\RemoveTowerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListTowers returns the list of watchtowers registered with the client.
     * @param \Wtclientrpc\ListTowersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTowers(\Wtclientrpc\ListTowersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wtclientrpc.WatchtowerClient/ListTowers',
        $argument,
        ['\Wtclientrpc\ListTowersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetTowerInfo retrieves information for a registered watchtower.
     * @param \Wtclientrpc\GetTowerInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTowerInfo(\Wtclientrpc\GetTowerInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wtclientrpc.WatchtowerClient/GetTowerInfo',
        $argument,
        ['\Wtclientrpc\Tower', 'decode'],
        $metadata, $options);
    }

    /**
     * Stats returns the in-memory statistics of the client since startup.
     * @param \Wtclientrpc\StatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Stats(\Wtclientrpc\StatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wtclientrpc.WatchtowerClient/Stats',
        $argument,
        ['\Wtclientrpc\StatsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Policy returns the active watchtower client policy configuration.
     * @param \Wtclientrpc\PolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Policy(\Wtclientrpc\PolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wtclientrpc.WatchtowerClient/Policy',
        $argument,
        ['\Wtclientrpc\PolicyResponse', 'decode'],
        $metadata, $options);
    }

}
