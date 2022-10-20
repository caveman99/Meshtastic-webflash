<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Network Config
 *
 * Generated from protobuf message <code>Config.NetworkConfig</code>
 */
class Config_NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * Enable WiFi (disables Bluetooth)
     *
     * Generated from protobuf field <code>bool wifi_enabled = 1;</code>
     */
    private $wifi_enabled = false;
    /**
     *
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.WiFiMode wifi_mode = 2;</code>
     */
    private $wifi_mode = 0;
    /**
     *
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>string wifi_ssid = 3;</code>
     */
    private $wifi_ssid = '';
    /**
     *
     * If set, will be use to authenticate to the named wifi
     *
     * Generated from protobuf field <code>string wifi_psk = 4;</code>
     */
    private $wifi_psk = '';
    /**
     *
     * NTP server to use if WiFi is conneced, defaults to `0.pool.ntp.org`
     *
     * Generated from protobuf field <code>string ntp_server = 5;</code>
     */
    private $ntp_server = '';

    public function __construct() {
        \GPBMetadata\Config::initOnce();
        parent::__construct();
    }

    /**
     *
     * Enable WiFi (disables Bluetooth)
     *
     * Generated from protobuf field <code>bool wifi_enabled = 1;</code>
     * @return bool
     */
    public function getWifiEnabled()
    {
        return $this->wifi_enabled;
    }

    /**
     *
     * Enable WiFi (disables Bluetooth)
     *
     * Generated from protobuf field <code>bool wifi_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setWifiEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->wifi_enabled = $var;

        return $this;
    }

    /**
     *
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.WiFiMode wifi_mode = 2;</code>
     * @return int
     */
    public function getWifiMode()
    {
        return $this->wifi_mode;
    }

    /**
     *
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.WiFiMode wifi_mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWifiMode($var)
    {
        GPBUtil::checkEnum($var, \Config_NetworkConfig_WiFiMode::class);
        $this->wifi_mode = $var;

        return $this;
    }

    /**
     *
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>string wifi_ssid = 3;</code>
     * @return string
     */
    public function getWifiSsid()
    {
        return $this->wifi_ssid;
    }

    /**
     *
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>string wifi_ssid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWifiSsid($var)
    {
        GPBUtil::checkString($var, True);
        $this->wifi_ssid = $var;

        return $this;
    }

    /**
     *
     * If set, will be use to authenticate to the named wifi
     *
     * Generated from protobuf field <code>string wifi_psk = 4;</code>
     * @return string
     */
    public function getWifiPsk()
    {
        return $this->wifi_psk;
    }

    /**
     *
     * If set, will be use to authenticate to the named wifi
     *
     * Generated from protobuf field <code>string wifi_psk = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setWifiPsk($var)
    {
        GPBUtil::checkString($var, True);
        $this->wifi_psk = $var;

        return $this;
    }

    /**
     *
     * NTP server to use if WiFi is conneced, defaults to `0.pool.ntp.org`
     *
     * Generated from protobuf field <code>string ntp_server = 5;</code>
     * @return string
     */
    public function getNtpServer()
    {
        return $this->ntp_server;
    }

    /**
     *
     * NTP server to use if WiFi is conneced, defaults to `0.pool.ntp.org`
     *
     * Generated from protobuf field <code>string ntp_server = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNtpServer($var)
    {
        GPBUtil::checkString($var, True);
        $this->ntp_server = $var;

        return $this;
    }

}

