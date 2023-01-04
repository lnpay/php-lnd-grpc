<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.MiddlewareRegistration</code>
 */
class MiddlewareRegistration extends \Google\Protobuf\Internal\Message
{
    /**
     *The name of the middleware to register. The name should be as informative
     *as possible and is logged on registration.
     *
     * Generated from protobuf field <code>string middleware_name = 1;</code>
     */
    protected $middleware_name = '';
    /**
     *The name of the custom macaroon caveat that this middleware is responsible
     *for. Only requests/responses that contain a macaroon with the registered
     *custom caveat are forwarded for interception to the middleware. The
     *exception being the read-only mode: All requests/responses are forwarded to
     *a middleware that requests read-only access but such a middleware won't be
     *allowed to _alter_ responses. As a security measure, _no_ middleware can
     *change responses to requests made with _unencumbered_ macaroons!
     *NOTE: Cannot be used at the same time as read_only_mode.
     *
     * Generated from protobuf field <code>string custom_macaroon_caveat_name = 2;</code>
     */
    protected $custom_macaroon_caveat_name = '';
    /**
     *Instead of defining a custom macaroon caveat name a middleware can register
     *itself for read-only access only. In that mode all requests/responses are
     *forwarded to the middleware but the middleware isn't allowed to alter any of
     *the responses.
     *NOTE: Cannot be used at the same time as custom_macaroon_caveat_name.
     *
     * Generated from protobuf field <code>bool read_only_mode = 3;</code>
     */
    protected $read_only_mode = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $middleware_name
     *          The name of the middleware to register. The name should be as informative
     *          as possible and is logged on registration.
     *     @type string $custom_macaroon_caveat_name
     *          The name of the custom macaroon caveat that this middleware is responsible
     *          for. Only requests/responses that contain a macaroon with the registered
     *          custom caveat are forwarded for interception to the middleware. The
     *          exception being the read-only mode: All requests/responses are forwarded to
     *          a middleware that requests read-only access but such a middleware won't be
     *          allowed to _alter_ responses. As a security measure, _no_ middleware can
     *          change responses to requests made with _unencumbered_ macaroons!
     *          NOTE: Cannot be used at the same time as read_only_mode.
     *     @type bool $read_only_mode
     *          Instead of defining a custom macaroon caveat name a middleware can register
     *          itself for read-only access only. In that mode all requests/responses are
     *          forwarded to the middleware but the middleware isn't allowed to alter any of
     *          the responses.
     *          NOTE: Cannot be used at the same time as custom_macaroon_caveat_name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     *The name of the middleware to register. The name should be as informative
     *as possible and is logged on registration.
     *
     * Generated from protobuf field <code>string middleware_name = 1;</code>
     * @return string
     */
    public function getMiddlewareName()
    {
        return $this->middleware_name;
    }

    /**
     *The name of the middleware to register. The name should be as informative
     *as possible and is logged on registration.
     *
     * Generated from protobuf field <code>string middleware_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMiddlewareName($var)
    {
        GPBUtil::checkString($var, True);
        $this->middleware_name = $var;

        return $this;
    }

    /**
     *The name of the custom macaroon caveat that this middleware is responsible
     *for. Only requests/responses that contain a macaroon with the registered
     *custom caveat are forwarded for interception to the middleware. The
     *exception being the read-only mode: All requests/responses are forwarded to
     *a middleware that requests read-only access but such a middleware won't be
     *allowed to _alter_ responses. As a security measure, _no_ middleware can
     *change responses to requests made with _unencumbered_ macaroons!
     *NOTE: Cannot be used at the same time as read_only_mode.
     *
     * Generated from protobuf field <code>string custom_macaroon_caveat_name = 2;</code>
     * @return string
     */
    public function getCustomMacaroonCaveatName()
    {
        return $this->custom_macaroon_caveat_name;
    }

    /**
     *The name of the custom macaroon caveat that this middleware is responsible
     *for. Only requests/responses that contain a macaroon with the registered
     *custom caveat are forwarded for interception to the middleware. The
     *exception being the read-only mode: All requests/responses are forwarded to
     *a middleware that requests read-only access but such a middleware won't be
     *allowed to _alter_ responses. As a security measure, _no_ middleware can
     *change responses to requests made with _unencumbered_ macaroons!
     *NOTE: Cannot be used at the same time as read_only_mode.
     *
     * Generated from protobuf field <code>string custom_macaroon_caveat_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomMacaroonCaveatName($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_macaroon_caveat_name = $var;

        return $this;
    }

    /**
     *Instead of defining a custom macaroon caveat name a middleware can register
     *itself for read-only access only. In that mode all requests/responses are
     *forwarded to the middleware but the middleware isn't allowed to alter any of
     *the responses.
     *NOTE: Cannot be used at the same time as custom_macaroon_caveat_name.
     *
     * Generated from protobuf field <code>bool read_only_mode = 3;</code>
     * @return bool
     */
    public function getReadOnlyMode()
    {
        return $this->read_only_mode;
    }

    /**
     *Instead of defining a custom macaroon caveat name a middleware can register
     *itself for read-only access only. In that mode all requests/responses are
     *forwarded to the middleware but the middleware isn't allowed to alter any of
     *the responses.
     *NOTE: Cannot be used at the same time as custom_macaroon_caveat_name.
     *
     * Generated from protobuf field <code>bool read_only_mode = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setReadOnlyMode($var)
    {
        GPBUtil::checkBool($var);
        $this->read_only_mode = $var;

        return $this;
    }

}

