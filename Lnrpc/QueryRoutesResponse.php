<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.QueryRoutesResponse</code>
 */
class QueryRoutesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *The route that results from the path finding operation. This is still a
     *repeated field to retain backwards compatibility.
     *
     * Generated from protobuf field <code>repeated .lnrpc.Route routes = 1[json_name = "routes"];</code>
     */
    private $routes;
    /**
     **
     *The success probability of the returned route based on the current mission
     *control state. [EXPERIMENTAL]
     *
     * Generated from protobuf field <code>double success_prob = 2[json_name = "success_prob"];</code>
     */
    private $success_prob = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\Route[]|\Google\Protobuf\Internal\RepeatedField $routes
     *          *
     *          The route that results from the path finding operation. This is still a
     *          repeated field to retain backwards compatibility.
     *     @type float $success_prob
     *          *
     *          The success probability of the returned route based on the current mission
     *          control state. [EXPERIMENTAL]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *The route that results from the path finding operation. This is still a
     *repeated field to retain backwards compatibility.
     *
     * Generated from protobuf field <code>repeated .lnrpc.Route routes = 1[json_name = "routes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     **
     *The route that results from the path finding operation. This is still a
     *repeated field to retain backwards compatibility.
     *
     * Generated from protobuf field <code>repeated .lnrpc.Route routes = 1[json_name = "routes"];</code>
     * @param \Lnrpc\Route[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Route::class);
        $this->routes = $arr;

        return $this;
    }

    /**
     **
     *The success probability of the returned route based on the current mission
     *control state. [EXPERIMENTAL]
     *
     * Generated from protobuf field <code>double success_prob = 2[json_name = "success_prob"];</code>
     * @return float
     */
    public function getSuccessProb()
    {
        return $this->success_prob;
    }

    /**
     **
     *The success probability of the returned route based on the current mission
     *control state. [EXPERIMENTAL]
     *
     * Generated from protobuf field <code>double success_prob = 2[json_name = "success_prob"];</code>
     * @param float $var
     * @return $this
     */
    public function setSuccessProb($var)
    {
        GPBUtil::checkDouble($var);
        $this->success_prob = $var;

        return $this;
    }

}

