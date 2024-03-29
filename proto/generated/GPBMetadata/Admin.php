<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin.proto

namespace GPBMetadata;

class Admin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel::initOnce();
        \GPBMetadata\Config::initOnce();
        \GPBMetadata\DeviceMetadata::initOnce();
        \GPBMetadata\Mesh::initOnce();
        \GPBMetadata\ModuleConfig::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
admin.protoconfig.protodevice_metadata.proto
mesh.protomodule_config.proto"�

AdminMessage
get_channel_request (H (
get_channel_response (2.ChannelH 
get_owner_request (H #
get_owner_response (2.UserH 6
get_config_request (2.AdminMessage.ConfigTypeH &
get_config_response (2.ConfigH C
get_module_config_request (2.AdminMessage.ModuleConfigTypeH 3
get_module_config_response (2.ModuleConfigH 4
*get_canned_message_module_messages_request
 (H 5
+get_canned_message_module_messages_response (	H %
get_device_metadata_request (H 7
get_device_metadata_response (2.DeviceMetadataH 
	set_owner  (2.UserH 
set_channel! (2.ChannelH 

set_config" (2.ConfigH *
set_module_config# (2.ModuleConfigH ,
"set_canned_message_module_messages$ (	H 
begin_edit_settings@ (H 
commit_edit_settingsA (H 
confirm_set_channelB (H 
confirm_set_radioC (H 
reboot_ota_seconds_ (H 
exit_simulator` (H 
reboot_secondsa (H 
shutdown_secondsb (H 
factory_resetc (H 
nodedb_resetd (H "�

ConfigType
DEVICE_CONFIG 
POSITION_CONFIG
POWER_CONFIG
NETWORK_CONFIG
DISPLAY_CONFIG
LORA_CONFIG
BLUETOOTH_CONFIG"�
ModuleConfigType
MQTT_CONFIG 
SERIAL_CONFIG
EXTNOTIF_CONFIG
STOREFORWARD_CONFIG
RANGETEST_CONFIG
TELEMETRY_CONFIG
CANNEDMSG_CONFIG
AUDIO_CONFIGB
payload_variantB_
com.geeksville.meshBAdminProtosHZ"github.com/meshtastic/go/generated�Meshtastic.Protobufsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

