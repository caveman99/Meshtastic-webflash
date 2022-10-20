<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: channel.proto

/**
 *
 * How this channel is being used (or not).
 * Note: this field is an enum to give us options for the future.
 * In particular, someday we might make a 'SCANNING' option.
 * SCANNING channels could have different frequencies and the radio would
 * occasionally check that freq to see if anything is being transmitted.
 * For devices that have multiple physical radios attached, we could keep multiple PRIMARY/SCANNING channels active at once to allow
 * cross band routing as needed.
 * If a device has only a single radio (the common case) only one channel can be PRIMARY at a time
 * (but any number of SECONDARY channels can't be sent received on that common frequency)
 *
 * Protobuf enum <code>Channel\Role</code>
 */
class Channel_Role
{
    /**
     *
     * This channel is not in use right now
     *
     * Generated from protobuf enum <code>DISABLED = 0;</code>
     */
    const DISABLED = 0;
    /**
     *
     * This channel is used to set the frequency for the radio - all other enabled channels must be SECONDARY
     *
     * Generated from protobuf enum <code>PRIMARY = 1;</code>
     */
    const PRIMARY = 1;
    /**
     *
     * Secondary channels are only used for encryption/decryption/authentication purposes.
     * Their radio settings (freq etc) are ignored, only psk is used.
     *
     * Generated from protobuf enum <code>SECONDARY = 2;</code>
     */
    const SECONDARY = 2;
}

