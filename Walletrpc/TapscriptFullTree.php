<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: walletkit.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.TapscriptFullTree</code>
 */
class TapscriptFullTree extends \Google\Protobuf\Internal\Message
{
    /**
     *The complete, ordered list of all tap leaves of the tree.
     *
     * Generated from protobuf field <code>repeated .walletrpc.TapLeaf all_leaves = 1;</code>
     */
    private $all_leaves;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Walletrpc\TapLeaf>|\Google\Protobuf\Internal\RepeatedField $all_leaves
     *          The complete, ordered list of all tap leaves of the tree.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Walletkit::initOnce();
        parent::__construct($data);
    }

    /**
     *The complete, ordered list of all tap leaves of the tree.
     *
     * Generated from protobuf field <code>repeated .walletrpc.TapLeaf all_leaves = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllLeaves()
    {
        return $this->all_leaves;
    }

    /**
     *The complete, ordered list of all tap leaves of the tree.
     *
     * Generated from protobuf field <code>repeated .walletrpc.TapLeaf all_leaves = 1;</code>
     * @param array<\Walletrpc\TapLeaf>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllLeaves($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\TapLeaf::class);
        $this->all_leaves = $arr;

        return $this;
    }

}

