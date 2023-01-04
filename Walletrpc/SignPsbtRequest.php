<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.SignPsbtRequest</code>
 */
class SignPsbtRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *The PSBT that should be signed. The PSBT must contain all required inputs,
     *outputs, UTXO data and custom fields required to identify the signing key.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     */
    protected $funded_psbt = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $funded_psbt
     *          The PSBT that should be signed. The PSBT must contain all required inputs,
     *          outputs, UTXO data and custom fields required to identify the signing key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *The PSBT that should be signed. The PSBT must contain all required inputs,
     *outputs, UTXO data and custom fields required to identify the signing key.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     * @return string
     */
    public function getFundedPsbt()
    {
        return $this->funded_psbt;
    }

    /**
     *The PSBT that should be signed. The PSBT must contain all required inputs,
     *outputs, UTXO data and custom fields required to identify the signing key.
     *
     * Generated from protobuf field <code>bytes funded_psbt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFundedPsbt($var)
    {
        GPBUtil::checkString($var, False);
        $this->funded_psbt = $var;

        return $this;
    }

}

