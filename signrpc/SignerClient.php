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
     * @return \Grpc\UnaryCall
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
     * This method should be capable of generating the proper input script for both
     * regular p2wkh/p2tr outputs and p2wkh outputs nested within a regular p2sh
     * output.
     *
     * Note that when using this method to sign inputs belonging to the wallet,
     * the only items of the SignDescriptor that need to be populated are pkScript
     * in the TxOut field, the value in that same field, and finally the input
     * index.
     * @param \Signrpc\SignReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * key specified in the key_desc parameter. Either a key locator or a raw
     * public key is expected in the key_desc, if neither is supplied, defaults to
     * the node's identity private key:
     * P_shared = privKeyNode * ephemeralPubkey
     * The resulting shared public key is serialized in the compressed format and
     * hashed with sha256, resulting in the final key length of 256bit.
     * @param \Signrpc\SharedKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeriveSharedKey(\Signrpc\SharedKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/DeriveSharedKey',
        $argument,
        ['\Signrpc\SharedKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * MuSig2CombineKeys (experimental!) is a stateless helper RPC that can be used
     * to calculate the combined MuSig2 public key from a list of all participating
     * signers' public keys. This RPC is completely stateless and deterministic and
     * does not create any signing session. It can be used to determine the Taproot
     * public key that should be put in an on-chain output once all public keys are
     * known. A signing session is only needed later when that output should be
     * _spent_ again.
     *
     * NOTE: The MuSig2 BIP is not final yet and therefore this API must be
     * considered to be HIGHLY EXPERIMENTAL and subject to change in upcoming
     * releases. Backward compatibility is not guaranteed!
     * @param \Signrpc\MuSig2CombineKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MuSig2CombineKeys(\Signrpc\MuSig2CombineKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/MuSig2CombineKeys',
        $argument,
        ['\Signrpc\MuSig2CombineKeysResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * MuSig2CreateSession (experimental!) creates a new MuSig2 signing session
     * using the local key identified by the key locator. The complete list of all
     * public keys of all signing parties must be provided, including the public
     * key of the local signing key. If nonces of other parties are already known,
     * they can be submitted as well to reduce the number of RPC calls necessary
     * later on.
     *
     * NOTE: The MuSig2 BIP is not final yet and therefore this API must be
     * considered to be HIGHLY EXPERIMENTAL and subject to change in upcoming
     * releases. Backward compatibility is not guaranteed!
     * @param \Signrpc\MuSig2SessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MuSig2CreateSession(\Signrpc\MuSig2SessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/MuSig2CreateSession',
        $argument,
        ['\Signrpc\MuSig2SessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * MuSig2RegisterNonces (experimental!) registers one or more public nonces of
     * other signing participants for a session identified by its ID. This RPC can
     * be called multiple times until all nonces are registered.
     *
     * NOTE: The MuSig2 BIP is not final yet and therefore this API must be
     * considered to be HIGHLY EXPERIMENTAL and subject to change in upcoming
     * releases. Backward compatibility is not guaranteed!
     * @param \Signrpc\MuSig2RegisterNoncesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MuSig2RegisterNonces(\Signrpc\MuSig2RegisterNoncesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/MuSig2RegisterNonces',
        $argument,
        ['\Signrpc\MuSig2RegisterNoncesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * MuSig2Sign (experimental!) creates a partial signature using the local
     * signing key that was specified when the session was created. This can only
     * be called when all public nonces of all participants are known and have been
     * registered with the session. If this node isn't responsible for combining
     * all the partial signatures, then the cleanup flag should be set, indicating
     * that the session can be removed from memory once the signature was produced.
     *
     * NOTE: The MuSig2 BIP is not final yet and therefore this API must be
     * considered to be HIGHLY EXPERIMENTAL and subject to change in upcoming
     * releases. Backward compatibility is not guaranteed!
     * @param \Signrpc\MuSig2SignRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MuSig2Sign(\Signrpc\MuSig2SignRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/MuSig2Sign',
        $argument,
        ['\Signrpc\MuSig2SignResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * MuSig2CombineSig (experimental!) combines the given partial signature(s)
     * with the local one, if it already exists. Once a partial signature of all
     * participants is registered, the final signature will be combined and
     * returned.
     *
     * NOTE: The MuSig2 BIP is not final yet and therefore this API must be
     * considered to be HIGHLY EXPERIMENTAL and subject to change in upcoming
     * releases. Backward compatibility is not guaranteed!
     * @param \Signrpc\MuSig2CombineSigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MuSig2CombineSig(\Signrpc\MuSig2CombineSigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/MuSig2CombineSig',
        $argument,
        ['\Signrpc\MuSig2CombineSigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * MuSig2Cleanup (experimental!) allows a caller to clean up a session early in
     * cases where it's obvious that the signing session won't succeed and the
     * resources can be released.
     *
     * NOTE: The MuSig2 BIP is not final yet and therefore this API must be
     * considered to be HIGHLY EXPERIMENTAL and subject to change in upcoming
     * releases. Backward compatibility is not guaranteed!
     * @param \Signrpc\MuSig2CleanupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MuSig2Cleanup(\Signrpc\MuSig2CleanupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/signrpc.Signer/MuSig2Cleanup',
        $argument,
        ['\Signrpc\MuSig2CleanupResponse', 'decode'],
        $metadata, $options);
    }

}
