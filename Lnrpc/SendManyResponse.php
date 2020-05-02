<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.SendManyResponse</code>
 */
class SendManyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The id of the transaction
     *
     * Generated from protobuf field <code>string txid = 1;</code>
     */
    protected $txid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $txid
     *          &#47; The id of the transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The id of the transaction
     *
     * Generated from protobuf field <code>string txid = 1;</code>
     * @return string
     */
    public function getTxid()
    {
        return $this->txid;
    }

    /**
     *&#47; The id of the transaction
     *
     * Generated from protobuf field <code>string txid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxid($var)
    {
        GPBUtil::checkString($var, True);
        $this->txid = $var;

        return $this;
    }

}

