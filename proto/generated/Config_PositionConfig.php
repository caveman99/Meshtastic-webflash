<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Position Config
 *
 * Generated from protobuf message <code>Config.PositionConfig</code>
 */
class Config_PositionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * We should send our position this often (but only if it has changed significantly)
     * Defaults to 15 minutes
     *
     * Generated from protobuf field <code>uint32 position_broadcast_secs = 1;</code>
     */
    private $position_broadcast_secs = 0;
    /**
     *
     * Adaptive position braoadcast, which is now the default.
     *
     * Generated from protobuf field <code>bool position_broadcast_smart_enabled = 2;</code>
     */
    private $position_broadcast_smart_enabled = false;
    /**
     *
     * If set, this node is at a fixed position.
     * We will generate GPS position updates at the regular interval, but use whatever the last lat/lon/alt we have for the node.
     * The lat/lon/alt can be set by an internal GPS or with the help of the app.
     *
     * Generated from protobuf field <code>bool fixed_position = 3;</code>
     */
    private $fixed_position = false;
    /**
     *
     * Is GPS enabled for this node?
     *
     * Generated from protobuf field <code>bool gps_enabled = 4;</code>
     */
    private $gps_enabled = false;
    /**
     *
     * How often should we try to get GPS position (in seconds)
     * or zero for the default of once every 30 seconds
     * or a very large value (maxint) to update only once at boot.
     *
     * Generated from protobuf field <code>uint32 gps_update_interval = 5;</code>
     */
    private $gps_update_interval = 0;
    /**
     *
     * How long should we try to get our position during each gps_update_interval attempt?  (in seconds)
     * Or if zero, use the default of 30 seconds.
     * If we don't get a new gps fix in that time, the gps will be put into sleep until  the next gps_update_rate
     * window.
     *
     * Generated from protobuf field <code>uint32 gps_attempt_time = 6;</code>
     */
    private $gps_attempt_time = 0;
    /**
     *
     * Bit field of boolean configuration options for POSITION messages
     * (bitwise OR of PositionFlags)
     *
     * Generated from protobuf field <code>uint32 position_flags = 7;</code>
     */
    private $position_flags = 0;

    public function __construct() {
        \GPBMetadata\Config::initOnce();
        parent::__construct();
    }

    /**
     *
     * We should send our position this often (but only if it has changed significantly)
     * Defaults to 15 minutes
     *
     * Generated from protobuf field <code>uint32 position_broadcast_secs = 1;</code>
     * @return int
     */
    public function getPositionBroadcastSecs()
    {
        return $this->position_broadcast_secs;
    }

    /**
     *
     * We should send our position this often (but only if it has changed significantly)
     * Defaults to 15 minutes
     *
     * Generated from protobuf field <code>uint32 position_broadcast_secs = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPositionBroadcastSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->position_broadcast_secs = $var;

        return $this;
    }

    /**
     *
     * Adaptive position braoadcast, which is now the default.
     *
     * Generated from protobuf field <code>bool position_broadcast_smart_enabled = 2;</code>
     * @return bool
     */
    public function getPositionBroadcastSmartEnabled()
    {
        return $this->position_broadcast_smart_enabled;
    }

    /**
     *
     * Adaptive position braoadcast, which is now the default.
     *
     * Generated from protobuf field <code>bool position_broadcast_smart_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setPositionBroadcastSmartEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->position_broadcast_smart_enabled = $var;

        return $this;
    }

    /**
     *
     * If set, this node is at a fixed position.
     * We will generate GPS position updates at the regular interval, but use whatever the last lat/lon/alt we have for the node.
     * The lat/lon/alt can be set by an internal GPS or with the help of the app.
     *
     * Generated from protobuf field <code>bool fixed_position = 3;</code>
     * @return bool
     */
    public function getFixedPosition()
    {
        return $this->fixed_position;
    }

    /**
     *
     * If set, this node is at a fixed position.
     * We will generate GPS position updates at the regular interval, but use whatever the last lat/lon/alt we have for the node.
     * The lat/lon/alt can be set by an internal GPS or with the help of the app.
     *
     * Generated from protobuf field <code>bool fixed_position = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFixedPosition($var)
    {
        GPBUtil::checkBool($var);
        $this->fixed_position = $var;

        return $this;
    }

    /**
     *
     * Is GPS enabled for this node?
     *
     * Generated from protobuf field <code>bool gps_enabled = 4;</code>
     * @return bool
     */
    public function getGpsEnabled()
    {
        return $this->gps_enabled;
    }

    /**
     *
     * Is GPS enabled for this node?
     *
     * Generated from protobuf field <code>bool gps_enabled = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setGpsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->gps_enabled = $var;

        return $this;
    }

    /**
     *
     * How often should we try to get GPS position (in seconds)
     * or zero for the default of once every 30 seconds
     * or a very large value (maxint) to update only once at boot.
     *
     * Generated from protobuf field <code>uint32 gps_update_interval = 5;</code>
     * @return int
     */
    public function getGpsUpdateInterval()
    {
        return $this->gps_update_interval;
    }

    /**
     *
     * How often should we try to get GPS position (in seconds)
     * or zero for the default of once every 30 seconds
     * or a very large value (maxint) to update only once at boot.
     *
     * Generated from protobuf field <code>uint32 gps_update_interval = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGpsUpdateInterval($var)
    {
        GPBUtil::checkUint32($var);
        $this->gps_update_interval = $var;

        return $this;
    }

    /**
     *
     * How long should we try to get our position during each gps_update_interval attempt?  (in seconds)
     * Or if zero, use the default of 30 seconds.
     * If we don't get a new gps fix in that time, the gps will be put into sleep until  the next gps_update_rate
     * window.
     *
     * Generated from protobuf field <code>uint32 gps_attempt_time = 6;</code>
     * @return int
     */
    public function getGpsAttemptTime()
    {
        return $this->gps_attempt_time;
    }

    /**
     *
     * How long should we try to get our position during each gps_update_interval attempt?  (in seconds)
     * Or if zero, use the default of 30 seconds.
     * If we don't get a new gps fix in that time, the gps will be put into sleep until  the next gps_update_rate
     * window.
     *
     * Generated from protobuf field <code>uint32 gps_attempt_time = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGpsAttemptTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->gps_attempt_time = $var;

        return $this;
    }

    /**
     *
     * Bit field of boolean configuration options for POSITION messages
     * (bitwise OR of PositionFlags)
     *
     * Generated from protobuf field <code>uint32 position_flags = 7;</code>
     * @return int
     */
    public function getPositionFlags()
    {
        return $this->position_flags;
    }

    /**
     *
     * Bit field of boolean configuration options for POSITION messages
     * (bitwise OR of PositionFlags)
     *
     * Generated from protobuf field <code>uint32 position_flags = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPositionFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->position_flags = $var;

        return $this;
    }

}

