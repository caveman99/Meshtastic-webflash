<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: deviceonly.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * This message is never sent over the wire, but it is used for serializing DB
 * state to flash in the device code
 * FIXME, since we write this each time we enter deep sleep (and have infinite
 * flash) it would be better to use some sort of append only data structure for
 * the receive queue and use the preferences store for the other stuff
 *
 * Generated from protobuf message <code>DeviceState</code>
 */
class DeviceState extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * Read only settings/info about this node
     *
     * Generated from protobuf field <code>.MyNodeInfo my_node = 2;</code>
     */
    private $my_node = null;
    /**
     *
     * My owner info
     *
     * Generated from protobuf field <code>.User owner = 3;</code>
     */
    private $owner = null;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>repeated .NodeInfo node_db = 4;</code>
     */
    private $node_db;
    /**
     *
     * Received packets saved for delivery to the phone
     *
     * Generated from protobuf field <code>repeated .MeshPacket receive_queue = 5;</code>
     */
    private $receive_queue;
    /**
     *
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 8;</code>
     */
    private $version = 0;
    /**
     *
     * We keep the last received text message (only) stored in the device flash,
     * so we can show it on the screen.
     * Might be null
     *
     * Generated from protobuf field <code>.MeshPacket rx_text_message = 7;</code>
     */
    private $rx_text_message = null;
    /**
     *
     * Used only during development.
     * Indicates developer is testing and changes should never be saved to flash.
     *
     * Generated from protobuf field <code>bool no_save = 9;</code>
     */
    private $no_save = false;
    /**
     *
     * Some GPSes seem to have bogus settings from the factory, so we always do one factory reset.
     *
     * Generated from protobuf field <code>bool did_gps_reset = 11;</code>
     */
    private $did_gps_reset = false;

    public function __construct() {
        \GPBMetadata\Deviceonly::initOnce();
        parent::__construct();
    }

    /**
     *
     * Read only settings/info about this node
     *
     * Generated from protobuf field <code>.MyNodeInfo my_node = 2;</code>
     * @return \MyNodeInfo
     */
    public function getMyNode()
    {
        return $this->my_node;
    }

    /**
     *
     * Read only settings/info about this node
     *
     * Generated from protobuf field <code>.MyNodeInfo my_node = 2;</code>
     * @param \MyNodeInfo $var
     * @return $this
     */
    public function setMyNode($var)
    {
        GPBUtil::checkMessage($var, \MyNodeInfo::class);
        $this->my_node = $var;

        return $this;
    }

    /**
     *
     * My owner info
     *
     * Generated from protobuf field <code>.User owner = 3;</code>
     * @return \User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     *
     * My owner info
     *
     * Generated from protobuf field <code>.User owner = 3;</code>
     * @param \User $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkMessage($var, \User::class);
        $this->owner = $var;

        return $this;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>repeated .NodeInfo node_db = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeDb()
    {
        return $this->node_db;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>repeated .NodeInfo node_db = 4;</code>
     * @param \NodeInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeDb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NodeInfo::class);
        $this->node_db = $arr;

        return $this;
    }

    /**
     *
     * Received packets saved for delivery to the phone
     *
     * Generated from protobuf field <code>repeated .MeshPacket receive_queue = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceiveQueue()
    {
        return $this->receive_queue;
    }

    /**
     *
     * Received packets saved for delivery to the phone
     *
     * Generated from protobuf field <code>repeated .MeshPacket receive_queue = 5;</code>
     * @param \MeshPacket[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceiveQueue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MeshPacket::class);
        $this->receive_queue = $arr;

        return $this;
    }

    /**
     *
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 8;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

    /**
     *
     * We keep the last received text message (only) stored in the device flash,
     * so we can show it on the screen.
     * Might be null
     *
     * Generated from protobuf field <code>.MeshPacket rx_text_message = 7;</code>
     * @return \MeshPacket
     */
    public function getRxTextMessage()
    {
        return $this->rx_text_message;
    }

    /**
     *
     * We keep the last received text message (only) stored in the device flash,
     * so we can show it on the screen.
     * Might be null
     *
     * Generated from protobuf field <code>.MeshPacket rx_text_message = 7;</code>
     * @param \MeshPacket $var
     * @return $this
     */
    public function setRxTextMessage($var)
    {
        GPBUtil::checkMessage($var, \MeshPacket::class);
        $this->rx_text_message = $var;

        return $this;
    }

    /**
     *
     * Used only during development.
     * Indicates developer is testing and changes should never be saved to flash.
     *
     * Generated from protobuf field <code>bool no_save = 9;</code>
     * @return bool
     */
    public function getNoSave()
    {
        return $this->no_save;
    }

    /**
     *
     * Used only during development.
     * Indicates developer is testing and changes should never be saved to flash.
     *
     * Generated from protobuf field <code>bool no_save = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoSave($var)
    {
        GPBUtil::checkBool($var);
        $this->no_save = $var;

        return $this;
    }

    /**
     *
     * Some GPSes seem to have bogus settings from the factory, so we always do one factory reset.
     *
     * Generated from protobuf field <code>bool did_gps_reset = 11;</code>
     * @return bool
     */
    public function getDidGpsReset()
    {
        return $this->did_gps_reset;
    }

    /**
     *
     * Some GPSes seem to have bogus settings from the factory, so we always do one factory reset.
     *
     * Generated from protobuf field <code>bool did_gps_reset = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDidGpsReset($var)
    {
        GPBUtil::checkBool($var);
        $this->did_gps_reset = $var;

        return $this;
    }

}

