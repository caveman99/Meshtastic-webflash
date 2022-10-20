<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Instead of sending want_config_id as a uint32, newer clients send this structure with information about the client.
 *
 * Generated from protobuf message <code>ToRadio.PeerInfo</code>
 */
class ToRadio_PeerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * The numeric version code for the client application, which in some cases are used to control device behavior (so the device can
     * make assumptions about who is using the API.
     *
     * Generated from protobuf field <code>uint32 app_version = 1;</code>
     */
    private $app_version = 0;
    /**
     *
     * True if the peer device can gateway MQTT packets.
     * If true, the device will not try to send packets to the internet directly,
     * instead it will pass the packets to the peer for dispatching.
     * This feature is optional, if set to false the device will assume the client can not gateway to MQTT.
     *
     * Generated from protobuf field <code>bool mqtt_gateway = 2;</code>
     */
    private $mqtt_gateway = false;

    public function __construct() {
        \GPBMetadata\Mesh::initOnce();
        parent::__construct();
    }

    /**
     *
     * The numeric version code for the client application, which in some cases are used to control device behavior (so the device can
     * make assumptions about who is using the API.
     *
     * Generated from protobuf field <code>uint32 app_version = 1;</code>
     * @return int
     */
    public function getAppVersion()
    {
        return $this->app_version;
    }

    /**
     *
     * The numeric version code for the client application, which in some cases are used to control device behavior (so the device can
     * make assumptions about who is using the API.
     *
     * Generated from protobuf field <code>uint32 app_version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAppVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->app_version = $var;

        return $this;
    }

    /**
     *
     * True if the peer device can gateway MQTT packets.
     * If true, the device will not try to send packets to the internet directly,
     * instead it will pass the packets to the peer for dispatching.
     * This feature is optional, if set to false the device will assume the client can not gateway to MQTT.
     *
     * Generated from protobuf field <code>bool mqtt_gateway = 2;</code>
     * @return bool
     */
    public function getMqttGateway()
    {
        return $this->mqtt_gateway;
    }

    /**
     *
     * True if the peer device can gateway MQTT packets.
     * If true, the device will not try to send packets to the internet directly,
     * instead it will pass the packets to the peer for dispatching.
     * This feature is optional, if set to false the device will assume the client can not gateway to MQTT.
     *
     * Generated from protobuf field <code>bool mqtt_gateway = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setMqttGateway($var)
    {
        GPBUtil::checkBool($var);
        $this->mqtt_gateway = $var;

        return $this;
    }

}

