<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signer.proto

namespace Signrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>signrpc.MuSig2CombineSigRequest</code>
 */
class MuSig2CombineSigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The unique ID of the signing session to combine the signatures for.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     */
    protected $session_id = '';
    /**
     *The list of all other participants' partial signatures to add to the current
     *session.
     *
     * Generated from protobuf field <code>repeated bytes other_partial_signatures = 2;</code>
     */
    private $other_partial_signatures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *          The unique ID of the signing session to combine the signatures for.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $other_partial_signatures
     *          The list of all other participants' partial signatures to add to the current
     *          session.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signer::initOnce();
        parent::__construct($data);
    }

    /**
     *The unique ID of the signing session to combine the signatures for.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     *The unique ID of the signing session to combine the signatures for.
     *
     * Generated from protobuf field <code>bytes session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, False);
        $this->session_id = $var;

        return $this;
    }

    /**
     *The list of all other participants' partial signatures to add to the current
     *session.
     *
     * Generated from protobuf field <code>repeated bytes other_partial_signatures = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOtherPartialSignatures()
    {
        return $this->other_partial_signatures;
    }

    /**
     *The list of all other participants' partial signatures to add to the current
     *session.
     *
     * Generated from protobuf field <code>repeated bytes other_partial_signatures = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOtherPartialSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->other_partial_signatures = $arr;

        return $this;
    }

}

