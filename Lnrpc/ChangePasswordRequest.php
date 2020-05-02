<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChangePasswordRequest</code>
 */
class ChangePasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *current_password should be the current valid passphrase used to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes current_password = 1;</code>
     */
    protected $current_password = '';
    /**
     **
     *new_password should be the new passphrase that will be needed to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes new_password = 2;</code>
     */
    protected $new_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $current_password
     *          *
     *          current_password should be the current valid passphrase used to unlock the
     *          daemon. When using REST, this field must be encoded as base64.
     *     @type string $new_password
     *          *
     *          new_password should be the new passphrase that will be needed to unlock the
     *          daemon. When using REST, this field must be encoded as base64.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *current_password should be the current valid passphrase used to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes current_password = 1;</code>
     * @return string
     */
    public function getCurrentPassword()
    {
        return $this->current_password;
    }

    /**
     **
     *current_password should be the current valid passphrase used to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes current_password = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentPassword($var)
    {
        GPBUtil::checkString($var, False);
        $this->current_password = $var;

        return $this;
    }

    /**
     **
     *new_password should be the new passphrase that will be needed to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes new_password = 2;</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->new_password;
    }

    /**
     **
     *new_password should be the new passphrase that will be needed to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes new_password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, False);
        $this->new_password = $var;

        return $this;
    }

}

