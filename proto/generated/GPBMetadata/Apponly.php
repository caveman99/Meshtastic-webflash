<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apponly.proto

namespace GPBMetadata;

class Apponly
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel::initOnce();
        \GPBMetadata\Config::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc010a0d6170706f6e6c792e70726f746f1a0c636f6e6669672e70726f" .
            "746f22590a0a4368616e6e656c53657412220a0873657474696e67731801" .
            "2003280b32102e4368616e6e656c53657474696e677312270a0b6c6f7261" .
            "5f636f6e66696718022001280b32122e436f6e6669672e4c6f5261436f6e" .
            "666967424a0a13636f6d2e6765656b7376696c6c652e6d657368420d4170" .
            "704f6e6c7950726f746f7348035a226769746875622e636f6d2f6d657368" .
            "7461737469632f676f2f67656e657261746564620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

