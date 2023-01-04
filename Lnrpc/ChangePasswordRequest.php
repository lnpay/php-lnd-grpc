<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletunlocker.proto

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
     *current_password should be the current valid passphrase used to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes current_password = 1;</code>
     */
    protected $current_password = '';
    /**
     *new_password should be the new passphrase that will be needed to unlock the
     *daemon. When using REST, this field must be encoded as base64.
     *
     * Generated from protobuf field <code>bytes new_password = 2;</code>
     */
    protected $new_password = '';
    /**
     *stateless_init is an optional argument instructing the daemon NOT to create
     *any *.macaroon files in its filesystem. If this parameter is set, then the
     *admin macaroon returned in the response MUST be stored by the caller of the
     *RPC as otherwise all access to the daemon will be lost!
     *
     * Generated from protobuf field <code>bool stateless_init = 3;</code>
     */
    protected $stateless_init = false;
    /**
     *new_macaroon_root_key is an optional argument instructing the daemon to
     *rotate the macaroon root key when set to true. This will invalidate all
     *previously generated macaroons.
     *
     * Generated from protobuf field <code>bool new_macaroon_root_key = 4;</code>
     */
    protected $new_macaroon_root_key = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $current_password
     *          current_password should be the current valid passphrase used to unlock the
     *          daemon. When using REST, this field must be encoded as base64.
     *     @type string $new_password
     *          new_password should be the new passphrase that will be needed to unlock the
     *          daemon. When using REST, this field must be encoded as base64.
     *     @type bool $stateless_init
     *          stateless_init is an optional argument instructing the daemon NOT to create
     *          any *.macaroon files in its filesystem. If this parameter is set, then the
     *          admin macaroon returned in the response MUST be stored by the caller of the
     *          RPC as otherwise all access to the daemon will be lost!
     *     @type bool $new_macaroon_root_key
     *          new_macaroon_root_key is an optional argument instructing the daemon to
     *          rotate the macaroon root key when set to true. This will invalidate all
     *          previously generated macaroons.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletunlocker::initOnce();
        parent::__construct($data);
    }

    /**
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

    /**
     *stateless_init is an optional argument instructing the daemon NOT to create
     *any *.macaroon files in its filesystem. If this parameter is set, then the
     *admin macaroon returned in the response MUST be stored by the caller of the
     *RPC as otherwise all access to the daemon will be lost!
     *
     * Generated from protobuf field <code>bool stateless_init = 3;</code>
     * @return bool
     */
    public function getStatelessInit()
    {
        return $this->stateless_init;
    }

    /**
     *stateless_init is an optional argument instructing the daemon NOT to create
     *any *.macaroon files in its filesystem. If this parameter is set, then the
     *admin macaroon returned in the response MUST be stored by the caller of the
     *RPC as otherwise all access to the daemon will be lost!
     *
     * Generated from protobuf field <code>bool stateless_init = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setStatelessInit($var)
    {
        GPBUtil::checkBool($var);
        $this->stateless_init = $var;

        return $this;
    }

    /**
     *new_macaroon_root_key is an optional argument instructing the daemon to
     *rotate the macaroon root key when set to true. This will invalidate all
     *previously generated macaroons.
     *
     * Generated from protobuf field <code>bool new_macaroon_root_key = 4;</code>
     * @return bool
     */
    public function getNewMacaroonRootKey()
    {
        return $this->new_macaroon_root_key;
    }

    /**
     *new_macaroon_root_key is an optional argument instructing the daemon to
     *rotate the macaroon root key when set to true. This will invalidate all
     *previously generated macaroons.
     *
     * Generated from protobuf field <code>bool new_macaroon_root_key = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setNewMacaroonRootKey($var)
    {
        GPBUtil::checkBool($var);
        $this->new_macaroon_root_key = $var;

        return $this;
    }

}

