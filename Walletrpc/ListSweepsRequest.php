<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.ListSweepsRequest</code>
 */
class ListSweepsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Retrieve the full sweep transaction details. If false, only the sweep txids
     *will be returned. Note that some sweeps that LND publishes will have been
     *replaced-by-fee, so will not be included in this output.
     *
     * Generated from protobuf field <code>bool verbose = 1;</code>
     */
    protected $verbose = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $verbose
     *          Retrieve the full sweep transaction details. If false, only the sweep txids
     *          will be returned. Note that some sweeps that LND publishes will have been
     *          replaced-by-fee, so will not be included in this output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *Retrieve the full sweep transaction details. If false, only the sweep txids
     *will be returned. Note that some sweeps that LND publishes will have been
     *replaced-by-fee, so will not be included in this output.
     *
     * Generated from protobuf field <code>bool verbose = 1;</code>
     * @return bool
     */
    public function getVerbose()
    {
        return $this->verbose;
    }

    /**
     *Retrieve the full sweep transaction details. If false, only the sweep txids
     *will be returned. Note that some sweeps that LND publishes will have been
     *replaced-by-fee, so will not be included in this output.
     *
     * Generated from protobuf field <code>bool verbose = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerbose($var)
    {
        GPBUtil::checkBool($var);
        $this->verbose = $var;

        return $this;
    }

}

