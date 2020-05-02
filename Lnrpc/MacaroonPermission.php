<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.MacaroonPermission</code>
 */
class MacaroonPermission extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The entity a permission grants access to.
     *
     * Generated from protobuf field <code>string entity = 1;</code>
     */
    protected $entity = '';
    /**
     *&#47; The action that is granted.
     *
     * Generated from protobuf field <code>string action = 2;</code>
     */
    protected $action = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity
     *          &#47; The entity a permission grants access to.
     *     @type string $action
     *          &#47; The action that is granted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The entity a permission grants access to.
     *
     * Generated from protobuf field <code>string entity = 1;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     *&#47; The entity a permission grants access to.
     *
     * Generated from protobuf field <code>string entity = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity = $var;

        return $this;
    }

    /**
     *&#47; The action that is granted.
     *
     * Generated from protobuf field <code>string action = 2;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     *&#47; The action that is granted.
     *
     * Generated from protobuf field <code>string action = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

}

