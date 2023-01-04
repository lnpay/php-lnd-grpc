<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Peersrpc;

/**
 * Peers is a service that can be used to get information and interact
 * with the other nodes of the newtwork.
 */
class PeersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * lncli: peers updatenodeannouncement
     * UpdateNodeAnnouncement allows the caller to update the node parameters
     * and broadcasts a new version of the node announcement to its peers.
     * @param \Peersrpc\NodeAnnouncementUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateNodeAnnouncement(\Peersrpc\NodeAnnouncementUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/peersrpc.Peers/UpdateNodeAnnouncement',
        $argument,
        ['\Peersrpc\NodeAnnouncementUpdateResponse', 'decode'],
        $metadata, $options);
    }

}
