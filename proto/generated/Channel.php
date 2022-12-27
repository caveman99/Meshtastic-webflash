<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: channel.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pair of a channel number, mode and the (sharable) settings for that channel
 *
 * Generated from protobuf message <code>Channel</code>
 */
class Channel extends \Google\Protobuf\Internal\Message
{
    /**
     * The index of this channel in the channel table (from 0 to MAX_NUM_CHANNELS-1)
     * (Someday - not currently implemented) An index of -1 could be used to mean "set by name",
     * in which case the target node will find and set the channel by settings.name.
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     */
    protected $index = 0;
    /**
     * The new settings, or NULL to disable that channel
     *
     * Generated from protobuf field <code>.ChannelSettings settings = 2;</code>
     */
    protected $settings = null;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Channel.Role role = 3;</code>
     */
    protected $role = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *           The index of this channel in the channel table (from 0 to MAX_NUM_CHANNELS-1)
     *           (Someday - not currently implemented) An index of -1 could be used to mean "set by name",
     *           in which case the target node will find and set the channel by settings.name.
     *     @type \ChannelSettings $settings
     *           The new settings, or NULL to disable that channel
     *     @type int $role
     *           TODO: REPLACE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel::initOnce();
        parent::__construct($data);
    }

    /**
     * The index of this channel in the channel table (from 0 to MAX_NUM_CHANNELS-1)
     * (Someday - not currently implemented) An index of -1 could be used to mean "set by name",
     * in which case the target node will find and set the channel by settings.name.
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * The index of this channel in the channel table (from 0 to MAX_NUM_CHANNELS-1)
     * (Someday - not currently implemented) An index of -1 could be used to mean "set by name",
     * in which case the target node will find and set the channel by settings.name.
     *
     * Generated from protobuf field <code>int32 index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * The new settings, or NULL to disable that channel
     *
     * Generated from protobuf field <code>.ChannelSettings settings = 2;</code>
     * @return \ChannelSettings|null
     */
    public function getSettings()
    {
        return $this->settings;
    }

    public function hasSettings()
    {
        return isset($this->settings);
    }

    public function clearSettings()
    {
        unset($this->settings);
    }

    /**
     * The new settings, or NULL to disable that channel
     *
     * Generated from protobuf field <code>.ChannelSettings settings = 2;</code>
     * @param \ChannelSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \ChannelSettings::class);
        $this->settings = $var;

        return $this;
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Channel.Role role = 3;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Channel.Role role = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Channel\Role::class);
        $this->role = $var;

        return $this;
    }

}

