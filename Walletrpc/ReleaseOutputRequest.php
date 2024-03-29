<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.ReleaseOutputRequest</code>
 */
class ReleaseOutputRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique ID that was used to lock the output.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     */
    protected $id = '';
    /**
     * The identifying outpoint of the output being released.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 2;</code>
     */
    protected $outpoint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique ID that was used to lock the output.
     *     @type \Lnrpc\OutPoint $outpoint
     *           The identifying outpoint of the output being released.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique ID that was used to lock the output.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique ID that was used to lock the output.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * The identifying outpoint of the output being released.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 2;</code>
     * @return \Lnrpc\OutPoint|null
     */
    public function getOutpoint()
    {
        return $this->outpoint;
    }

    public function hasOutpoint()
    {
        return isset($this->outpoint);
    }

    public function clearOutpoint()
    {
        unset($this->outpoint);
    }

    /**
     * The identifying outpoint of the output being released.
     *
     * Generated from protobuf field <code>.lnrpc.OutPoint outpoint = 2;</code>
     * @param \Lnrpc\OutPoint $var
     * @return $this
     */
    public function setOutpoint($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\OutPoint::class);
        $this->outpoint = $var;

        return $this;
    }

}

