<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: wtclient.proto

namespace Wtclientrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>wtclientrpc.StatsResponse</code>
 */
class StatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *The total number of backups made to all active and exhausted watchtower
     *sessions.
     *
     * Generated from protobuf field <code>uint32 num_backups = 1;</code>
     */
    protected $num_backups = 0;
    /**
     *The total number of backups that are pending to be acknowledged by all
     *active and exhausted watchtower sessions.
     *
     * Generated from protobuf field <code>uint32 num_pending_backups = 2;</code>
     */
    protected $num_pending_backups = 0;
    /**
     *The total number of backups that all active and exhausted watchtower
     *sessions have failed to acknowledge.
     *
     * Generated from protobuf field <code>uint32 num_failed_backups = 3;</code>
     */
    protected $num_failed_backups = 0;
    /**
     * The total number of new sessions made to watchtowers.
     *
     * Generated from protobuf field <code>uint32 num_sessions_acquired = 4;</code>
     */
    protected $num_sessions_acquired = 0;
    /**
     * The total number of watchtower sessions that have been exhausted.
     *
     * Generated from protobuf field <code>uint32 num_sessions_exhausted = 5;</code>
     */
    protected $num_sessions_exhausted = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_backups
     *          The total number of backups made to all active and exhausted watchtower
     *          sessions.
     *     @type int $num_pending_backups
     *          The total number of backups that are pending to be acknowledged by all
     *          active and exhausted watchtower sessions.
     *     @type int $num_failed_backups
     *          The total number of backups that all active and exhausted watchtower
     *          sessions have failed to acknowledge.
     *     @type int $num_sessions_acquired
     *           The total number of new sessions made to watchtowers.
     *     @type int $num_sessions_exhausted
     *           The total number of watchtower sessions that have been exhausted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Wtclient::initOnce();
        parent::__construct($data);
    }

    /**
     *The total number of backups made to all active and exhausted watchtower
     *sessions.
     *
     * Generated from protobuf field <code>uint32 num_backups = 1;</code>
     * @return int
     */
    public function getNumBackups()
    {
        return $this->num_backups;
    }

    /**
     *The total number of backups made to all active and exhausted watchtower
     *sessions.
     *
     * Generated from protobuf field <code>uint32 num_backups = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumBackups($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_backups = $var;

        return $this;
    }

    /**
     *The total number of backups that are pending to be acknowledged by all
     *active and exhausted watchtower sessions.
     *
     * Generated from protobuf field <code>uint32 num_pending_backups = 2;</code>
     * @return int
     */
    public function getNumPendingBackups()
    {
        return $this->num_pending_backups;
    }

    /**
     *The total number of backups that are pending to be acknowledged by all
     *active and exhausted watchtower sessions.
     *
     * Generated from protobuf field <code>uint32 num_pending_backups = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumPendingBackups($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_pending_backups = $var;

        return $this;
    }

    /**
     *The total number of backups that all active and exhausted watchtower
     *sessions have failed to acknowledge.
     *
     * Generated from protobuf field <code>uint32 num_failed_backups = 3;</code>
     * @return int
     */
    public function getNumFailedBackups()
    {
        return $this->num_failed_backups;
    }

    /**
     *The total number of backups that all active and exhausted watchtower
     *sessions have failed to acknowledge.
     *
     * Generated from protobuf field <code>uint32 num_failed_backups = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumFailedBackups($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_failed_backups = $var;

        return $this;
    }

    /**
     * The total number of new sessions made to watchtowers.
     *
     * Generated from protobuf field <code>uint32 num_sessions_acquired = 4;</code>
     * @return int
     */
    public function getNumSessionsAcquired()
    {
        return $this->num_sessions_acquired;
    }

    /**
     * The total number of new sessions made to watchtowers.
     *
     * Generated from protobuf field <code>uint32 num_sessions_acquired = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumSessionsAcquired($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_sessions_acquired = $var;

        return $this;
    }

    /**
     * The total number of watchtower sessions that have been exhausted.
     *
     * Generated from protobuf field <code>uint32 num_sessions_exhausted = 5;</code>
     * @return int
     */
    public function getNumSessionsExhausted()
    {
        return $this->num_sessions_exhausted;
    }

    /**
     * The total number of watchtower sessions that have been exhausted.
     *
     * Generated from protobuf field <code>uint32 num_sessions_exhausted = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNumSessionsExhausted($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_sessions_exhausted = $var;

        return $this;
    }

}

