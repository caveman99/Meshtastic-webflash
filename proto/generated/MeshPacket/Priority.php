<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

namespace MeshPacket;

use UnexpectedValueException;

/**
 * The priority of this message for sending.
 * Higher priorities are sent first (when managing the transmit queue).
 * This field is never sent over the air, it is only used internally inside of a local device node.
 * API clients (either on the local node or connected directly to the node)
 * can set this parameter if necessary.
 * (values must be <= 127 to keep protobuf field to one byte in size.
 * Detailed background on this field:
 * I noticed a funny side effect of lora being so slow: Usually when making
 * a protocol there isn’t much need to use message priority to change the order
 * of transmission (because interfaces are fairly fast).
 * But for lora where packets can take a few seconds each, it is very important
 * to make sure that critical packets are sent ASAP.
 * In the case of meshtastic that means we want to send protocol acks as soon as possible
 * (to prevent unneeded retransmissions), we want routing messages to be sent next,
 * then messages marked as reliable and finally ‘background’ packets like periodic position updates.
 * So I bit the bullet and implemented a new (internal - not sent over the air)
 * field in MeshPacket called ‘priority’.
 * And the transmission queue in the router object is now a priority queue.
 *
 * Protobuf type <code>MeshPacket.Priority</code>
 */
class Priority
{
    /**
     * Treated as Priority.DEFAULT
     *
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>MIN = 1;</code>
     */
    const MIN = 1;
    /**
     * Background position updates are sent with very low priority -
     * if the link is super congested they might not go out at all
     *
     * Generated from protobuf enum <code>BACKGROUND = 10;</code>
     */
    const BACKGROUND = 10;
    /**
     * This priority is used for most messages that don't have a priority set
     *
     * Generated from protobuf enum <code>DEFAULT = 64;</code>
     */
    const PBDEFAULT = 64;
    /**
     * If priority is unset but the message is marked as want_ack,
     * assume it is important and use a slightly higher priority
     *
     * Generated from protobuf enum <code>RELIABLE = 70;</code>
     */
    const RELIABLE = 70;
    /**
     * Ack/naks are sent with very high priority to ensure that retransmission
     * stops as soon as possible
     *
     * Generated from protobuf enum <code>ACK = 120;</code>
     */
    const ACK = 120;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>MAX = 127;</code>
     */
    const MAX = 127;

    private static $valueToName = [
        self::PBUNSET => 'UNSET',
        self::MIN => 'MIN',
        self::BACKGROUND => 'BACKGROUND',
        self::PBDEFAULT => 'DEFAULT',
        self::RELIABLE => 'RELIABLE',
        self::ACK => 'ACK',
        self::MAX => 'MAX',
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
class_alias(Priority::class, \MeshPacket_Priority::class);
