<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.GetInfoResponse</code>
 */
class GetInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The version of the LND software that the node is running.
     *
     * Generated from protobuf field <code>string version = 14[json_name = "version"];</code>
     */
    private $version = '';
    /**
     *&#47; The identity pubkey of the current node.
     *
     * Generated from protobuf field <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     */
    private $identity_pubkey = '';
    /**
     *&#47; If applicable, the alias of the current node, e.g. "bob"
     *
     * Generated from protobuf field <code>string alias = 2[json_name = "alias"];</code>
     */
    private $alias = '';
    /**
     *&#47; The color of the current node in hex code format
     *
     * Generated from protobuf field <code>string color = 17[json_name = "color"];</code>
     */
    private $color = '';
    /**
     *&#47; Number of pending channels
     *
     * Generated from protobuf field <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     */
    private $num_pending_channels = 0;
    /**
     *&#47; Number of active channels
     *
     * Generated from protobuf field <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     */
    private $num_active_channels = 0;
    /**
     *&#47; Number of inactive channels
     *
     * Generated from protobuf field <code>uint32 num_inactive_channels = 15[json_name = "num_inactive_channels"];</code>
     */
    private $num_inactive_channels = 0;
    /**
     *&#47; Number of peers
     *
     * Generated from protobuf field <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     */
    private $num_peers = 0;
    /**
     *&#47; The node's current view of the height of the best block
     *
     * Generated from protobuf field <code>uint32 block_height = 6[json_name = "block_height"];</code>
     */
    private $block_height = 0;
    /**
     *&#47; The node's current view of the hash of the best block
     *
     * Generated from protobuf field <code>string block_hash = 8[json_name = "block_hash"];</code>
     */
    private $block_hash = '';
    /**
     *&#47; Timestamp of the block best known to the wallet
     *
     * Generated from protobuf field <code>int64 best_header_timestamp = 13[json_name = "best_header_timestamp"];</code>
     */
    private $best_header_timestamp = 0;
    /**
     *&#47; Whether the wallet's view is synced to the main chain
     *
     * Generated from protobuf field <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     */
    private $synced_to_chain = false;
    /**
     * Whether we consider ourselves synced with the public channel graph.
     *
     * Generated from protobuf field <code>bool synced_to_graph = 18[json_name = "synced_to_graph"];</code>
     */
    private $synced_to_graph = false;
    /**
     ** 
     *Whether the current node is connected to testnet. This field is 
     *deprecated and the network field should be used instead 
     *
     * Generated from protobuf field <code>bool testnet = 10[json_name = "testnet", deprecated = true];</code>
     */
    private $testnet = false;
    /**
     *&#47; A list of active chains the node is connected to
     *
     * Generated from protobuf field <code>repeated .lnrpc.Chain chains = 16[json_name = "chains"];</code>
     */
    private $chains;
    /**
     *&#47; The URIs of the current node.
     *
     * Generated from protobuf field <code>repeated string uris = 12[json_name = "uris"];</code>
     */
    private $uris;
    /**
     *Features that our node has advertised in our init message, node
     *announcements and invoices.
     *
     * Generated from protobuf field <code>map<uint32, .lnrpc.Feature> features = 19[json_name = "features"];</code>
     */
    private $features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *          &#47; The version of the LND software that the node is running.
     *     @type string $identity_pubkey
     *          &#47; The identity pubkey of the current node.
     *     @type string $alias
     *          &#47; If applicable, the alias of the current node, e.g. "bob"
     *     @type string $color
     *          &#47; The color of the current node in hex code format
     *     @type int $num_pending_channels
     *          &#47; Number of pending channels
     *     @type int $num_active_channels
     *          &#47; Number of active channels
     *     @type int $num_inactive_channels
     *          &#47; Number of inactive channels
     *     @type int $num_peers
     *          &#47; Number of peers
     *     @type int $block_height
     *          &#47; The node's current view of the height of the best block
     *     @type string $block_hash
     *          &#47; The node's current view of the hash of the best block
     *     @type int|string $best_header_timestamp
     *          &#47; Timestamp of the block best known to the wallet
     *     @type bool $synced_to_chain
     *          &#47; Whether the wallet's view is synced to the main chain
     *     @type bool $synced_to_graph
     *           Whether we consider ourselves synced with the public channel graph.
     *     @type bool $testnet
     *          * 
     *          Whether the current node is connected to testnet. This field is 
     *          deprecated and the network field should be used instead 
     *     @type \Lnrpc\Chain[]|\Google\Protobuf\Internal\RepeatedField $chains
     *          &#47; A list of active chains the node is connected to
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $uris
     *          &#47; The URIs of the current node.
     *     @type array|\Google\Protobuf\Internal\MapField $features
     *          Features that our node has advertised in our init message, node
     *          announcements and invoices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The version of the LND software that the node is running.
     *
     * Generated from protobuf field <code>string version = 14[json_name = "version"];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *&#47; The version of the LND software that the node is running.
     *
     * Generated from protobuf field <code>string version = 14[json_name = "version"];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     *&#47; The identity pubkey of the current node.
     *
     * Generated from protobuf field <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     * @return string
     */
    public function getIdentityPubkey()
    {
        return $this->identity_pubkey;
    }

    /**
     *&#47; The identity pubkey of the current node.
     *
     * Generated from protobuf field <code>string identity_pubkey = 1[json_name = "identity_pubkey"];</code>
     * @param string $var
     * @return $this
     */
    public function setIdentityPubkey($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_pubkey = $var;

        return $this;
    }

    /**
     *&#47; If applicable, the alias of the current node, e.g. "bob"
     *
     * Generated from protobuf field <code>string alias = 2[json_name = "alias"];</code>
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     *&#47; If applicable, the alias of the current node, e.g. "bob"
     *
     * Generated from protobuf field <code>string alias = 2[json_name = "alias"];</code>
     * @param string $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->alias = $var;

        return $this;
    }

    /**
     *&#47; The color of the current node in hex code format
     *
     * Generated from protobuf field <code>string color = 17[json_name = "color"];</code>
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     *&#47; The color of the current node in hex code format
     *
     * Generated from protobuf field <code>string color = 17[json_name = "color"];</code>
     * @param string $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->color = $var;

        return $this;
    }

    /**
     *&#47; Number of pending channels
     *
     * Generated from protobuf field <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     * @return int
     */
    public function getNumPendingChannels()
    {
        return $this->num_pending_channels;
    }

    /**
     *&#47; Number of pending channels
     *
     * Generated from protobuf field <code>uint32 num_pending_channels = 3[json_name = "num_pending_channels"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumPendingChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_pending_channels = $var;

        return $this;
    }

    /**
     *&#47; Number of active channels
     *
     * Generated from protobuf field <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     * @return int
     */
    public function getNumActiveChannels()
    {
        return $this->num_active_channels;
    }

    /**
     *&#47; Number of active channels
     *
     * Generated from protobuf field <code>uint32 num_active_channels = 4[json_name = "num_active_channels"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumActiveChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_active_channels = $var;

        return $this;
    }

    /**
     *&#47; Number of inactive channels
     *
     * Generated from protobuf field <code>uint32 num_inactive_channels = 15[json_name = "num_inactive_channels"];</code>
     * @return int
     */
    public function getNumInactiveChannels()
    {
        return $this->num_inactive_channels;
    }

    /**
     *&#47; Number of inactive channels
     *
     * Generated from protobuf field <code>uint32 num_inactive_channels = 15[json_name = "num_inactive_channels"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumInactiveChannels($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_inactive_channels = $var;

        return $this;
    }

    /**
     *&#47; Number of peers
     *
     * Generated from protobuf field <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     * @return int
     */
    public function getNumPeers()
    {
        return $this->num_peers;
    }

    /**
     *&#47; Number of peers
     *
     * Generated from protobuf field <code>uint32 num_peers = 5[json_name = "num_peers"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumPeers($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_peers = $var;

        return $this;
    }

    /**
     *&#47; The node's current view of the height of the best block
     *
     * Generated from protobuf field <code>uint32 block_height = 6[json_name = "block_height"];</code>
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->block_height;
    }

    /**
     *&#47; The node's current view of the height of the best block
     *
     * Generated from protobuf field <code>uint32 block_height = 6[json_name = "block_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setBlockHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->block_height = $var;

        return $this;
    }

    /**
     *&#47; The node's current view of the hash of the best block
     *
     * Generated from protobuf field <code>string block_hash = 8[json_name = "block_hash"];</code>
     * @return string
     */
    public function getBlockHash()
    {
        return $this->block_hash;
    }

    /**
     *&#47; The node's current view of the hash of the best block
     *
     * Generated from protobuf field <code>string block_hash = 8[json_name = "block_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setBlockHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->block_hash = $var;

        return $this;
    }

    /**
     *&#47; Timestamp of the block best known to the wallet
     *
     * Generated from protobuf field <code>int64 best_header_timestamp = 13[json_name = "best_header_timestamp"];</code>
     * @return int|string
     */
    public function getBestHeaderTimestamp()
    {
        return $this->best_header_timestamp;
    }

    /**
     *&#47; Timestamp of the block best known to the wallet
     *
     * Generated from protobuf field <code>int64 best_header_timestamp = 13[json_name = "best_header_timestamp"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBestHeaderTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->best_header_timestamp = $var;

        return $this;
    }

    /**
     *&#47; Whether the wallet's view is synced to the main chain
     *
     * Generated from protobuf field <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     * @return bool
     */
    public function getSyncedToChain()
    {
        return $this->synced_to_chain;
    }

    /**
     *&#47; Whether the wallet's view is synced to the main chain
     *
     * Generated from protobuf field <code>bool synced_to_chain = 9[json_name = "synced_to_chain"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSyncedToChain($var)
    {
        GPBUtil::checkBool($var);
        $this->synced_to_chain = $var;

        return $this;
    }

    /**
     * Whether we consider ourselves synced with the public channel graph.
     *
     * Generated from protobuf field <code>bool synced_to_graph = 18[json_name = "synced_to_graph"];</code>
     * @return bool
     */
    public function getSyncedToGraph()
    {
        return $this->synced_to_graph;
    }

    /**
     * Whether we consider ourselves synced with the public channel graph.
     *
     * Generated from protobuf field <code>bool synced_to_graph = 18[json_name = "synced_to_graph"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSyncedToGraph($var)
    {
        GPBUtil::checkBool($var);
        $this->synced_to_graph = $var;

        return $this;
    }

    /**
     ** 
     *Whether the current node is connected to testnet. This field is 
     *deprecated and the network field should be used instead 
     *
     * Generated from protobuf field <code>bool testnet = 10[json_name = "testnet", deprecated = true];</code>
     * @return bool
     */
    public function getTestnet()
    {
        return $this->testnet;
    }

    /**
     ** 
     *Whether the current node is connected to testnet. This field is 
     *deprecated and the network field should be used instead 
     *
     * Generated from protobuf field <code>bool testnet = 10[json_name = "testnet", deprecated = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setTestnet($var)
    {
        GPBUtil::checkBool($var);
        $this->testnet = $var;

        return $this;
    }

    /**
     *&#47; A list of active chains the node is connected to
     *
     * Generated from protobuf field <code>repeated .lnrpc.Chain chains = 16[json_name = "chains"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChains()
    {
        return $this->chains;
    }

    /**
     *&#47; A list of active chains the node is connected to
     *
     * Generated from protobuf field <code>repeated .lnrpc.Chain chains = 16[json_name = "chains"];</code>
     * @param \Lnrpc\Chain[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Chain::class);
        $this->chains = $arr;

        return $this;
    }

    /**
     *&#47; The URIs of the current node.
     *
     * Generated from protobuf field <code>repeated string uris = 12[json_name = "uris"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     *&#47; The URIs of the current node.
     *
     * Generated from protobuf field <code>repeated string uris = 12[json_name = "uris"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

    /**
     *Features that our node has advertised in our init message, node
     *announcements and invoices.
     *
     * Generated from protobuf field <code>map<uint32, .lnrpc.Feature> features = 19[json_name = "features"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     *Features that our node has advertised in our init message, node
     *announcements and invoices.
     *
     * Generated from protobuf field <code>map<uint32, .lnrpc.Feature> features = 19[json_name = "features"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Feature::class);
        $this->features = $arr;

        return $this;
    }

}

