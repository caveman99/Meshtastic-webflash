<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: remote_hardware.proto

namespace GPBMetadata;

class RemoteHardware
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
remote_hardware.proto"�
HardwareMessage#
type (2.HardwareMessage.Type
	gpio_mask (

gpio_value ("l
Type	
UNSET 
WRITE_GPIOS
WATCH_GPIOS
GPIOS_CHANGED

READ_GPIOS
READ_GPIOS_REPLYBb
com.geeksville.meshBRemoteHardwareHZ"github.com/meshtastic/go/generated�Meshtastic.Protobufsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

