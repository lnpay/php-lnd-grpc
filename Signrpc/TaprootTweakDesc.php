<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.TaprootTweakDesc</code>
 */
class TaprootTweakDesc extends \Google\Protobuf\Internal\Message
{
    /**
     *The root hash of the tapscript tree if a script path is committed to. If
     *the MuSig2 key put on chain doesn't also commit to a script path (BIP-0086
     *key spend only), then this needs to be empty and the key_spend_only field
     *below must be set to true. This is required because gRPC cannot
     *differentiate between a zero-size byte slice and a nil byte slice (both
     *would be serialized the same way). So the extra boolean is required.
     *
     * Generated from protobuf field <code>bytes script_root = 1;</code>
     */
    protected $script_root = '';
    /**
     *Indicates that the above script_root is expected to be empty because this
     *is a BIP-0086 key spend only commitment where only the internal key is
     *committed to instead of also including a script root hash.
     *
     * Generated from protobuf field <code>bool key_spend_only = 2;</code>
     */
    protected $key_spend_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $script_root
     *          The root hash of the tapscript tree if a script path is committed to. If
     *          the MuSig2 key put on chain doesn't also commit to a script path (BIP-0086
     *          key spend only), then this needs to be empty and the key_spend_only field
     *          below must be set to true. This is required because gRPC cannot
     *          differentiate between a zero-size byte slice and a nil byte slice (both
     *          would be serialized the same way). So the extra boolean is required.
     *     @type bool $key_spend_only
     *          Indicates that the above script_root is expected to be empty because this
     *          is a BIP-0086 key spend only commitment where only the internal key is
     *          committed to instead of also including a script root hash.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *The root hash of the tapscript tree if a script path is committed to. If
     *the MuSig2 key put on chain doesn't also commit to a script path (BIP-0086
     *key spend only), then this needs to be empty and the key_spend_only field
     *below must be set to true. This is required because gRPC cannot
     *differentiate between a zero-size byte slice and a nil byte slice (both
     *would be serialized the same way). So the extra boolean is required.
     *
     * Generated from protobuf field <code>bytes script_root = 1;</code>
     * @return string
     */
    public function getScriptRoot()
    {
        return $this->script_root;
    }

    /**
     *The root hash of the tapscript tree if a script path is committed to. If
     *the MuSig2 key put on chain doesn't also commit to a script path (BIP-0086
     *key spend only), then this needs to be empty and the key_spend_only field
     *below must be set to true. This is required because gRPC cannot
     *differentiate between a zero-size byte slice and a nil byte slice (both
     *would be serialized the same way). So the extra boolean is required.
     *
     * Generated from protobuf field <code>bytes script_root = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScriptRoot($var)
    {
        GPBUtil::checkString($var, False);
        $this->script_root = $var;

        return $this;
    }

    /**
     *Indicates that the above script_root is expected to be empty because this
     *is a BIP-0086 key spend only commitment where only the internal key is
     *committed to instead of also including a script root hash.
     *
     * Generated from protobuf field <code>bool key_spend_only = 2;</code>
     * @return bool
     */
    public function getKeySpendOnly()
    {
        return $this->key_spend_only;
    }

    /**
     *Indicates that the above script_root is expected to be empty because this
     *is a BIP-0086 key spend only commitment where only the internal key is
     *committed to instead of also including a script root hash.
     *
     * Generated from protobuf field <code>bool key_spend_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeySpendOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->key_spend_only = $var;

        return $this;
    }

}

