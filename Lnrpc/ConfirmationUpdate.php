<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ConfirmationUpdate</code>
 */
class ConfirmationUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes block_sha = 1;</code>
     */
    protected $block_sha = '';
    /**
     * Generated from protobuf field <code>int32 block_height = 2;</code>
     */
    protected $block_height = 0;
    /**
     * Generated from protobuf field <code>uint32 num_confs_left = 3;</code>
     */
    protected $num_confs_left = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $block_sha
     *     @type int $block_height
     *     @type int $num_confs_left
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes block_sha = 1;</code>
     * @return string
     */
    public function getBlockSha()
    {
        return $this->block_sha;
    }

    /**
     * Generated from protobuf field <code>bytes block_sha = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBlockSha($var)
    {
        GPBUtil::checkString($var, False);
        $this->block_sha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 block_height = 2;</code>
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->block_height;
    }

    /**
     * Generated from protobuf field <code>int32 block_height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBlockHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->block_height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num_confs_left = 3;</code>
     * @return int
     */
    public function getNumConfsLeft()
    {
        return $this->num_confs_left;
    }

    /**
     * Generated from protobuf field <code>uint32 num_confs_left = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumConfsLeft($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_confs_left = $var;

        return $this;
    }

}

