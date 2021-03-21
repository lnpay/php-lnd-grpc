<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Walletrpc;

/**
 * WalletKit is a service that gives access to the core functionalities of the
 * daemon's wallet.
 */
class WalletKitClient extends \Grpc\BaseStub {

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
     * ListUnspent returns a list of all utxos spendable by the wallet with a
     * number of confirmations between the specified minimum and maximum.
     * @param \Walletrpc\ListUnspentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListUnspent(\Walletrpc\ListUnspentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/ListUnspent',
        $argument,
        ['\Walletrpc\ListUnspentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * LeaseOutput locks an output to the given ID, preventing it from being
     * available for any future coin selection attempts. The absolute time of the
     * lock's expiration is returned. The expiration of the lock can be extended by
     * successive invocations of this RPC. Outputs can be unlocked before their
     * expiration through `ReleaseOutput`.
     * @param \Walletrpc\LeaseOutputRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LeaseOutput(\Walletrpc\LeaseOutputRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/LeaseOutput',
        $argument,
        ['\Walletrpc\LeaseOutputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ReleaseOutput unlocks an output, allowing it to be available for coin
     * selection if it remains unspent. The ID should match the one used to
     * originally lock the output.
     * @param \Walletrpc\ReleaseOutputRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReleaseOutput(\Walletrpc\ReleaseOutputRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/ReleaseOutput',
        $argument,
        ['\Walletrpc\ReleaseOutputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * DeriveNextKey attempts to derive the *next* key within the key family
     * (account in BIP43) specified. This method should return the next external
     * child within this branch.
     * @param \Walletrpc\KeyReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeriveNextKey(\Walletrpc\KeyReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/DeriveNextKey',
        $argument,
        ['\Signrpc\KeyDescriptor', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * DeriveKey attempts to derive an arbitrary key specified by the passed
     * KeyLocator.
     * @param \Signrpc\KeyLocator $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeriveKey(\Signrpc\KeyLocator $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/DeriveKey',
        $argument,
        ['\Signrpc\KeyDescriptor', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * NextAddr returns the next unused address within the wallet.
     * @param \Walletrpc\AddrRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NextAddr(\Walletrpc\AddrRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/NextAddr',
        $argument,
        ['\Walletrpc\AddrResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * PublishTransaction attempts to publish the passed transaction to the
     * network. Once this returns without an error, the wallet will continually
     * attempt to re-broadcast the transaction on start up, until it enters the
     * chain.
     * @param \Walletrpc\Transaction $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PublishTransaction(\Walletrpc\Transaction $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/PublishTransaction',
        $argument,
        ['\Walletrpc\PublishResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SendOutputs is similar to the existing sendmany call in Bitcoind, and
     * allows the caller to create a transaction that sends to several outputs at
     * once. This is ideal when wanting to batch create a set of transactions.
     * @param \Walletrpc\SendOutputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendOutputs(\Walletrpc\SendOutputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/SendOutputs',
        $argument,
        ['\Walletrpc\SendOutputsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * EstimateFee attempts to query the internal fee estimator of the wallet to
     * determine the fee (in sat/kw) to attach to a transaction in order to
     * achieve the confirmation target.
     * @param \Walletrpc\EstimateFeeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EstimateFee(\Walletrpc\EstimateFeeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/EstimateFee',
        $argument,
        ['\Walletrpc\EstimateFeeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * PendingSweeps returns lists of on-chain outputs that lnd is currently
     * attempting to sweep within its central batching engine. Outputs with similar
     * fee rates are batched together in order to sweep them within a single
     * transaction.
     *
     * NOTE: Some of the fields within PendingSweepsRequest are not guaranteed to
     * remain supported. This is an advanced API that depends on the internals of
     * the UtxoSweeper, so things may change.
     * @param \Walletrpc\PendingSweepsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PendingSweeps(\Walletrpc\PendingSweepsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/PendingSweeps',
        $argument,
        ['\Walletrpc\PendingSweepsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * BumpFee bumps the fee of an arbitrary input within a transaction. This RPC
     * takes a different approach than bitcoind's bumpfee command. lnd has a
     * central batching engine in which inputs with similar fee rates are batched
     * together to save on transaction fees. Due to this, we cannot rely on
     * bumping the fee on a specific transaction, since transactions can change at
     * any point with the addition of new inputs. The list of inputs that
     * currently exist within lnd's central batching engine can be retrieved
     * through the PendingSweeps RPC.
     *
     * When bumping the fee of an input that currently exists within lnd's central
     * batching engine, a higher fee transaction will be created that replaces the
     * lower fee transaction through the Replace-By-Fee (RBF) policy. If it
     *
     * This RPC also serves useful when wanting to perform a Child-Pays-For-Parent
     * (CPFP), where the child transaction pays for its parent's fee. This can be
     * done by specifying an outpoint within the low fee transaction that is under
     * the control of the wallet.
     *
     * The fee preference can be expressed either as a specific fee rate or a delta
     * of blocks in which the output should be swept on-chain within. If a fee
     * preference is not explicitly specified, then an error is returned.
     *
     * Note that this RPC currently doesn't perform any validation checks on the
     * fee preference being provided. For now, the responsibility of ensuring that
     * the new fee preference is sufficient is delegated to the user.
     * @param \Walletrpc\BumpFeeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BumpFee(\Walletrpc\BumpFeeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/BumpFee',
        $argument,
        ['\Walletrpc\BumpFeeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ListSweeps returns a list of the sweep transactions our node has produced.
     * Note that these sweeps may not be confirmed yet, as we record sweeps on
     * broadcast, not confirmation.
     * @param \Walletrpc\ListSweepsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSweeps(\Walletrpc\ListSweepsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/ListSweeps',
        $argument,
        ['\Walletrpc\ListSweepsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * LabelTransaction adds a label to a transaction. If the transaction already
     * has a label the call will fail unless the overwrite bool is set. This will
     * overwrite the exiting transaction label. Labels must not be empty, and
     * cannot exceed 500 characters.
     * @param \Walletrpc\LabelTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LabelTransaction(\Walletrpc\LabelTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/LabelTransaction',
        $argument,
        ['\Walletrpc\LabelTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * FundPsbt creates a fully populated PSBT that contains enough inputs to fund
     * the outputs specified in the template. There are two ways of specifying a
     * template: Either by passing in a PSBT with at least one output declared or
     * by passing in a raw TxTemplate message.
     *
     * If there are no inputs specified in the template, coin selection is
     * performed automatically. If the template does contain any inputs, it is
     * assumed that full coin selection happened externally and no additional
     * inputs are added. If the specified inputs aren't enough to fund the outputs
     * with the given fee rate, an error is returned.
     *
     * After either selecting or verifying the inputs, all input UTXOs are locked
     * with an internal app ID.
     *
     * NOTE: If this method returns without an error, it is the caller's
     * responsibility to either spend the locked UTXOs (by finalizing and then
     * publishing the transaction) or to unlock/release the locked UTXOs in case of
     * an error on the caller's side.
     * @param \Walletrpc\FundPsbtRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FundPsbt(\Walletrpc\FundPsbtRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/FundPsbt',
        $argument,
        ['\Walletrpc\FundPsbtResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * FinalizePsbt expects a partial transaction with all inputs and outputs fully
     * declared and tries to sign all inputs that belong to the wallet. Lnd must be
     * the last signer of the transaction. That means, if there are any unsigned
     * non-witness inputs or inputs without UTXO information attached or inputs
     * without witness data that do not belong to lnd's wallet, this method will
     * fail. If no error is returned, the PSBT is ready to be extracted and the
     * final TX within to be broadcast.
     *
     * NOTE: This method does NOT publish the transaction once finalized. It is the
     * caller's responsibility to either publish the transaction on success or
     * unlock/release any locked UTXOs in case of an error in this method.
     * @param \Walletrpc\FinalizePsbtRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FinalizePsbt(\Walletrpc\FinalizePsbtRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletKit/FinalizePsbt',
        $argument,
        ['\Walletrpc\FinalizePsbtResponse', 'decode'],
        $metadata, $options);
    }

}
