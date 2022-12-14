<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The bluetooth to device link:
 * Old BTLE protocol docs from TODO, merge in above and make real docs...
 * use protocol buffers, and NanoPB
 * messages from device to phone:
 * POSITION_UPDATE (..., time)
 * TEXT_RECEIVED(from, text, time)
 * OPAQUE_RECEIVED(from, payload, time) (for signal messages or other applications)
 * messages from phone to device:
 * SET_MYID(id, human readable long, human readable short) (send down the unique ID
 * string used for this node, a human readable string shown for that id, and a very
 * short human readable string suitable for oled screen) SEND_OPAQUE(dest, payload)
 * (for signal messages or other applications) SEND_TEXT(dest, text) Get all
 * nodes() (returns list of nodes, with full info, last time seen, loc, battery
 * level etc) SET_CONFIG (switches device to a new set of radio params and
 * preshared key, drops all existing nodes, force our node to rejoin this new group)
 * Full information about a node on the mesh
 *
 * Generated from protobuf message <code>NodeInfo</code>
 */
class NodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The node number
     *
     * Generated from protobuf field <code>uint32 num = 1;</code>
     */
    protected $num = 0;
    /**
     * The user info for this node
     *
     * Generated from protobuf field <code>.User user = 2;</code>
     */
    protected $user = null;
    /**
     * This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     * Position.time now indicates the last time we received a POSITION from that node.
     *
     * Generated from protobuf field <code>.Position position = 3;</code>
     */
    protected $position = null;
    /**
     * Returns the Signal-to-noise ratio (SNR) of the last received message,
     * as measured by the receiver. Return SNR of the last received message in dB
     *
     * Generated from protobuf field <code>float snr = 4;</code>
     */
    protected $snr = 0.0;
    /**
     * Set to indicate the last time we received a packet from this node
     *
     * Generated from protobuf field <code>fixed32 last_heard = 5;</code>
     */
    protected $last_heard = 0;
    /**
     * The latest device metrics for the node.
     *
     * Generated from protobuf field <code>.DeviceMetrics device_metrics = 6;</code>
     */
    protected $device_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num
     *           The node number
     *     @type \User $user
     *           The user info for this node
     *     @type \Position $position
     *           This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     *           Position.time now indicates the last time we received a POSITION from that node.
     *     @type float $snr
     *           Returns the Signal-to-noise ratio (SNR) of the last received message,
     *           as measured by the receiver. Return SNR of the last received message in dB
     *     @type int $last_heard
     *           Set to indicate the last time we received a packet from this node
     *     @type \DeviceMetrics $device_metrics
     *           The latest device metrics for the node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * The node number
     *
     * Generated from protobuf field <code>uint32 num = 1;</code>
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * The node number
     *
     * Generated from protobuf field <code>uint32 num = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->num = $var;

        return $this;
    }

    /**
     * The user info for this node
     *
     * Generated from protobuf field <code>.User user = 2;</code>
     * @return \User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * The user info for this node
     *
     * Generated from protobuf field <code>.User user = 2;</code>
     * @param \User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     * Position.time now indicates the last time we received a POSITION from that node.
     *
     * Generated from protobuf field <code>.Position position = 3;</code>
     * @return \Position|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function hasPosition()
    {
        return isset($this->position);
    }

    public function clearPosition()
    {
        unset($this->position);
    }

    /**
     * This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     * Position.time now indicates the last time we received a POSITION from that node.
     *
     * Generated from protobuf field <code>.Position position = 3;</code>
     * @param \Position $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Position::class);
        $this->position = $var;

        return $this;
    }

    /**
     * Returns the Signal-to-noise ratio (SNR) of the last received message,
     * as measured by the receiver. Return SNR of the last received message in dB
     *
     * Generated from protobuf field <code>float snr = 4;</code>
     * @return float
     */
    public function getSnr()
    {
        return $this->snr;
    }

    /**
     * Returns the Signal-to-noise ratio (SNR) of the last received message,
     * as measured by the receiver. Return SNR of the last received message in dB
     *
     * Generated from protobuf field <code>float snr = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setSnr($var)
    {
        GPBUtil::checkFloat($var);
        $this->snr = $var;

        return $this;
    }

    /**
     * Set to indicate the last time we received a packet from this node
     *
     * Generated from protobuf field <code>fixed32 last_heard = 5;</code>
     * @return int
     */
    public function getLastHeard()
    {
        return $this->last_heard;
    }

    /**
     * Set to indicate the last time we received a packet from this node
     *
     * Generated from protobuf field <code>fixed32 last_heard = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLastHeard($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_heard = $var;

        return $this;
    }

    /**
     * The latest device metrics for the node.
     *
     * Generated from protobuf field <code>.DeviceMetrics device_metrics = 6;</code>
     * @return \DeviceMetrics|null
     */
    public function getDeviceMetrics()
    {
        return $this->device_metrics;
    }

    public function hasDeviceMetrics()
    {
        return isset($this->device_metrics);
    }

    public function clearDeviceMetrics()
    {
        unset($this->device_metrics);
    }

    /**
     * The latest device metrics for the node.
     *
     * Generated from protobuf field <code>.DeviceMetrics device_metrics = 6;</code>
     * @param \DeviceMetrics $var
     * @return $this
     */
    public function setDeviceMetrics($var)
    {
        GPBUtil::checkMessage($var, \DeviceMetrics::class);
        $this->device_metrics = $var;

        return $this;
    }

}

