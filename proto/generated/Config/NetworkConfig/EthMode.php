<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

namespace Config\NetworkConfig;

use UnexpectedValueException;

/**
 * Protobuf type <code>Config.NetworkConfig.EthMode</code>
 */
class EthMode
{
    /**
     * obtain ip address via DHCP
     *
     * Generated from protobuf enum <code>DHCP = 0;</code>
     */
    const DHCP = 0;
    /**
     * use static ip address
     *
     * Generated from protobuf enum <code>STATIC = 1;</code>
     */
    const PBSTATIC = 1;

    private static $valueToName = [
        self::DHCP => 'DHCP',
        self::PBSTATIC => 'STATIC',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EthMode::class, \Config_NetworkConfig_EthMode::class);

