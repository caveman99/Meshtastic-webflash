<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * A packet envelope sent/received over the mesh
 * only payload_variant is sent in the payload portion of the LORA packet.
 * The other fields are either not sent at all, or sent in the special 16 byte LORA header.
 *
 * Generated from protobuf message <code>MeshPacket</code>
 */
class MeshPacket extends \Google\Protobuf\Internal\Message
{
    /**
     *
     * The sending node number.
     * Note: Our crypto implementation uses this field as well.
     * See [crypto](/docs/developers/firmware/encryption) for details.
     * FIXME - really should be fixed32 instead, this encoding only hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 from = 1;</code>
     */
    private $from = 0;
    /**
     *
     * The (immediatSee Priority description for more details.y should be fixed32 instead, this encoding only
     * hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 to = 2;</code>
     */
    private $to = 0;
    /**
     *
     * (Usually) If set, this indicates the index in the secondary_channels table that this packet was sent/received on.
     * If unset, packet was on the primary channel.
     * A particular node might know only a subset of channels in use on the mesh.
     * Therefore channel_index is inherently a local concept and meaningless to send between nodes.
     * Very briefly, while sending and receiving deep inside the device Router code, this field instead
     * contains the 'channel hash' instead of the index.
     * This 'trick' is only used while the payload_variant is an 'encrypted'.
     *
     * Generated from protobuf field <code>uint32 channel = 3;</code>
     */
    private $channel = 0;
    /**
     *
     * A unique ID for this packet.
     * Always 0 for no-ack packets or non broadcast packets (and therefore take zero bytes of space).
     * Otherwise a unique ID for this packet, useful for flooding algorithms.
     * ID only needs to be unique on a _per sender_ basis, and it only
     * needs to be unique for a few minutes (long enough to last for the length of
     * any ACK or the completion of a mesh broadcast flood).
     * Note: Our crypto implementation uses this id as well.
     * See [crypto](/docs/developers/firmware/encryption) for details.
     * FIXME - really should be fixed32 instead, this encoding only
     * hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 id = 6;</code>
     */
    private $id = 0;
    /**
     *
     * The time this message was received by the esp32 (secs since 1970).
     * Note: this field is _never_ sent on the radio link itself (to save space) Times
     * are typically not sent over the mesh, but they will be added to any Packet
     * (chain of SubPacket) sent to the phone (so the phone can know exact time of reception)
     *
     * Generated from protobuf field <code>fixed32 rx_time = 7;</code>
     */
    private $rx_time = 0;
    /**
     *
     * *Never* sent over the radio links.
     * Set during reception to indicate the SNR of this packet.
     * Used to collect statistics on current link quality.
     *
     * Generated from protobuf field <code>float rx_snr = 8;</code>
     */
    private $rx_snr = 0.0;
    /**
     *
     * If unset treated as zero (no forwarding, send to adjacent nodes only)
     * if 1, allow hopping through one node, etc...
     * For our usecase real world topologies probably have a max of about 3.
     * This field is normally placed into a few of bits in the header.
     *
     * Generated from protobuf field <code>uint32 hop_limit = 9;</code>
     */
    private $hop_limit = 0;
    /**
     *
     * This packet is being sent as a reliable message, we would prefer it to arrive at the destination.
     * We would like to receive a ack packet in response.
     * Broadcasts messages treat this flag specially: Since acks for broadcasts would
     * rapidly flood the channel, the normal ack behavior is suppressed.
     * Instead, the original sender listens to see if at least one node is rebroadcasting this packet (because naive flooding algorithm).
     * If it hears that the odds (given typical LoRa topologies) the odds are very high that every node should eventually receive the message.
     * So FloodingRouter.cpp generates an implicit ack which is delivered to the original sender.
     * If after some time we don't hear anyone rebroadcast our packet, we will timeout and retransmit, using the regular resend logic.
     * Note: This flag is normally sent in a flag bit in the header when sent over the wire
     *
     * Generated from protobuf field <code>bool want_ack = 10;</code>
     */
    private $want_ack = false;
    /**
     *
     * The priority of this message for sending.
     * See MeshPacket.Priority description for more details.
     *
     * Generated from protobuf field <code>.MeshPacket.Priority priority = 11;</code>
     */
    private $priority = 0;
    /**
     *
     * rssi of received packet. Only sent to phone for dispay purposes.
     *
     * Generated from protobuf field <code>int32 rx_rssi = 12;</code>
     */
    private $rx_rssi = 0;
    /**
     *
     * Describe if this message is delayed
     *
     * Generated from protobuf field <code>.MeshPacket.Delayed delayed = 13;</code>
     */
    private $delayed = 0;
    protected $payload_variant;

    public function __construct() {
        \GPBMetadata\Mesh::initOnce();
        parent::__construct();
    }

