<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: neutrino.proto

namespace Neutrinorpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>neutrinorpc.GetBlockResponse</code>
 */
class GetBlockResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The block hash (same as provided).
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     */
    protected $hash = '';
    /**
     * The number of confirmations.
     *
     * Generated from protobuf field <code>int64 confirmations = 2;</code>
     */
    protected $confirmations = 0;
    /**
     * The block size excluding witness data.
     *
     * Generated from protobuf field <code>int64 stripped_size = 3;</code>
     */
    protected $stripped_size = 0;
    /**
     * The block size (bytes).
     *
     * Generated from protobuf field <code>int64 size = 4;</code>
     */
    protected $size = 0;
    /**
     * The block weight as defined in BIP 141.
     *
     * Generated from protobuf field <code>int64 weight = 5;</code>
     */
    protected $weight = 0;
    /**
     * The block height or index.
     *
     * Generated from protobuf field <code>int32 height = 6;</code>
     */
    protected $height = 0;
    /**
     * The block version.
     *
     * Generated from protobuf field <code>int32 version = 7;</code>
     */
    protected $version = 0;
    /**
     * The block version.
     *
     * Generated from protobuf field <code>string version_hex = 8;</code>
     */
    protected $version_hex = '';
    /**
     * The merkle root.
     *
     * Generated from protobuf field <code>string merkleroot = 9;</code>
     */
    protected $merkleroot = '';
    /**
     * List of transaction ids.
     *
     * Generated from protobuf field <code>repeated string tx = 10;</code>
     */
    private $tx;
    /**
     * The block time in seconds since epoch (Jan 1 1970 GMT).
     *
     * Generated from protobuf field <code>int64 time = 11;</code>
     */
    protected $time = 0;
    /**
     * The nonce.
     *
     * Generated from protobuf field <code>uint32 nonce = 12;</code>
     */
    protected $nonce = 0;
    /**
     * The bits in hex notation.
     *
     * Generated from protobuf field <code>string bits = 13;</code>
     */
    protected $bits = '';
    /**
     * The number of transactions in the block.
     *
     * Generated from protobuf field <code>int32 ntx = 14;</code>
     */
    protected $ntx = 0;
    /**
     * The hash of the previous block.
     *
     * Generated from protobuf field <code>string previous_block_hash = 15;</code>
     */
    protected $previous_block_hash = '';
    /**
     * The raw hex of the block.
     *
     * Generated from protobuf field <code>bytes raw_hex = 16;</code>
     */
    protected $raw_hex = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *           The block hash (same as provided).
     *     @type int|string $confirmations
     *           The number of confirmations.
     *     @type int|string $stripped_size
     *           The block size excluding witness data.
     *     @type int|string $size
     *           The block size (bytes).
     *     @type int|string $weight
     *           The block weight as defined in BIP 141.
     *     @type int $height
     *           The block height or index.
     *     @type int $version
     *           The block version.
     *     @type string $version_hex
     *           The block version.
     *     @type string $merkleroot
     *           The merkle root.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tx
     *           List of transaction ids.
     *     @type int|string $time
     *           The block time in seconds since epoch (Jan 1 1970 GMT).
     *     @type int $nonce
     *           The nonce.
     *     @type string $bits
     *           The bits in hex notation.
     *     @type int $ntx
     *           The number of transactions in the block.
     *     @type string $previous_block_hash
     *           The hash of the previous block.
     *     @type string $raw_hex
     *           The raw hex of the block.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Neutrino::initOnce();
        parent::__construct($data);
    }

    /**
     * The block hash (same as provided).
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The block hash (same as provided).
     *
     * Generated from protobuf field <code>string hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

    /**
     * The number of confirmations.
     *
     * Generated from protobuf field <code>int64 confirmations = 2;</code>
     * @return int|string
     */
    public function getConfirmations()
    {
        return $this->confirmations;
    }

    /**
     * The number of confirmations.
     *
     * Generated from protobuf field <code>int64 confirmations = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConfirmations($var)
    {
        GPBUtil::checkInt64($var);
        $this->confirmations = $var;

        return $this;
    }

    /**
     * The block size excluding witness data.
     *
     * Generated from protobuf field <code>int64 stripped_size = 3;</code>
     * @return int|string
     */
    public function getStrippedSize()
    {
        return $this->stripped_size;
    }

    /**
     * The block size excluding witness data.
     *
     * Generated from protobuf field <code>int64 stripped_size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStrippedSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->stripped_size = $var;

        return $this;
    }

    /**
     * The block size (bytes).
     *
     * Generated from protobuf field <code>int64 size = 4;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The block size (bytes).
     *
     * Generated from protobuf field <code>int64 size = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * The block weight as defined in BIP 141.
     *
     * Generated from protobuf field <code>int64 weight = 5;</code>
     * @return int|string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * The block weight as defined in BIP 141.
     *
     * Generated from protobuf field <code>int64 weight = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * The block height or index.
     *
     * Generated from protobuf field <code>int32 height = 6;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * The block height or index.
     *
     * Generated from protobuf field <code>int32 height = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * The block version.
     *
     * Generated from protobuf field <code>int32 version = 7;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The block version.
     *
     * Generated from protobuf field <code>int32 version = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * The block version.
     *
     * Generated from protobuf field <code>string version_hex = 8;</code>
     * @return string
     */
    public function getVersionHex()
    {
        return $this->version_hex;
    }

    /**
     * The block version.
     *
     * Generated from protobuf field <code>string version_hex = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setVersionHex($var)
    {
        GPBUtil::checkString($var, True);
        $this->version_hex = $var;

        return $this;
    }

    /**
     * The merkle root.
     *
     * Generated from protobuf field <code>string merkleroot = 9;</code>
     * @return string
     */
    public function getMerkleroot()
    {
        return $this->merkleroot;
    }

    /**
     * The merkle root.
     *
     * Generated from protobuf field <code>string merkleroot = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setMerkleroot($var)
    {
        GPBUtil::checkString($var, True);
        $this->merkleroot = $var;

        return $this;
    }

    /**
     * List of transaction ids.
     *
     * Generated from protobuf field <code>repeated string tx = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTx()
    {
        return $this->tx;
    }

    /**
     * List of transaction ids.
     *
     * Generated from protobuf field <code>repeated string tx = 10;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTx($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tx = $arr;

        return $this;
    }

    /**
     * The block time in seconds since epoch (Jan 1 1970 GMT).
     *
     * Generated from protobuf field <code>int64 time = 11;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * The block time in seconds since epoch (Jan 1 1970 GMT).
     *
     * Generated from protobuf field <code>int64 time = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

    /**
     * The nonce.
     *
     * Generated from protobuf field <code>uint32 nonce = 12;</code>
     * @return int
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * The nonce.
     *
     * Generated from protobuf field <code>uint32 nonce = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkUint32($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     * The bits in hex notation.
     *
     * Generated from protobuf field <code>string bits = 13;</code>
     * @return string
     */
    public function getBits()
    {
        return $this->bits;
    }

    /**
     * The bits in hex notation.
     *
     * Generated from protobuf field <code>string bits = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setBits($var)
    {
        GPBUtil::checkString($var, True);
        $this->bits = $var;

        return $this;
    }

    /**
     * The number of transactions in the block.
     *
     * Generated from protobuf field <code>int32 ntx = 14;</code>
     * @return int
     */
    public function getNtx()
    {
        return $this->ntx;
    }

    /**
     * The number of transactions in the block.
     *
     * Generated from protobuf field <code>int32 ntx = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setNtx($var)
    {
        GPBUtil::checkInt32($var);
        $this->ntx = $var;

        return $this;
    }

    /**
     * The hash of the previous block.
     *
     * Generated from protobuf field <code>string previous_block_hash = 15;</code>
     * @return string
     */
    public function getPreviousBlockHash()
    {
        return $this->previous_block_hash;
    }

    /**
     * The hash of the previous block.
     *
     * Generated from protobuf field <code>string previous_block_hash = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setPreviousBlockHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->previous_block_hash = $var;

        return $this;
    }

    /**
     * The raw hex of the block.
     *
     * Generated from protobuf field <code>bytes raw_hex = 16;</code>
     * @return string
     */
    public function getRawHex()
    {
        return $this->raw_hex;
    }

    /**
     * The raw hex of the block.
     *
     * Generated from protobuf field <code>bytes raw_hex = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setRawHex($var)
    {
        GPBUtil::checkString($var, False);
        $this->raw_hex = $var;

        return $this;
    }

}
