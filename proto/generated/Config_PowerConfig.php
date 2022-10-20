<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Power Config\
 * See [Power Config](/docs/settings/config/power) for additional power config details.
 *
 * Generated from protobuf message <code>Config.PowerConfig</code>
 */
class Config_PowerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * If set, we are powered from a low-current source (i.e. solar), so even if it looks like we have power flowing in
     * we should try to minimize power consumption as much as possible.
     * YOU DO NOT NEED TO SET THIS IF YOU'VE set is_router (it is implied in that case).
     * Advanced Option
     *
     * Generated from protobuf field <code>bool is_power_saving = 1;</code>
     */
    private $is_power_saving = false;
    /**
     *
     * If non-zero, the device will fully power off this many seconds after external power is removed.
     *
     * Generated from protobuf field <code>uint32 on_battery_shutdown_after_secs = 2;</code>
     */
    private $on_battery_shutdown_after_secs = 0;
    /**
     *
     * Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     * Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     * Should be set to floating point value between 2 and 4
     * Fixes issues on Heltec v2
     *
     * Generated from protobuf field <code>float adc_multiplier_override = 3;</code>
     */
    private $adc_multiplier_override = 0.0;
    /**
     *
     * Wait Bluetooth Seconds
     * The number of seconds for to wait before turning off BLE in No Bluetooth states
     * 0 for default of 1 minute
     *
     * Generated from protobuf field <code>uint32 wait_bluetooth_secs = 4;</code>
     */
    private $wait_bluetooth_secs = 0;
    /**
     *
     * Mesh Super Deep Sleep Timeout Seconds
     * While in Light Sleep if this value is exceeded we will lower into super deep sleep 
     * for sds_secs (default 1 year) or a button press
     * 0 for default of two hours, MAXUINT for disabled
     *
     * Generated from protobuf field <code>uint32 mesh_sds_timeout_secs = 5;</code>
     */
    private $mesh_sds_timeout_secs = 0;
    /**
     *
     * Super Deep Sleep Seconds
     * While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     * for this value (default 1 year) or a button press
     * 0 for default of one year
     *
     * Generated from protobuf field <code>uint32 sds_secs = 6;</code>
     */
    private $sds_secs = 0;
    /**
     *
     * Light Sleep Seconds
     * In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     * ESP32 Only
     * 0 for default of 300
     *
     * Generated from protobuf field <code>uint32 ls_secs = 7;</code>
     */
    private $ls_secs = 0;
    /**
     *
     * Minimum Wake Seconds
     * While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     * 0 for default of 10 seconds
     *
     * Generated from protobuf field <code>uint32 min_wake_secs = 8;</code>
     */
    private $min_wake_secs = 0;

    public function __construct() {
        \GPBMetadata\Config::initOnce();
        parent::__construct();
    }

    /**
     *
     * If set, we are powered from a low-current source (i.e. solar), so even if it looks like we have power flowing in
     * we should try to minimize power consumption as much as possible.
     * YOU DO NOT NEED TO SET THIS IF YOU'VE set is_router (it is implied in that case).
     * Advanced Option
     *
     * Generated from protobuf field <code>bool is_power_saving = 1;</code>
     * @return bool
     */
    public function getIsPowerSaving()
    {
        return $this->is_power_saving;
    }

    /**
     *
     * If set, we are powered from a low-current source (i.e. solar), so even if it looks like we have power flowing in
     * we should try to minimize power consumption as much as possible.
     * YOU DO NOT NEED TO SET THIS IF YOU'VE set is_router (it is implied in that case).
     * Advanced Option
     *
     * Generated from protobuf field <code>bool is_power_saving = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPowerSaving($var)
    {
        GPBUtil::checkBool($var);
        $this->is_power_saving = $var;

        return $this;
    }

    /**
     *
     * If non-zero, the device will fully power off this many seconds after external power is removed.
     *
     * Generated from protobuf field <code>uint32 on_battery_shutdown_after_secs = 2;</code>
     * @return int
     */
    public function getOnBatteryShutdownAfterSecs()
    {
        return $this->on_battery_shutdown_after_secs;
    }

    /**
     *
     * If non-zero, the device will fully power off this many seconds after external power is removed.
     *
     * Generated from protobuf field <code>uint32 on_battery_shutdown_after_secs = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOnBatteryShutdownAfterSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->on_battery_shutdown_after_secs = $var;

        return $this;
    }

    /**
     *
     * Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     * Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     * Should be set to floating point value between 2 and 4
     * Fixes issues on Heltec v2
     *
     * Generated from protobuf field <code>float adc_multiplier_override = 3;</code>
     * @return float
     */
    public function getAdcMultiplierOverride()
    {
        return $this->adc_multiplier_override;
    }

    /**
     *
     * Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     * Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     * Should be set to floating point value between 2 and 4
     * Fixes issues on Heltec v2
     *
     * Generated from protobuf field <code>float adc_multiplier_override = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAdcMultiplierOverride($var)
    {
        GPBUtil::checkFloat($var);
        $this->adc_multiplier_override = $var;

        return $this;
    }

    /**
     *
     * Wait Bluetooth Seconds
     * The number of seconds for to wait before turning off BLE in No Bluetooth states
     * 0 for default of 1 minute
     *
     * Generated from protobuf field <code>uint32 wait_bluetooth_secs = 4;</code>
     * @return int
     */
    public function getWaitBluetoothSecs()
    {
        return $this->wait_bluetooth_secs;
    }

    /**
     *
     * Wait Bluetooth Seconds
     * The number of seconds for to wait before turning off BLE in No Bluetooth states
     * 0 for default of 1 minute
     *
     * Generated from protobuf field <code>uint32 wait_bluetooth_secs = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWaitBluetoothSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->wait_bluetooth_secs = $var;

        return $this;
    }

    /**
     *
     * Mesh Super Deep Sleep Timeout Seconds
     * While in Light Sleep if this value is exceeded we will lower into super deep sleep 
     * for sds_secs (default 1 year) or a button press
     * 0 for default of two hours, MAXUINT for disabled
     *
     * Generated from protobuf field <code>uint32 mesh_sds_timeout_secs = 5;</code>
     * @return int
     */
    public function getMeshSdsTimeoutSecs()
    {
        return $this->mesh_sds_timeout_secs;
    }

    /**
     *
     * Mesh Super Deep Sleep Timeout Seconds
     * While in Light Sleep if this value is exceeded we will lower into super deep sleep 
     * for sds_secs (default 1 year) or a button press
     * 0 for default of two hours, MAXUINT for disabled
     *
     * Generated from protobuf field <code>uint32 mesh_sds_timeout_secs = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMeshSdsTimeoutSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->mesh_sds_timeout_secs = $var;

        return $this;
    }

    /**
     *
     * Super Deep Sleep Seconds
     * While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     * for this value (default 1 year) or a button press
     * 0 for default of one year
     *
     * Generated from protobuf field <code>uint32 sds_secs = 6;</code>
     * @return int
     */
    public function getSdsSecs()
    {
        return $this->sds_secs;
    }

    /**
     *
     * Super Deep Sleep Seconds
     * While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     * for this value (default 1 year) or a button press
     * 0 for default of one year
     *
     * Generated from protobuf field <code>uint32 sds_secs = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSdsSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->sds_secs = $var;

        return $this;
    }

    /**
     *
     * Light Sleep Seconds
     * In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     * ESP32 Only
     * 0 for default of 300
     *
     * Generated from protobuf field <code>uint32 ls_secs = 7;</code>
     * @return int
     */
    public function getLsSecs()
    {
        return $this->ls_secs;
    }

    /**
     *
     * Light Sleep Seconds
     * In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     * ESP32 Only
     * 0 for default of 300
     *
     * Generated from protobuf field <code>uint32 ls_secs = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLsSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->ls_secs = $var;

        return $this;
    }

    /**
     *
     * Minimum Wake Seconds
     * While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     * 0 for default of 10 seconds
     *
     * Generated from protobuf field <code>uint32 min_wake_secs = 8;</code>
     * @return int
     */
    public function getMinWakeSecs()
    {
        return $this->min_wake_secs;
    }

    /**
     *
     * Minimum Wake Seconds
     * While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     * 0 for default of 10 seconds
     *
     * Generated from protobuf field <code>uint32 min_wake_secs = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMinWakeSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_wake_secs = $var;

        return $this;
    }

}

