<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: watchtower.proto

namespace Watchtowerrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>watchtowerrpc.GetInfoResponse</code>
 */
class GetInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The public key of the watchtower.
     *
     * Generated from protobuf field <code>bytes pubkey = 1;</code>
     */
    protected $pubkey = '';
    /**
     * The listening addresses of the watchtower.
     *
     * Generated from protobuf field <code>repeated string listeners = 2;</code>
     */
    private $listeners;
    /**
     * The URIs of the watchtower.
     *
     * Generated from protobuf field <code>repeated string uris = 3;</code>
     */
    private $uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pubkey
     *           The public key of the watchtower.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $listeners
     *           The listening addresses of the watchtower.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $uris
     *           The URIs of the watchtower.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Watchtower::initOnce();
        parent::__construct($data);
    }

    /**
     * The public key of the watchtower.
     *
     * Generated from protobuf field <code>bytes pubkey = 1;</code>
     * @return string
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }

    /**
     * The public key of the watchtower.
     *
     * Generated from protobuf field <code>bytes pubkey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPubkey($var)
    {
        GPBUtil::checkString($var, False);
        $this->pubkey = $var;

        return $this;
    }

    /**
     * The listening addresses of the watchtower.
     *
     * Generated from protobuf field <code>repeated string listeners = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getListeners()
    {
        return $this->listeners;
    }

    /**
     * The listening addresses of the watchtower.
     *
     * Generated from protobuf field <code>repeated string listeners = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setListeners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->listeners = $arr;

        return $this;
    }

    /**
     * The URIs of the watchtower.
     *
     * Generated from protobuf field <code>repeated string uris = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * The URIs of the watchtower.
     *
     * Generated from protobuf field <code>repeated string uris = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

}
