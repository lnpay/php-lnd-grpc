<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: chainnotifier.proto

namespace Chainrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chainrpc.BlockEpoch</code>
 */
class BlockEpoch extends \Google\Protobuf\Internal\Message
{
    /**
     * The hash of the block.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    private $hash = '';
    /**
     * The height of the block.
     *
     * Generated from protobuf field <code>uint32 height = 2;</code>
     */
    private $height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           The hash of the block.
     *     @type int $height
     *           The height of the block.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chainnotifier::initOnce();
        parent::__construct($data);
    }

    /**
     * The hash of the block.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The hash of the block.
     *
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * The height of the block.
     *
     * Generated from protobuf field <code>uint32 height = 2;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * The height of the block.
     *
     * Generated from protobuf field <code>uint32 height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->height = $var;

        return $this;
    }

}

