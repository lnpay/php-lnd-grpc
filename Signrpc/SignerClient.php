<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Signrpc;

/**
 * Signer is a service that gives access to the signing functionality of the
 * daemon's wallet.
 */
class SignerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     *
     * SignOutputRaw is a method that can be used to generated a signature for a
     * set of inputs/outputs to a transaction. Each request specifies details
     * concerning how the outputs should be signed, which keys they should be
     * signed with, and also any optional tweaks. The return value is a fixed
     * 64-byte signature (the same format as we use on the wire in Lightning).
     *
     * If we are  unable to sign using the specified keys, then an error will be
     * returned.
     * @param \Signrpc\SignReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SignOutputRaw(\Signrpc\SignReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/SignOutputRaw',
        $argument,
        ['\Signrpc\SignResp', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ComputeInputScript generates a complete InputIndex for the passed
     * transaction with the signature as defined within the passed SignDescriptor.
     * This method should be capable of generating the proper input script for
     * both regular p2wkh output and p2wkh outputs nested within a regular p2sh
     * output.
     *
     * Note that when using this method to sign inputs belonging to the wallet,
     * the only items of the SignDescriptor that need to be populated are pkScript
     * in the TxOut field, the value in that same field, and finally the input
     * index.
     * @param \Signrpc\SignReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ComputeInputScript(\Signrpc\SignReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/ComputeInputScript',
        $argument,
        ['\Signrpc\InputScriptResp', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SignMessage signs a message with the key specified in the key locator. The
     * returned signature is fixed-size LN wire format encoded.
     *
     * The main difference to SignMessage in the main RPC is that a specific key is
     * used to sign the message instead of the node identity private key.
     * @param \Signrpc\SignMessageReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SignMessage(\Signrpc\SignMessageReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/SignMessage',
        $argument,
        ['\Signrpc\SignMessageResp', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * VerifyMessage verifies a signature over a message using the public key
     * provided. The signature must be fixed-size LN wire format encoded.
     *
     * The main difference to VerifyMessage in the main RPC is that the public key
     * used to sign the message does not have to be a node known to the network.
     * @param \Signrpc\VerifyMessageReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function VerifyMessage(\Signrpc\VerifyMessageReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/VerifyMessage',
        $argument,
        ['\Signrpc\VerifyMessageResp', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * DeriveSharedKey returns a shared secret key by performing Diffie-Hellman key
     * derivation between the ephemeral public key in the request and the node's
     * key specified in the key_loc parameter (or the node's identity private key
     * if no key locator is specified):
     * P_shared = privKeyNode * ephemeralPubkey
     * The resulting shared public key is serialized in the compressed format and
     * hashed with sha256, resulting in the final key length of 256bit.
     * @param \Signrpc\SharedKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeriveSharedKey(\Signrpc\SharedKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/DeriveSharedKey',
        $argument,
        ['\Signrpc\SharedKeyResponse', 'decode'],
        $metadata, $options);
    }

}
