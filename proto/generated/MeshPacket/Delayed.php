<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

namespace MeshPacket;

use UnexpectedValueException;

/**
 * Identify if this is a delayed packet
 *
 * Protobuf type <code>MeshPacket.Delayed</code>
 */
class Delayed
{
    /**
     * If unset, the message is being sent in real time.
     *
     * Generated from protobuf enum <code>NO_DELAY = 0;</code>
     */
    const NO_DELAY = 0;
    /**
     * The message is delayed and was originally a broadcast
     *
     * Generated from protobuf enum <code>DELAYED_BROADCAST = 1;</code>
     */
    const DELAYED_BROADCAST = 1;
    /**
     * The message is delayed and was originally a direct message
     *
     * Generated from protobuf enum <code>DELAYED_DIRECT = 2;</code>
     */
    const DELAYED_DIRECT = 2;

    private static $valueToName = [
        self::NO_DELAY => 'NO_DELAY',
        self::DELAYED_BROADCAST => 'DELAYED_BROADCAST',
        self::DELAYED_DIRECT => 'DELAYED_DIRECT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Delayed::class, \MeshPacket_Delayed::class);
