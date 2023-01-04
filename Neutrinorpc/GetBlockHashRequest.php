<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: neutrino.proto

namespace Neutrinorpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>neutrinorpc.GetBlockHashRequest</code>
 */
class GetBlockHashRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The block height or index.
     *
     * Generated from protobuf field <code>int32 height = 1;</code>
     */
    protected $height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $height
     *           The block height or index.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Neutrino::initOnce();
        parent::__construct($data);
    }

    /**
     * The block height or index.
     *
     * Generated from protobuf field <code>int32 height = 1;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * The block height or index.
     *
     * Generated from protobuf field <code>int32 height = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

}
