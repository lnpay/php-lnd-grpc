<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lightning.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ForwardingHistoryRequest</code>
 */
class ForwardingHistoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Start time is the starting point of the forwarding history request. All
     * records beyond this point will be included, respecting the end time, and
     * the index offset.
     *
     * Generated from protobuf field <code>uint64 start_time = 1;</code>
     */
    protected $start_time = 0;
    /**
     * End time is the end point of the forwarding history request. The
     * response will carry at most 50k records between the start time and the
     * end time. The index offset can be used to implement pagination.
     *
     * Generated from protobuf field <code>uint64 end_time = 2;</code>
     */
    protected $end_time = 0;
    /**
     * Index offset is the offset in the time series to start at. As each
     * response can only contain 50k records, callers can use this to skip
     * around within a packed time series.
     *
     * Generated from protobuf field <code>uint32 index_offset = 3;</code>
     */
    protected $index_offset = 0;
    /**
     * The max number of events to return in the response to this query.
     *
     * Generated from protobuf field <code>uint32 num_max_events = 4;</code>
     */
    protected $num_max_events = 0;
    /**
     * Informs the server if the peer alias should be looked up for each
     * forwarding event.
     *
     * Generated from protobuf field <code>bool peer_alias_lookup = 5;</code>
     */
    protected $peer_alias_lookup = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start_time
     *           Start time is the starting point of the forwarding history request. All
     *           records beyond this point will be included, respecting the end time, and
     *           the index offset.
     *     @type int|string $end_time
     *           End time is the end point of the forwarding history request. The
     *           response will carry at most 50k records between the start time and the
     *           end time. The index offset can be used to implement pagination.
     *     @type int $index_offset
     *           Index offset is the offset in the time series to start at. As each
     *           response can only contain 50k records, callers can use this to skip
     *           around within a packed time series.
     *     @type int $num_max_events
     *           The max number of events to return in the response to this query.
     *     @type bool $peer_alias_lookup
     *           Informs the server if the peer alias should be looked up for each
     *           forwarding event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lightning::initOnce();
        parent::__construct($data);
    }

    /**
     * Start time is the starting point of the forwarding history request. All
     * records beyond this point will be included, respecting the end time, and
     * the index offset.
     *
     * Generated from protobuf field <code>uint64 start_time = 1;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Start time is the starting point of the forwarding history request. All
     * records beyond this point will be included, respecting the end time, and
     * the index offset.
     *
     * Generated from protobuf field <code>uint64 start_time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End time is the end point of the forwarding history request. The
     * response will carry at most 50k records between the start time and the
     * end time. The index offset can be used to implement pagination.
     *
     * Generated from protobuf field <code>uint64 end_time = 2;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * End time is the end point of the forwarding history request. The
     * response will carry at most 50k records between the start time and the
     * end time. The index offset can be used to implement pagination.
     *
     * Generated from protobuf field <code>uint64 end_time = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Index offset is the offset in the time series to start at. As each
     * response can only contain 50k records, callers can use this to skip
     * around within a packed time series.
     *
     * Generated from protobuf field <code>uint32 index_offset = 3;</code>
     * @return int
     */
    public function getIndexOffset()
    {
        return $this->index_offset;
    }

    /**
     * Index offset is the offset in the time series to start at. As each
     * response can only contain 50k records, callers can use this to skip
     * around within a packed time series.
     *
     * Generated from protobuf field <code>uint32 index_offset = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIndexOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->index_offset = $var;

        return $this;
    }

    /**
     * The max number of events to return in the response to this query.
     *
     * Generated from protobuf field <code>uint32 num_max_events = 4;</code>
     * @return int
     */
    public function getNumMaxEvents()
    {
        return $this->num_max_events;
    }

    /**
     * The max number of events to return in the response to this query.
     *
     * Generated from protobuf field <code>uint32 num_max_events = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumMaxEvents($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_max_events = $var;

        return $this;
    }

    /**
     * Informs the server if the peer alias should be looked up for each
     * forwarding event.
     *
     * Generated from protobuf field <code>bool peer_alias_lookup = 5;</code>
     * @return bool
     */
    public function getPeerAliasLookup()
    {
        return $this->peer_alias_lookup;
    }

    /**
     * Informs the server if the peer alias should be looked up for each
     * forwarding event.
     *
     * Generated from protobuf field <code>bool peer_alias_lookup = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPeerAliasLookup($var)
    {
        GPBUtil::checkBool($var);
        $this->peer_alias_lookup = $var;

        return $this;
    }

}

