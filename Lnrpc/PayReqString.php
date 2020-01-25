<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PayReqString</code>
 */
class PayReqString extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The payment request string to be decoded
     *
     * Generated from protobuf field <code>string pay_req = 1;</code>
     */
    private $pay_req = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pay_req
     *          &#47; The payment request string to be decoded
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The payment request string to be decoded
     *
     * Generated from protobuf field <code>string pay_req = 1;</code>
     * @return string
     */
    public function getPayReq()
    {
        return $this->pay_req;
    }

    /**
     *&#47; The payment request string to be decoded
     *
     * Generated from protobuf field <code>string pay_req = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayReq($var)
    {
        GPBUtil::checkString($var, True);
        $this->pay_req = $var;

        return $this;
    }

}

