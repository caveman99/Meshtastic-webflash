<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

namespace Config;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Network Config
 *
 * Generated from protobuf message <code>Config.NetworkConfig</code>
 */
class NetworkConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Enable WiFi (disables Bluetooth)
     *
     * Generated from protobuf field <code>bool wifi_enabled = 1;</code>
     */
    protected $wifi_enabled = false;
    /**
     * If set, this node will try to join the specified wifi network and
     * acquire an address via DHCP
     *
     * Generated from protobuf field <code>string wifi_ssid = 3;</code>
     */
    protected $wifi_ssid = '';
    /**
     * If set, will be use to authenticate to the named wifi
     *
     * Generated from protobuf field <code>string wifi_psk = 4;</code>
     */
    protected $wifi_psk = '';
    /**
     * NTP server to use if WiFi is conneced, defaults to `0.pool.ntp.org`
     *
     * Generated from protobuf field <code>string ntp_server = 5;</code>
     */
    protected $ntp_server = '';
    /**
     * Enable Ethernet
     *
     * Generated from protobuf field <code>bool eth_enabled = 6;</code>
     */
    protected $eth_enabled = false;
    /**
     * acquire an address via DHCP or assign static
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.EthMode eth_mode = 7;</code>
     */
    protected $eth_mode = 0;
    /**
     * struct to keep static address
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.IpV4Config ipv4_config = 8;</code>
     */
    protected $ipv4_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $wifi_enabled
     *           Enable WiFi (disables Bluetooth)
     *     @type string $wifi_ssid
     *           If set, this node will try to join the specified wifi network and
     *           acquire an address via DHCP
     *     @type string $wifi_psk
     *           If set, will be use to authenticate to the named wifi
     *     @type string $ntp_server
     *           NTP server to use if WiFi is conneced, defaults to `0.pool.ntp.org`
     *     @type bool $eth_enabled
     *           Enable Ethernet
     *     @type int $eth_mode
     *           acquire an address via DHCP or assign static
     *     @type \Config\NetworkConfig\IpV4Config $ipv4_config
     *           struct to keep static address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config::initOnce();
        parent::__construct($data);
    }

    /**
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

    /**
     * Enable Ethernet
     *
     * Generated from protobuf field <code>bool eth_enabled = 6;</code>
     * @return bool
     */
    public function getEthEnabled()
    {
        return $this->eth_enabled;
    }

    /**
     * Enable Ethernet
     *
     * Generated from protobuf field <code>bool eth_enabled = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEthEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->eth_enabled = $var;

        return $this;
    }

    /**
     * acquire an address via DHCP or assign static
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.EthMode eth_mode = 7;</code>
     * @return int
     */
    public function getEthMode()
    {
        return $this->eth_mode;
    }

    /**
     * acquire an address via DHCP or assign static
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.EthMode eth_mode = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEthMode($var)
    {
        GPBUtil::checkEnum($var, \Config\NetworkConfig\EthMode::class);
        $this->eth_mode = $var;

        return $this;
    }

    /**
     * struct to keep static address
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.IpV4Config ipv4_config = 8;</code>
     * @return \Config\NetworkConfig\IpV4Config|null
     */
    public function getIpv4Config()
    {
        return $this->ipv4_config;
    }

    public function hasIpv4Config()
    {
        return isset($this->ipv4_config);
    }

    public function clearIpv4Config()
    {
        unset($this->ipv4_config);
    }

    /**
     * struct to keep static address
     *
     * Generated from protobuf field <code>.Config.NetworkConfig.IpV4Config ipv4_config = 8;</code>
     * @param \Config\NetworkConfig\IpV4Config $var
     * @return $this
     */
    public function setIpv4Config($var)
    {
        GPBUtil::checkMessage($var, \Config\NetworkConfig\IpV4Config::class);
        $this->ipv4_config = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkConfig::class, \Config_NetworkConfig::class);