    /**
     *
     * The sending node number.
     * Note: Our crypto implementation uses this field as well.
     * See [crypto](/docs/developers/firmware/encryption) for details.
     * FIXME - really should be fixed32 instead, this encoding only hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 from = 1;</code>
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *
     * The sending node number.
     * Note: Our crypto implementation uses this field as well.
     * See [crypto](/docs/developers/firmware/encryption) for details.
     * FIXME - really should be fixed32 instead, this encoding only hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 from = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkUint32($var);
        $this->from = $var;

        return $this;
    }

    /**
     *
     * The (immediatSee Priority description for more details.y should be fixed32 instead, this encoding only
     * hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 to = 2;</code>
     * @return int
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     *
     * The (immediatSee Priority description for more details.y should be fixed32 instead, this encoding only
     * hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 to = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkUint32($var);
        $this->to = $var;

        return $this;
    }

    /**
     *
     * (Usually) If set, this indicates the index in the secondary_channels table that this packet was sent/received on.
     * If unset, packet was on the primary channel.
     * A particular node might know only a subset of channels in use on the mesh.
     * Therefore channel_index is inherently a local concept and meaningless to send between nodes.
     * Very briefly, while sending and receiving deep inside the device Router code, this field instead
     * contains the 'channel hash' instead of the index.
     * This 'trick' is only used while the payload_variant is an 'encrypted'.
     *
     * Generated from protobuf field <code>uint32 channel = 3;</code>
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     *
     * (Usually) If set, this indicates the index in the secondary_channels table that this packet was sent/received on.
     * If unset, packet was on the primary channel.
     * A particular node might know only a subset of channels in use on the mesh.
     * Therefore channel_index is inherently a local concept and meaningless to send between nodes.
     * Very briefly, while sending and receiving deep inside the device Router code, this field instead
     * contains the 'channel hash' instead of the index.
     * This 'trick' is only used while the payload_variant is an 'encrypted'.
     *
     * Generated from protobuf field <code>uint32 channel = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkUint32($var);
        $this->channel = $var;

        return $this;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Data decoded = 4;</code>
     * @return \Data
     */
    public function getDecoded()
    {
        return $this->readOneof(4);
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>.Data decoded = 4;</code>
     * @param \Data $var
     * @return $this
     */
    public function setDecoded($var)
    {
        GPBUtil::checkMessage($var, \Data::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>bytes encrypted = 5;</code>
     * @return string
     */
    public function getEncrypted()
    {
        return $this->readOneof(5);
    }

    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf field <code>bytes encrypted = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEncrypted($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     *
     * A unique ID for this packet.
     * Always 0 for no-ack packets or non broadcast packets (and therefore take zero bytes of space).
     * Otherwise a unique ID for this packet, useful for flooding algorithms.
     * ID only needs to be unique on a _per sender_ basis, and it only
     * needs to be unique for a few minutes (long enough to last for the length of
     * any ACK or the completion of a mesh broadcast flood).
     * Note: Our crypto implementation uses this id as well.
     * See [crypto](/docs/developers/firmware/encryption) for details.
     * FIXME - really should be fixed32 instead, this encoding only
     * hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 id = 6;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * A unique ID for this packet.
     * Always 0 for no-ack packets or non broadcast packets (and therefore take zero bytes of space).
     * Otherwise a unique ID for this packet, useful for flooding algorithms.
     * ID only needs to be unique on a _per sender_ basis, and it only
     * needs to be unique for a few minutes (long enough to last for the length of
     * any ACK or the completion of a mesh broadcast flood).
     * Note: Our crypto implementation uses this id as well.
     * See [crypto](/docs/developers/firmware/encryption) for details.
     * FIXME - really should be fixed32 instead, this encoding only
     * hurts the ble link though.
     *
     * Generated from protobuf field <code>fixed32 id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     *
     * The time this message was received by the esp32 (secs since 1970).
     * Note: this field is _never_ sent on the radio link itself (to save space) Times
     * are typically not sent over the mesh, but they will be added to any Packet
     * (chain of SubPacket) sent to the phone (so the phone can know exact time of reception)
     *
     * Generated from protobuf field <code>fixed32 rx_time = 7;</code>
     * @return int
     */
    public function getRxTime()
    {
        return $this->rx_time;
    }

    /**
     *
     * The time this message was received by the esp32 (secs since 1970).
     * Note: this field is _never_ sent on the radio link itself (to save space) Times
     * are typically not sent over the mesh, but they will be added to any Packet
     * (chain of SubPacket) sent to the phone (so the phone can know exact time of reception)
     *
     * Generated from protobuf field <code>fixed32 rx_time = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRxTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->rx_time = $var;

        return $this;
    }

    /**
     *
     * *Never* sent over the radio links.
     * Set during reception to indicate the SNR of this packet.
     * Used to collect statistics on current link quality.
     *
     * Generated from protobuf field <code>float rx_snr = 8;</code>
     * @return float
     */
    public function getRxSnr()
    {
        return $this->rx_snr;
    }

    /**
     *
     * *Never* sent over the radio links.
     * Set during reception to indicate the SNR of this packet.
     * Used to collect statistics on current link quality.
     *
     * Generated from protobuf field <code>float rx_snr = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setRxSnr($var)
    {
        GPBUtil::checkFloat($var);
        $this->rx_snr = $var;

        return $this;
    }

    /**
     *
     * If unset treated as zero (no forwarding, send to adjacent nodes only)
     * if 1, allow hopping through one node, etc...
     * For our usecase real world topologies probably have a max of about 3.
     * This field is normally placed into a few of bits in the header.
     *
     * Generated from protobuf field <code>uint32 hop_limit = 9;</code>
     * @return int
     */
    public function getHopLimit()
    {
        return $this->hop_limit;
    }

    /**
     *
     * If unset treated as zero (no forwarding, send to adjacent nodes only)
     * if 1, allow hopping through one node, etc...
     * For our usecase real world topologies probably have a max of about 3.
     * This field is normally placed into a few of bits in the header.
     *
     * Generated from protobuf field <code>uint32 hop_limit = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setHopLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->hop_limit = $var;

        return $this;
    }

    /**
     *
     * This packet is being sent as a reliable message, we would prefer it to arrive at the destination.
     * We would like to receive a ack packet in response.
     * Broadcasts messages treat this flag specially: Since acks for broadcasts would
     * rapidly flood the channel, the normal ack behavior is suppressed.
     * Instead, the original sender listens to see if at least one node is rebroadcasting this packet (because naive flooding algorithm).
     * If it hears that the odds (given typical LoRa topologies) the odds are very high that every node should eventually receive the message.
     * So FloodingRouter.cpp generates an implicit ack which is delivered to the original sender.
     * If after some time we don't hear anyone rebroadcast our packet, we will timeout and retransmit, using the regular resend logic.
     * Note: This flag is normally sent in a flag bit in the header when sent over the wire
     *
     * Generated from protobuf field <code>bool want_ack = 10;</code>
     * @return bool
     */
    public function getWantAck()
    {
        return $this->want_ack;
    }

    /**
     *
     * This packet is being sent as a reliable message, we would prefer it to arrive at the destination.
     * We would like to receive a ack packet in response.
     * Broadcasts messages treat this flag specially: Since acks for broadcasts would
     * rapidly flood the channel, the normal ack behavior is suppressed.
     * Instead, the original sender listens to see if at least one node is rebroadcasting this packet (because naive flooding algorithm).
     * If it hears that the odds (given typical LoRa topologies) the odds are very high that every node should eventually receive the message.
     * So FloodingRouter.cpp generates an implicit ack which is delivered to the original sender.
     * If after some time we don't hear anyone rebroadcast our packet, we will timeout and retransmit, using the regular resend logic.
     * Note: This flag is normally sent in a flag bit in the header when sent over the wire
     *
     * Generated from protobuf field <code>bool want_ack = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setWantAck($var)
    {
        GPBUtil::checkBool($var);
        $this->want_ack = $var;

        return $this;
    }

    /**
     *
     * The priority of this message for sending.
     * See MeshPacket.Priority description for more details.
     *
     * Generated from protobuf field <code>.MeshPacket.Priority priority = 11;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     *
     * The priority of this message for sending.
     * See MeshPacket.Priority description for more details.
     *
     * Generated from protobuf field <code>.MeshPacket.Priority priority = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkEnum($var, \MeshPacket_Priority::class);
        $this->priority = $var;

        return $this;
    }

    /**
     *
     * rssi of received packet. Only sent to phone for dispay purposes.
     *
     * Generated from protobuf field <code>int32 rx_rssi = 12;</code>
     * @return int
     */
    public function getRxRssi()
    {
        return $this->rx_rssi;
    }

    /**
     *
     * rssi of received packet. Only sent to phone for dispay purposes.
     *
     * Generated from protobuf field <code>int32 rx_rssi = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRxRssi($var)
    {
        GPBUtil::checkInt32($var);
        $this->rx_rssi = $var;

        return $this;
    }

    /**
     *
     * Describe if this message is delayed
     *
     * Generated from protobuf field <code>.MeshPacket.Delayed delayed = 13;</code>
     * @return int
     */
    public function getDelayed()
    {
        return $this->delayed;
    }

    /**
     *
     * Describe if this message is delayed
     *
     * Generated from protobuf field <code>.MeshPacket.Delayed delayed = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setDelayed($var)
    {
        GPBUtil::checkEnum($var, \MeshPacket_Delayed::class);
        $this->delayed = $var;

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

