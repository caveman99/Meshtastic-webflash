<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message is handled by the Admin module and is responsible for all settings/channel read/write operations.
 * This message is used to do settings operations to both remote AND local nodes.
 * (Prior to 1.2 these operations were done via special ToRadio operations)
 *
 * Generated from protobuf message <code>AdminMessage</code>
 */
class AdminMessage extends \Google\Protobuf\Internal\Message
{
    protected $payload_variant;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $get_channel_request
     *           Send the specified channel in the response to this message
     *           NOTE: This field is sent with the channel index + 1 (to ensure we never try to send 'zero' - which protobufs treats as not present)
     *     @type \Channel $get_channel_response
     *           TODO: REPLACE
     *     @type bool $get_owner_request
     *           Send the current owner data in the response to this message.
     *     @type \User $get_owner_response
     *           TODO: REPLACE
     *     @type int $get_config_request
     *           Ask for the following config data to be sent
     *     @type \Config $get_config_response
     *           Send the current Config in the response to this message.
     *     @type int $get_module_config_request
     *           Ask for the following config data to be sent
     *     @type \ModuleConfig $get_module_config_response
     *           Send the current Config in the response to this message.
     *     @type bool $get_canned_message_module_messages_request
     *           Get the Canned Message Module messages in the response to this message.
     *     @type string $get_canned_message_module_messages_response
     *           Get the Canned Message Module messages in the response to this message.
     *     @type bool $get_device_metadata_request
     *           Request the node to send device metadata (firmware, protobuf version, etc)
     *     @type \DeviceMetadata $get_device_metadata_response
     *           Device metadata response
     *     @type \User $set_owner
     *           Set the owner for this node
     *     @type \Channel $set_channel
     *           Set channels (using the new API).
     *           A special channel is the "primary channel".
     *           The other records are secondary channels.
     *           Note: only one channel can be marked as primary.
     *           If the client sets a particular channel to be primary, the previous channel will be set to SECONDARY automatically.
     *     @type \Config $set_config
     *           Set the current Config
     *     @type \ModuleConfig $set_module_config
     *           Set the current Config
     *     @type string $set_canned_message_module_messages
     *           Set the Canned Message Module messages text.
     *     @type bool $begin_edit_settings
     *           Begins an edit transaction for config, module config, owner, and channel settings changes
     *           This will delay the standard *implicit* save to the file system and subsequent reboot behavior until committed (commit_edit_settings)
     *     @type bool $commit_edit_settings
     *           Commits an open transaction for any edits made to config, module config, owner, and channel settings
     *     @type bool $confirm_set_channel
     *           Setting channels/radio config remotely carries the risk that you might send an invalid config and the radio never talks to your mesh again.
     *           Therefore if setting either of these properties remotely, you must send a confirm_xxx message within 10 minutes.
     *           If you fail to do so, the radio will assume loss of comms and revert your changes.
     *           These messages are optional when changing the local node.
     *     @type bool $confirm_set_radio
     *           TODO: REPLACE
     *     @type int $reboot_ota_seconds
     *           Tell the node to reboot into the OTA Firmware in this many seconds (or <0 to cancel reboot)
     *           Only Implemented for ESP32 Devices. This needs to be issued to send a new main firmware via bluetooth.
     *     @type bool $exit_simulator
     *           This message is only supported for the simulator porduino build.
     *           If received the simulator will exit successfully.
     *     @type int $reboot_seconds
     *           Tell the node to reboot in this many seconds (or <0 to cancel reboot)
     *     @type int $shutdown_seconds
     *           Tell the node to shutdown in this many seconds (or <0 to cancel shutdown)
     *     @type int $factory_reset
     *           Tell the node to factory reset, all device settings will be returned to factory defaults.
     *     @type int $nodedb_reset
     *           Tell the node to reset the nodedb.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Admin::initOnce();
        parent::__construct($data);
    }

    /**
     * Send the specified channel in the response to this message
     * NOTE: This field is sent with the channel index + 1 (to ensure we never try to send 'zero' - which protobufs treats as not present)
     *
     * Generated from protobuf field <code>uint32 get_channel_request = 1;</code>
     * @return int
     */
    public function getGetChannelRequest()
    {
        return $this->readOneof(1);
    }

    public function hasGetChannelRequest()
    {
        return $this->hasOneof(1);
    }

    /**
     * Send the specified channel in the response to this message
     * NOTE: This field is sent with the channel index + 1 (to ensure we never try to send 'zero' - which protobufs treats as not present)
     *
     * Generated from protobuf field <code>uint32 get_channel_request = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGetChannelRequest($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Channel get_channel_response = 2;</code>
     * @return \Channel|null
     */
    public function getGetChannelResponse()
    {
        return $this->readOneof(2);
    }

    public function hasGetChannelResponse()
    {
        return $this->hasOneof(2);
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Channel get_channel_response = 2;</code>
     * @param \Channel $var
     * @return $this
     */
    public function setGetChannelResponse($var)
    {
        GPBUtil::checkMessage($var, \Channel::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Send the current owner data in the response to this message.
     *
     * Generated from protobuf field <code>bool get_owner_request = 3;</code>
     * @return bool
     */
    public function getGetOwnerRequest()
    {
        return $this->readOneof(3);
    }

    public function hasGetOwnerRequest()
    {
        return $this->hasOneof(3);
    }

    /**
     * Send the current owner data in the response to this message.
     *
     * Generated from protobuf field <code>bool get_owner_request = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGetOwnerRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.User get_owner_response = 4;</code>
     * @return \User|null
     */
    public function getGetOwnerResponse()
    {
        return $this->readOneof(4);
    }

    public function hasGetOwnerResponse()
    {
        return $this->hasOneof(4);
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.User get_owner_response = 4;</code>
     * @param \User $var
     * @return $this
     */
    public function setGetOwnerResponse($var)
    {
        GPBUtil::checkMessage($var, \User::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Ask for the following config data to be sent
     *
     * Generated from protobuf field <code>.AdminMessage.ConfigType get_config_request = 5;</code>
     * @return int
     */
    public function getGetConfigRequest()
    {
        return $this->readOneof(5);
    }

    public function hasGetConfigRequest()
    {
        return $this->hasOneof(5);
    }

    /**
     * Ask for the following config data to be sent
     *
     * Generated from protobuf field <code>.AdminMessage.ConfigType get_config_request = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGetConfigRequest($var)
    {
        GPBUtil::checkEnum($var, \AdminMessage\ConfigType::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Send the current Config in the response to this message.
     *
     * Generated from protobuf field <code>.Config get_config_response = 6;</code>
     * @return \Config|null
     */
    public function getGetConfigResponse()
    {
        return $this->readOneof(6);
    }

    public function hasGetConfigResponse()
    {
        return $this->hasOneof(6);
    }

    /**
     * Send the current Config in the response to this message.
     *
     * Generated from protobuf field <code>.Config get_config_response = 6;</code>
     * @param \Config $var
     * @return $this
     */
    public function setGetConfigResponse($var)
    {
        GPBUtil::checkMessage($var, \Config::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Ask for the following config data to be sent
     *
     * Generated from protobuf field <code>.AdminMessage.ModuleConfigType get_module_config_request = 7;</code>
     * @return int
     */
    public function getGetModuleConfigRequest()
    {
        return $this->readOneof(7);
    }

    public function hasGetModuleConfigRequest()
    {
        return $this->hasOneof(7);
    }

    /**
     * Ask for the following config data to be sent
     *
     * Generated from protobuf field <code>.AdminMessage.ModuleConfigType get_module_config_request = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGetModuleConfigRequest($var)
    {
        GPBUtil::checkEnum($var, \AdminMessage\ModuleConfigType::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Send the current Config in the response to this message.
     *
     * Generated from protobuf field <code>.ModuleConfig get_module_config_response = 8;</code>
     * @return \ModuleConfig|null
     */
    public function getGetModuleConfigResponse()
    {
        return $this->readOneof(8);
    }

    public function hasGetModuleConfigResponse()
    {
        return $this->hasOneof(8);
    }

    /**
     * Send the current Config in the response to this message.
     *
     * Generated from protobuf field <code>.ModuleConfig get_module_config_response = 8;</code>
     * @param \ModuleConfig $var
     * @return $this
     */
    public function setGetModuleConfigResponse($var)
    {
        GPBUtil::checkMessage($var, \ModuleConfig::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Get the Canned Message Module messages in the response to this message.
     *
     * Generated from protobuf field <code>bool get_canned_message_module_messages_request = 10;</code>
     * @return bool
     */
    public function getGetCannedMessageModuleMessagesRequest()
    {
        return $this->readOneof(10);
    }

    public function hasGetCannedMessageModuleMessagesRequest()
    {
        return $this->hasOneof(10);
    }

    /**
     * Get the Canned Message Module messages in the response to this message.
     *
     * Generated from protobuf field <code>bool get_canned_message_module_messages_request = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setGetCannedMessageModuleMessagesRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Get the Canned Message Module messages in the response to this message.
     *
     * Generated from protobuf field <code>string get_canned_message_module_messages_response = 11;</code>
     * @return string
     */
    public function getGetCannedMessageModuleMessagesResponse()
    {
        return $this->readOneof(11);
    }

    public function hasGetCannedMessageModuleMessagesResponse()
    {
        return $this->hasOneof(11);
    }

    /**
     * Get the Canned Message Module messages in the response to this message.
     *
     * Generated from protobuf field <code>string get_canned_message_module_messages_response = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setGetCannedMessageModuleMessagesResponse($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Request the node to send device metadata (firmware, protobuf version, etc)
     *
     * Generated from protobuf field <code>bool get_device_metadata_request = 12;</code>
     * @return bool
     */
    public function getGetDeviceMetadataRequest()
    {
        return $this->readOneof(12);
    }

    public function hasGetDeviceMetadataRequest()
    {
        return $this->hasOneof(12);
    }

    /**
     * Request the node to send device metadata (firmware, protobuf version, etc)
     *
     * Generated from protobuf field <code>bool get_device_metadata_request = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setGetDeviceMetadataRequest($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Device metadata response
     *
     * Generated from protobuf field <code>.DeviceMetadata get_device_metadata_response = 13;</code>
     * @return \DeviceMetadata|null
     */
    public function getGetDeviceMetadataResponse()
    {
        return $this->readOneof(13);
    }

    public function hasGetDeviceMetadataResponse()
    {
        return $this->hasOneof(13);
    }

    /**
     * Device metadata response
     *
     * Generated from protobuf field <code>.DeviceMetadata get_device_metadata_response = 13;</code>
     * @param \DeviceMetadata $var
     * @return $this
     */
    public function setGetDeviceMetadataResponse($var)
    {
        GPBUtil::checkMessage($var, \DeviceMetadata::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Set the owner for this node
     *
     * Generated from protobuf field <code>.User set_owner = 32;</code>
     * @return \User|null
     */
    public function getSetOwner()
    {
        return $this->readOneof(32);
    }

    public function hasSetOwner()
    {
        return $this->hasOneof(32);
    }

    /**
     * Set the owner for this node
     *
     * Generated from protobuf field <code>.User set_owner = 32;</code>
     * @param \User $var
     * @return $this
     */
    public function setSetOwner($var)
    {
        GPBUtil::checkMessage($var, \User::class);
        $this->writeOneof(32, $var);

        return $this;
    }

    /**
     * Set channels (using the new API).
     * A special channel is the "primary channel".
     * The other records are secondary channels.
     * Note: only one channel can be marked as primary.
     * If the client sets a particular channel to be primary, the previous channel will be set to SECONDARY automatically.
     *
     * Generated from protobuf field <code>.Channel set_channel = 33;</code>
     * @return \Channel|null
     */
    public function getSetChannel()
    {
        return $this->readOneof(33);
    }

    public function hasSetChannel()
    {
        return $this->hasOneof(33);
    }

    /**
     * Set channels (using the new API).
     * A special channel is the "primary channel".
     * The other records are secondary channels.
     * Note: only one channel can be marked as primary.
     * If the client sets a particular channel to be primary, the previous channel will be set to SECONDARY automatically.
     *
     * Generated from protobuf field <code>.Channel set_channel = 33;</code>
     * @param \Channel $var
     * @return $this
     */
    public function setSetChannel($var)
    {
        GPBUtil::checkMessage($var, \Channel::class);
        $this->writeOneof(33, $var);

        return $this;
    }

    /**
     * Set the current Config
     *
     * Generated from protobuf field <code>.Config set_config = 34;</code>
     * @return \Config|null
     */
    public function getSetConfig()
    {
        return $this->readOneof(34);
    }

    public function hasSetConfig()
    {
        return $this->hasOneof(34);
    }

    /**
     * Set the current Config
     *
     * Generated from protobuf field <code>.Config set_config = 34;</code>
     * @param \Config $var
     * @return $this
     */
    public function setSetConfig($var)
    {
        GPBUtil::checkMessage($var, \Config::class);
        $this->writeOneof(34, $var);

        return $this;
    }

    /**
     * Set the current Config
     *
     * Generated from protobuf field <code>.ModuleConfig set_module_config = 35;</code>
     * @return \ModuleConfig|null
     */
    public function getSetModuleConfig()
    {
        return $this->readOneof(35);
    }

    public function hasSetModuleConfig()
    {
        return $this->hasOneof(35);
    }

    /**
     * Set the current Config
     *
     * Generated from protobuf field <code>.ModuleConfig set_module_config = 35;</code>
     * @param \ModuleConfig $var
     * @return $this
     */
    public function setSetModuleConfig($var)
    {
        GPBUtil::checkMessage($var, \ModuleConfig::class);
        $this->writeOneof(35, $var);

        return $this;
    }

    /**
     * Set the Canned Message Module messages text.
     *
     * Generated from protobuf field <code>string set_canned_message_module_messages = 36;</code>
     * @return string
     */
    public function getSetCannedMessageModuleMessages()
    {
        return $this->readOneof(36);
    }

    public function hasSetCannedMessageModuleMessages()
    {
        return $this->hasOneof(36);
    }

    /**
     * Set the Canned Message Module messages text.
     *
     * Generated from protobuf field <code>string set_canned_message_module_messages = 36;</code>
     * @param string $var
     * @return $this
     */
    public function setSetCannedMessageModuleMessages($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(36, $var);

        return $this;
    }

    /**
     * Begins an edit transaction for config, module config, owner, and channel settings changes
     * This will delay the standard *implicit* save to the file system and subsequent reboot behavior until committed (commit_edit_settings)
     *
     * Generated from protobuf field <code>bool begin_edit_settings = 64;</code>
     * @return bool
     */
    public function getBeginEditSettings()
    {
        return $this->readOneof(64);
    }

    public function hasBeginEditSettings()
    {
        return $this->hasOneof(64);
    }

    /**
     * Begins an edit transaction for config, module config, owner, and channel settings changes
     * This will delay the standard *implicit* save to the file system and subsequent reboot behavior until committed (commit_edit_settings)
     *
     * Generated from protobuf field <code>bool begin_edit_settings = 64;</code>
     * @param bool $var
     * @return $this
     */
    public function setBeginEditSettings($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(64, $var);

        return $this;
    }

    /**
     * Commits an open transaction for any edits made to config, module config, owner, and channel settings
     *
     * Generated from protobuf field <code>bool commit_edit_settings = 65;</code>
     * @return bool
     */
    public function getCommitEditSettings()
    {
        return $this->readOneof(65);
    }

    public function hasCommitEditSettings()
    {
        return $this->hasOneof(65);
    }

    /**
     * Commits an open transaction for any edits made to config, module config, owner, and channel settings
     *
     * Generated from protobuf field <code>bool commit_edit_settings = 65;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommitEditSettings($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(65, $var);

        return $this;
    }

    /**
     * Setting channels/radio config remotely carries the risk that you might send an invalid config and the radio never talks to your mesh again.
     * Therefore if setting either of these properties remotely, you must send a confirm_xxx message within 10 minutes.
     * If you fail to do so, the radio will assume loss of comms and revert your changes.
     * These messages are optional when changing the local node.
     *
     * Generated from protobuf field <code>bool confirm_set_channel = 66;</code>
     * @return bool
     */
    public function getConfirmSetChannel()
    {
        return $this->readOneof(66);
    }

    public function hasConfirmSetChannel()
    {
        return $this->hasOneof(66);
    }

    /**
     * Setting channels/radio config remotely carries the risk that you might send an invalid config and the radio never talks to your mesh again.
     * Therefore if setting either of these properties remotely, you must send a confirm_xxx message within 10 minutes.
     * If you fail to do so, the radio will assume loss of comms and revert your changes.
     * These messages are optional when changing the local node.
     *
     * Generated from protobuf field <code>bool confirm_set_channel = 66;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirmSetChannel($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(66, $var);

        return $this;
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>bool confirm_set_radio = 67;</code>
     * @return bool
     */
    public function getConfirmSetRadio()
    {
        return $this->readOneof(67);
    }

    public function hasConfirmSetRadio()
    {
        return $this->hasOneof(67);
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>bool confirm_set_radio = 67;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirmSetRadio($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(67, $var);

        return $this;
    }

    /**
     * Tell the node to reboot into the OTA Firmware in this many seconds (or <0 to cancel reboot)
     * Only Implemented for ESP32 Devices. This needs to be issued to send a new main firmware via bluetooth.
     *
     * Generated from protobuf field <code>int32 reboot_ota_seconds = 95;</code>
     * @return int
     */
    public function getRebootOtaSeconds()
    {
        return $this->readOneof(95);
    }

    public function hasRebootOtaSeconds()
    {
        return $this->hasOneof(95);
    }

    /**
     * Tell the node to reboot into the OTA Firmware in this many seconds (or <0 to cancel reboot)
     * Only Implemented for ESP32 Devices. This needs to be issued to send a new main firmware via bluetooth.
     *
     * Generated from protobuf field <code>int32 reboot_ota_seconds = 95;</code>
     * @param int $var
     * @return $this
     */
    public function setRebootOtaSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(95, $var);

        return $this;
    }

    /**
     * This message is only supported for the simulator porduino build.
     * If received the simulator will exit successfully.
     *
     * Generated from protobuf field <code>bool exit_simulator = 96;</code>
     * @return bool
     */
    public function getExitSimulator()
    {
        return $this->readOneof(96);
    }

    public function hasExitSimulator()
    {
        return $this->hasOneof(96);
    }

    /**
     * This message is only supported for the simulator porduino build.
     * If received the simulator will exit successfully.
     *
     * Generated from protobuf field <code>bool exit_simulator = 96;</code>
     * @param bool $var
     * @return $this
     */
    public function setExitSimulator($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(96, $var);

        return $this;
    }

    /**
     * Tell the node to reboot in this many seconds (or <0 to cancel reboot)
     *
     * Generated from protobuf field <code>int32 reboot_seconds = 97;</code>
     * @return int
     */
    public function getRebootSeconds()
    {
        return $this->readOneof(97);
    }

    public function hasRebootSeconds()
    {
        return $this->hasOneof(97);
    }

    /**
     * Tell the node to reboot in this many seconds (or <0 to cancel reboot)
     *
     * Generated from protobuf field <code>int32 reboot_seconds = 97;</code>
     * @param int $var
     * @return $this
     */
    public function setRebootSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(97, $var);

        return $this;
    }

    /**
     * Tell the node to shutdown in this many seconds (or <0 to cancel shutdown)
     *
     * Generated from protobuf field <code>int32 shutdown_seconds = 98;</code>
     * @return int
     */
    public function getShutdownSeconds()
    {
        return $this->readOneof(98);
    }

    public function hasShutdownSeconds()
    {
        return $this->hasOneof(98);
    }

    /**
     * Tell the node to shutdown in this many seconds (or <0 to cancel shutdown)
     *
     * Generated from protobuf field <code>int32 shutdown_seconds = 98;</code>
     * @param int $var
     * @return $this
     */
    public function setShutdownSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(98, $var);

        return $this;
    }

    /**
     * Tell the node to factory reset, all device settings will be returned to factory defaults.
     *
     * Generated from protobuf field <code>int32 factory_reset = 99;</code>
     * @return int
     */
    public function getFactoryReset()
    {
        return $this->readOneof(99);
    }

    public function hasFactoryReset()
    {
        return $this->hasOneof(99);
    }

    /**
     * Tell the node to factory reset, all device settings will be returned to factory defaults.
     *
     * Generated from protobuf field <code>int32 factory_reset = 99;</code>
     * @param int $var
     * @return $this
     */
    public function setFactoryReset($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(99, $var);

        return $this;
    }

    /**
     * Tell the node to reset the nodedb.
     *
     * Generated from protobuf field <code>int32 nodedb_reset = 100;</code>
     * @return int
     */
    public function getNodedbReset()
    {
        return $this->readOneof(100);
    }

    public function hasNodedbReset()
    {
        return $this->hasOneof(100);
    }

    /**
     * Tell the node to reset the nodedb.
     *
     * Generated from protobuf field <code>int32 nodedb_reset = 100;</code>
     * @param int $var
     * @return $this
     */
    public function setNodedbReset($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayloadVariant()
    {
        return $this->whichOneof("payload_variant");
    }

}

