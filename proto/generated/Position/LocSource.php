<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

namespace Position;

use UnexpectedValueException;

/**
 * How the location was acquired: manual, onboard GPS, external (EUD) GPS
 *
 * Protobuf type <code>Position.LocSource</code>
 */
class LocSource
{
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>LOC_UNSET = 0;</code>
     */
    const LOC_UNSET = 0;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>LOC_MANUAL = 1;</code>
     */
    const LOC_MANUAL = 1;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>LOC_INTERNAL = 2;</code>
     */
    const LOC_INTERNAL = 2;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>LOC_EXTERNAL = 3;</code>
     */
    const LOC_EXTERNAL = 3;

    private static $valueToName = [
        self::LOC_UNSET => 'LOC_UNSET',
        self::LOC_MANUAL => 'LOC_MANUAL',
        self::LOC_INTERNAL => 'LOC_INTERNAL',
        self::LOC_EXTERNAL => 'LOC_EXTERNAL',
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
class_alias(LocSource::class, \Position_LocSource::class);

