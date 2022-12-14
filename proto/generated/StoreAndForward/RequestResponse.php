<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: storeforward.proto

namespace StoreAndForward;

use UnexpectedValueException;

/**
 * 1   - 99  = From Router
 * 101 - 199 = From Client
 *
 * Protobuf type <code>StoreAndForward.RequestResponse</code>
 */
class RequestResponse
{
    /**
     * Unset/unused
     *
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * Router is an in error state.
     *
     * Generated from protobuf enum <code>ROUTER_ERROR = 1;</code>
     */
    const ROUTER_ERROR = 1;
    /**
     * Router heartbeat
     *
     * Generated from protobuf enum <code>ROUTER_HEARTBEAT = 2;</code>
     */
    const ROUTER_HEARTBEAT = 2;
    /**
     * Router has requested the client respond. This can work as a
     * "are you there" message.
     *
     * Generated from protobuf enum <code>ROUTER_PING = 3;</code>
     */
    const ROUTER_PING = 3;
    /**
     * The response to a "Ping"
     *
     * Generated from protobuf enum <code>ROUTER_PONG = 4;</code>
     */
    const ROUTER_PONG = 4;
    /**
     * Router is currently busy. Please try again later.
     *
     * Generated from protobuf enum <code>ROUTER_BUSY = 5;</code>
     */
    const ROUTER_BUSY = 5;
    /**
     * Router is responding to a request for history.
     *
     * Generated from protobuf enum <code>ROUTER_HISTORY = 6;</code>
     */
    const ROUTER_HISTORY = 6;
    /**
     * Client is an in error state.
     *
     * Generated from protobuf enum <code>CLIENT_ERROR = 101;</code>
     */
    const CLIENT_ERROR = 101;
    /**
     * Client has requested a replay from the router.
     *
     * Generated from protobuf enum <code>CLIENT_HISTORY = 102;</code>
     */
    const CLIENT_HISTORY = 102;
    /**
     * Client has requested stats from the router.
     *
     * Generated from protobuf enum <code>CLIENT_STATS = 103;</code>
     */
    const CLIENT_STATS = 103;
    /**
     * Client has requested the router respond. This can work as a
     * "are you there" message.
     *
     * Generated from protobuf enum <code>CLIENT_PING = 104;</code>
     */
    const CLIENT_PING = 104;
    /**
     * The response to a "Ping"
     *
     * Generated from protobuf enum <code>CLIENT_PONG = 105;</code>
     */
    const CLIENT_PONG = 105;
    /**
     * Client has requested that the router abort processing the client's request
     *
     * Generated from protobuf enum <code>CLIENT_ABORT = 106;</code>
     */
    const CLIENT_ABORT = 106;

    private static $valueToName = [
        self::PBUNSET => 'UNSET',
        self::ROUTER_ERROR => 'ROUTER_ERROR',
        self::ROUTER_HEARTBEAT => 'ROUTER_HEARTBEAT',
        self::ROUTER_PING => 'ROUTER_PING',
        self::ROUTER_PONG => 'ROUTER_PONG',
        self::ROUTER_BUSY => 'ROUTER_BUSY',
        self::ROUTER_HISTORY => 'ROUTER_HISTORY',
        self::CLIENT_ERROR => 'CLIENT_ERROR',
        self::CLIENT_HISTORY => 'CLIENT_HISTORY',
        self::CLIENT_STATS => 'CLIENT_STATS',
        self::CLIENT_PING => 'CLIENT_PING',
        self::CLIENT_PONG => 'CLIENT_PONG',
        self::CLIENT_ABORT => 'CLIENT_ABORT',
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
class_alias(RequestResponse::class, \StoreAndForward_RequestResponse::class);

