<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lncli.proto

namespace Lnclipb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnclipb.VersionResponse</code>
 */
class VersionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The version information for lncli.
     *
     * Generated from protobuf field <code>.verrpc.Version lncli = 1;</code>
     */
    private $lncli = null;
    /**
     * The version information for lnd.
     *
     * Generated from protobuf field <code>.verrpc.Version lnd = 2;</code>
     */
    private $lnd = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Verrpc\Version $lncli
     *           The version information for lncli.
     *     @type \Verrpc\Version $lnd
     *           The version information for lnd.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lncli::initOnce();
        parent::__construct($data);
    }

    /**
     * The version information for lncli.
     *
     * Generated from protobuf field <code>.verrpc.Version lncli = 1;</code>
     * @return \Verrpc\Version
     */
    public function getLncli()
    {
        return $this->lncli;
    }

    /**
     * The version information for lncli.
     *
     * Generated from protobuf field <code>.verrpc.Version lncli = 1;</code>
     * @param \Verrpc\Version $var
     * @return $this
     */
    public function setLncli($var)
    {
        GPBUtil::checkMessage($var, \Verrpc\Version::class);
        $this->lncli = $var;

        return $this;
    }

    /**
     * The version information for lnd.
     *
     * Generated from protobuf field <code>.verrpc.Version lnd = 2;</code>
     * @return \Verrpc\Version
     */
    public function getLnd()
    {
        return $this->lnd;
    }

    /**
     * The version information for lnd.
     *
     * Generated from protobuf field <code>.verrpc.Version lnd = 2;</code>
     * @param \Verrpc\Version $var
     * @return $this
     */
    public function setLnd($var)
    {
        GPBUtil::checkMessage($var, \Verrpc\Version::class);
        $this->lnd = $var;

        return $this;
    }

}

