<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.KeyLocator</code>
 */
class KeyLocator extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The family of key being identified.
     *
     * Generated from protobuf field <code>int32 key_family = 1;</code>
     */
    protected $key_family = 0;
    /**
     *&#47; The precise index of the key being identified.
     *
     * Generated from protobuf field <code>int32 key_index = 2;</code>
     */
    protected $key_index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key_family
     *          &#47; The family of key being identified.
     *     @type int $key_index
     *          &#47; The precise index of the key being identified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The family of key being identified.
     *
     * Generated from protobuf field <code>int32 key_family = 1;</code>
     * @return int
     */
    public function getKeyFamily()
    {
        return $this->key_family;
    }

    /**
     *&#47; The family of key being identified.
     *
     * Generated from protobuf field <code>int32 key_family = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyFamily($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_family = $var;

        return $this;
    }

    /**
     *&#47; The precise index of the key being identified.
     *
     * Generated from protobuf field <code>int32 key_index = 2;</code>
     * @return int
     */
    public function getKeyIndex()
    {
        return $this->key_index;
    }

    /**
     *&#47; The precise index of the key being identified.
     *
     * Generated from protobuf field <code>int32 key_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_index = $var;

        return $this;
    }

}

