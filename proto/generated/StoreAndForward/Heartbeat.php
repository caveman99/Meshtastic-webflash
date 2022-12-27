<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: storeforward.proto

namespace StoreAndForward;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TODO: REPLACE
 *
 * Generated from protobuf message <code>StoreAndForward.Heartbeat</code>
 */
class Heartbeat extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of that will be sent to the client
     *
     * Generated from protobuf field <code>uint32 period = 1;</code>
     */
    protected $period = 0;
    /**
     * If set, this is not the primary Store & Forward router on the mesh
     *
     * Generated from protobuf field <code>uint32 secondary = 2;</code>
     */
    protected $secondary = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $period
     *           Number of that will be sent to the client
     *     @type int $secondary
     *           If set, this is not the primary Store & Forward router on the mesh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Storeforward::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of that will be sent to the client
     *
     * Generated from protobuf field <code>uint32 period = 1;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Number of that will be sent to the client
     *
     * Generated from protobuf field <code>uint32 period = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkUint32($var);
        $this->period = $var;

        return $this;
    }

    /**
     * If set, this is not the primary Store & Forward router on the mesh
     *
     * Generated from protobuf field <code>uint32 secondary = 2;</code>
     * @return int
     */
    public function getSecondary()
    {
        return $this->secondary;
    }

    /**
     * If set, this is not the primary Store & Forward router on the mesh
     *
     * Generated from protobuf field <code>uint32 secondary = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSecondary($var)
    {
        GPBUtil::checkUint32($var);
        $this->secondary = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Heartbeat::class, \StoreAndForward_Heartbeat::class);

