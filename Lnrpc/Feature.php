<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Feature</code>
 */
class Feature extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 2[json_name = "name"];</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>bool is_required = 3[json_name = "is_required"];</code>
     */
    private $is_required = false;
    /**
     * Generated from protobuf field <code>bool is_known = 4[json_name = "is_known"];</code>
     */
    private $is_known = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type bool $is_required
     *     @type bool $is_known
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 2[json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2[json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_required = 3[json_name = "is_required"];</code>
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->is_required;
    }

    /**
     * Generated from protobuf field <code>bool is_required = 3[json_name = "is_required"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->is_required = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_known = 4[json_name = "is_known"];</code>
     * @return bool
     */
    public function getIsKnown()
    {
        return $this->is_known;
    }

    /**
     * Generated from protobuf field <code>bool is_known = 4[json_name = "is_known"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsKnown($var)
    {
        GPBUtil::checkBool($var);
        $this->is_known = $var;

        return $this;
    }

}

