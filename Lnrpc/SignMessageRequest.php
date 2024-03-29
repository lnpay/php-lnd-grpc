<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SignMessageRequest</code>
 */
class SignMessageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The message to be signed. When using REST, this field must be encoded as
     *base64.
     *
     * Generated from protobuf field <code>bytes msg = 1;</code>
     */
    protected $msg = '';
    /**
     *Instead of the default double-SHA256 hashing of the message before signing,
     *only use one round of hashing instead.
     *
     * Generated from protobuf field <code>bool single_hash = 2;</code>
     */
    protected $single_hash = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $msg
     *          The message to be signed. When using REST, this field must be encoded as
     *          base64.
     *     @type bool $single_hash
     *          Instead of the default double-SHA256 hashing of the message before signing,
     *          only use one round of hashing instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The message to be signed. When using REST, this field must be encoded as
     *base64.
     *
     * Generated from protobuf field <code>bytes msg = 1;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     *The message to be signed. When using REST, this field must be encoded as
     *base64.
     *
     * Generated from protobuf field <code>bytes msg = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, False);
        $this->msg = $var;

        return $this;
    }

    /**
     *Instead of the default double-SHA256 hashing of the message before signing,
     *only use one round of hashing instead.
     *
     * Generated from protobuf field <code>bool single_hash = 2;</code>
     * @return bool
     */
    public function getSingleHash()
    {
        return $this->single_hash;
    }

    /**
     *Instead of the default double-SHA256 hashing of the message before signing,
     *only use one round of hashing instead.
     *
     * Generated from protobuf field <code>bool single_hash = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSingleHash($var)
    {
        GPBUtil::checkBool($var);
        $this->single_hash = $var;

        return $this;
    }

}

