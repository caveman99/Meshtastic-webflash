<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: remote_hardware.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * An example app to show off the module system. This message is used for
 * REMOTE_HARDWARE_APP PortNums.
 * Also provides easy remote access to any GPIO.
 * In the future other remote hardware operations can be added based on user interest
 * (i.e. serial output, spi/i2c input/output).
 * FIXME - currently this feature is turned on by default which is dangerous
 * because no security yet (beyond the channel mechanism).
 * It should be off by default and then protected based on some TBD mechanism
 * (a special channel once multichannel support is included?)
 *
 * Generated from protobuf message <code>HardwareMessage</code>
 */
class HardwareMessage extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * What type of HardwareMessage is this?
     *
     * Generated from protobuf field <code>.HardwareMessage.Type type = 1;</code>
     */
    private $type = 0;
    /**
     *
     * What gpios are we changing. Not used for all MessageTypes, see MessageType for details
     *
     * Generated from protobuf field <code>uint64 gpio_mask = 2;</code>
     */
    private $gpio_mask = 0;
    /**
     *
     * For gpios that were listed in gpio_mask as valid, what are the signal levels for those gpios.
     * Not used for all MessageTypes, see MessageType for details
     *
     * Generated from protobuf field <code>uint64 gpio_value = 3;</code>
     */
    private $gpio_value = 0;

    public function __construct() {
        \GPBMetadata\RemoteHardware::initOnce();
        parent::__construct();
    }

    /**
     *
     * What type of HardwareMessage is this?
     *
     * Generated from protobuf field <code>.HardwareMessage.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * What type of HardwareMessage is this?
     *
     * Generated from protobuf field <code>.HardwareMessage.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \HardwareMessage_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     *
     * What gpios are we changing. Not used for all MessageTypes, see MessageType for details
     *
     * Generated from protobuf field <code>uint64 gpio_mask = 2;</code>
     * @return int|string
     */
    public function getGpioMask()
    {
        return $this->gpio_mask;
    }

    /**
     *
     * What gpios are we changing. Not used for all MessageTypes, see MessageType for details
     *
     * Generated from protobuf field <code>uint64 gpio_mask = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGpioMask($var)
    {
        GPBUtil::checkUint64($var);
        $this->gpio_mask = $var;

        return $this;
    }

    /**
     *
     * For gpios that were listed in gpio_mask as valid, what are the signal levels for those gpios.
     * Not used for all MessageTypes, see MessageType for details
     *
     * Generated from protobuf field <code>uint64 gpio_value = 3;</code>
     * @return int|string
     */
    public function getGpioValue()
    {
        return $this->gpio_value;
    }

    /**
     *
     * For gpios that were listed in gpio_mask as valid, what are the signal levels for those gpios.
     * Not used for all MessageTypes, see MessageType for details
     *
     * Generated from protobuf field <code>uint64 gpio_value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGpioValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->gpio_value = $var;

        return $this;
    }

}

