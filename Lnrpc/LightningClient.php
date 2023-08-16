<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lnrpc;

/**
 *
 * Comments in this file will be directly parsed into the API
 * Documentation as descriptions of the associated method, message, or field.
 * These descriptions should go right above the definition of the object, and
 * can be in either block or // comment format.
 *
 * An RPC method can be matched to an lncli command by placing a line in the
 * beginning of the description in exactly the following format:
 * lncli: `methodname`
 *
 * Failure to specify the exact name of the command will cause documentation
 * generation to fail.
 *
 * More information on how exactly the gRPC documentation is generated from
 * this proto file can be found here:
 * https://github.com/lightninglabs/lightning-api
 *
 * Lightning is the main RPC server of the daemon.
 */
class LightningClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * lncli: `walletbalance`
     * WalletBalance returns total unspent outputs(confirmed and unconfirmed), all
     * confirmed unspent outputs and all unconfirmed unspent outputs under control
     * of the wallet.
     * @param \Lnrpc\WalletBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WalletBalance(\Lnrpc\WalletBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/WalletBalance',
        $argument,
        ['\Lnrpc\WalletBalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `channelbalance`
     * ChannelBalance returns a report on the total funds across all open channels,
     * categorized in local/remote, pending local/remote and unsettled local/remote
     * balances.
     * @param \Lnrpc\ChannelBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChannelBalance(\Lnrpc\ChannelBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ChannelBalance',
        $argument,
        ['\Lnrpc\ChannelBalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listchaintxns`
     * GetTransactions returns a list describing all the known transactions
     * relevant to the wallet.
     * @param \Lnrpc\GetTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTransactions(\Lnrpc\GetTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetTransactions',
        $argument,
        ['\Lnrpc\TransactionDetails', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `estimatefee`
     * EstimateFee asks the chain backend to estimate the fee rate and total fees
     * for a transaction that pays to multiple specified outputs.
     *
     * When using REST, the `AddrToAmount` map type can be set by appending
     * `&AddrToAmount[<address>]=<amount_to_send>` to the URL. Unfortunately this
     * map type doesn't appear in the REST API documentation because of a bug in
     * the grpc-gateway library.
     * @param \Lnrpc\EstimateFeeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EstimateFee(\Lnrpc\EstimateFeeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/EstimateFee',
        $argument,
        ['\Lnrpc\EstimateFeeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `sendcoins`
     * SendCoins executes a request to send coins to a particular address. Unlike
     * SendMany, this RPC call only allows creating a single output at a time. If
     * neither target_conf, or sat_per_vbyte are set, then the internal wallet will
     * consult its fee model to determine a fee for the default confirmation
     * target.
     * @param \Lnrpc\SendCoinsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendCoins(\Lnrpc\SendCoinsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendCoins',
        $argument,
        ['\Lnrpc\SendCoinsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listunspent`
     * Deprecated, use walletrpc.ListUnspent instead.
     *
     * ListUnspent returns a list of all utxos spendable by the wallet with a
     * number of confirmations between the specified minimum and maximum.
     * @param \Lnrpc\ListUnspentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUnspent(\Lnrpc\ListUnspentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListUnspent',
        $argument,
        ['\Lnrpc\ListUnspentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribeTransactions creates a uni-directional stream from the server to
     * the client in which any newly discovered transactions relevant to the
     * wallet are sent over.
     * @param \Lnrpc\GetTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeTransactions(\Lnrpc\GetTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeTransactions',
        $argument,
        ['\Lnrpc\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `sendmany`
     * SendMany handles a request for a transaction that creates multiple specified
     * outputs in parallel. If neither target_conf, or sat_per_vbyte are set, then
     * the internal wallet will consult its fee model to determine a fee for the
     * default confirmation target.
     * @param \Lnrpc\SendManyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMany(\Lnrpc\SendManyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendMany',
        $argument,
        ['\Lnrpc\SendManyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `newaddress`
     * NewAddress creates a new address under control of the local wallet.
     * @param \Lnrpc\NewAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function NewAddress(\Lnrpc\NewAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/NewAddress',
        $argument,
        ['\Lnrpc\NewAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `signmessage`
     * SignMessage signs a message with this node's private key. The returned
     * signature string is `zbase32` encoded and pubkey recoverable, meaning that
     * only the message digest and signature are needed for verification.
     * @param \Lnrpc\SignMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SignMessage(\Lnrpc\SignMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SignMessage',
        $argument,
        ['\Lnrpc\SignMessageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `verifymessage`
     * VerifyMessage verifies a signature over a msg. The signature must be
     * zbase32 encoded and signed by an active node in the resident node's
     * channel database. In addition to returning the validity of the signature,
     * VerifyMessage also returns the recovered pubkey from the signature.
     * @param \Lnrpc\VerifyMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyMessage(\Lnrpc\VerifyMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/VerifyMessage',
        $argument,
        ['\Lnrpc\VerifyMessageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `connect`
     * ConnectPeer attempts to establish a connection to a remote peer. This is at
     * the networking level, and is used for communication between nodes. This is
     * distinct from establishing a channel with a peer.
     * @param \Lnrpc\ConnectPeerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConnectPeer(\Lnrpc\ConnectPeerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ConnectPeer',
        $argument,
        ['\Lnrpc\ConnectPeerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `disconnect`
     * DisconnectPeer attempts to disconnect one peer from another identified by a
     * given pubKey. In the case that we currently have a pending or active channel
     * with the target peer, then this action will be not be allowed.
     * @param \Lnrpc\DisconnectPeerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DisconnectPeer(\Lnrpc\DisconnectPeerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DisconnectPeer',
        $argument,
        ['\Lnrpc\DisconnectPeerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listpeers`
     * ListPeers returns a verbose listing of all currently active peers.
     * @param \Lnrpc\ListPeersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPeers(\Lnrpc\ListPeersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListPeers',
        $argument,
        ['\Lnrpc\ListPeersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribePeerEvents creates a uni-directional stream from the server to
     * the client in which any events relevant to the state of peers are sent
     * over. Events include peers going online and offline.
     * @param \Lnrpc\PeerEventSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribePeerEvents(\Lnrpc\PeerEventSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribePeerEvents',
        $argument,
        ['\Lnrpc\PeerEvent', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `getinfo`
     * GetInfo returns general information concerning the lightning node including
     * it's identity pubkey, alias, the chains it is connected to, and information
     * concerning the number of open+pending channels.
     * @param \Lnrpc\GetInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInfo(\Lnrpc\GetInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetInfo',
        $argument,
        ['\Lnrpc\GetInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `getrecoveryinfo`
     * GetRecoveryInfo returns information concerning the recovery mode including
     * whether it's in a recovery mode, whether the recovery is finished, and the
     * progress made so far.
     * @param \Lnrpc\GetRecoveryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRecoveryInfo(\Lnrpc\GetRecoveryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetRecoveryInfo',
        $argument,
        ['\Lnrpc\GetRecoveryInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO(roasbeef): merge with below with bool?
     *
     * lncli: `pendingchannels`
     * PendingChannels returns a list of all the channels that are currently
     * considered "pending". A channel is pending if it has finished the funding
     * workflow and is waiting for confirmations for the funding txn, or is in the
     * process of closure, either initiated cooperatively or non-cooperatively.
     * @param \Lnrpc\PendingChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PendingChannels(\Lnrpc\PendingChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/PendingChannels',
        $argument,
        ['\Lnrpc\PendingChannelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listchannels`
     * ListChannels returns a description of all the open channels that this node
     * is a participant in.
     * @param \Lnrpc\ListChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListChannels(\Lnrpc\ListChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListChannels',
        $argument,
        ['\Lnrpc\ListChannelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribeChannelEvents creates a uni-directional stream from the server to
     * the client in which any updates relevant to the state of the channels are
     * sent over. Events include new active channels, inactive channels, and closed
     * channels.
     * @param \Lnrpc\ChannelEventSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeChannelEvents(\Lnrpc\ChannelEventSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeChannelEvents',
        $argument,
        ['\Lnrpc\ChannelEventUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `closedchannels`
     * ClosedChannels returns a description of all the closed channels that
     * this node was a participant in.
     * @param \Lnrpc\ClosedChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClosedChannels(\Lnrpc\ClosedChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ClosedChannels',
        $argument,
        ['\Lnrpc\ClosedChannelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * OpenChannelSync is a synchronous version of the OpenChannel RPC call. This
     * call is meant to be consumed by clients to the REST proxy. As with all
     * other sync calls, all byte slices are intended to be populated as hex
     * encoded strings.
     * @param \Lnrpc\OpenChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OpenChannelSync(\Lnrpc\OpenChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/OpenChannelSync',
        $argument,
        ['\Lnrpc\ChannelPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `openchannel`
     * OpenChannel attempts to open a singly funded channel specified in the
     * request to a remote peer. Users are able to specify a target number of
     * blocks that the funding transaction should be confirmed in, or a manual fee
     * rate to us for the funding transaction. If neither are specified, then a
     * lax block confirmation target is used. Each OpenStatusUpdate will return
     * the pending channel ID of the in-progress channel. Depending on the
     * arguments specified in the OpenChannelRequest, this pending channel ID can
     * then be used to manually progress the channel funding flow.
     * @param \Lnrpc\OpenChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function OpenChannel(\Lnrpc\OpenChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/OpenChannel',
        $argument,
        ['\Lnrpc\OpenStatusUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `batchopenchannel`
     * BatchOpenChannel attempts to open multiple single-funded channels in a
     * single transaction in an atomic way. This means either all channel open
     * requests succeed at once or all attempts are aborted if any of them fail.
     * This is the safer variant of using PSBTs to manually fund a batch of
     * channels through the OpenChannel RPC.
     * @param \Lnrpc\BatchOpenChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchOpenChannel(\Lnrpc\BatchOpenChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/BatchOpenChannel',
        $argument,
        ['\Lnrpc\BatchOpenChannelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * FundingStateStep is an advanced funding related call that allows the caller
     * to either execute some preparatory steps for a funding workflow, or
     * manually progress a funding workflow. The primary way a funding flow is
     * identified is via its pending channel ID. As an example, this method can be
     * used to specify that we're expecting a funding flow for a particular
     * pending channel ID, for which we need to use specific parameters.
     * Alternatively, this can be used to interactively drive PSBT signing for
     * funding for partially complete funding transactions.
     * @param \Lnrpc\FundingTransitionMsg $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FundingStateStep(\Lnrpc\FundingTransitionMsg $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/FundingStateStep',
        $argument,
        ['\Lnrpc\FundingStateStepResp', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ChannelAcceptor dispatches a bi-directional streaming RPC in which
     * OpenChannel requests are sent to the client and the client responds with
     * a boolean that tells LND whether or not to accept the channel. This allows
     * node operators to specify their own criteria for accepting inbound channels
     * through a single persistent connection.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function ChannelAcceptor($metadata = [], $options = []) {
        return $this->_bidiRequest('/lnrpc.Lightning/ChannelAcceptor',
        ['\Lnrpc\ChannelAcceptRequest','decode'],
        $metadata, $options);
    }

    /**
     * lncli: `closechannel`
     * CloseChannel attempts to close an active channel identified by its channel
     * outpoint (ChannelPoint). The actions of this method can additionally be
     * augmented to attempt a force close after a timeout period in the case of an
     * inactive peer. If a non-force close (cooperative closure) is requested,
     * then the user can specify either a target number of blocks until the
     * closure transaction is confirmed, or a manual fee rate. If neither are
     * specified, then a default lax, block confirmation target is used.
     * @param \Lnrpc\CloseChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function CloseChannel(\Lnrpc\CloseChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/CloseChannel',
        $argument,
        ['\Lnrpc\CloseStatusUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `abandonchannel`
     * AbandonChannel removes all channel state from the database except for a
     * close summary. This method can be used to get rid of permanently unusable
     * channels due to bugs fixed in newer versions of lnd. This method can also be
     * used to remove externally funded channels where the funding transaction was
     * never broadcast. Only available for non-externally funded channels in dev
     * build.
     * @param \Lnrpc\AbandonChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AbandonChannel(\Lnrpc\AbandonChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/AbandonChannel',
        $argument,
        ['\Lnrpc\AbandonChannelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     * lncli: `sendpayment`
     * Deprecated, use routerrpc.SendPaymentV2. SendPayment dispatches a
     * bi-directional streaming RPC for sending payments through the Lightning
     * Network. A single RPC invocation creates a persistent bi-directional
     * stream allowing clients to rapidly send payments through the Lightning
     * Network with a single persistent connection.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function SendPayment($metadata = [], $options = []) {
        return $this->_bidiRequest('/lnrpc.Lightning/SendPayment',
        ['\Lnrpc\SendResponse','decode'],
        $metadata, $options);
    }

    /**
     *
     * SendPaymentSync is the synchronous non-streaming version of SendPayment.
     * This RPC is intended to be consumed by clients of the REST proxy.
     * Additionally, this RPC expects the destination's public key and the payment
     * hash (if any) to be encoded as hex strings.
     * @param \Lnrpc\SendRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendPaymentSync(\Lnrpc\SendRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendPaymentSync',
        $argument,
        ['\Lnrpc\SendResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @deprecated
     * lncli: `sendtoroute`
     * Deprecated, use routerrpc.SendToRouteV2. SendToRoute is a bi-directional
     * streaming RPC for sending payment through the Lightning Network. This
     * method differs from SendPayment in that it allows users to specify a full
     * route manually. This can be used for things like rebalancing, and atomic
     * swaps.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function SendToRoute($metadata = [], $options = []) {
        return $this->_bidiRequest('/lnrpc.Lightning/SendToRoute',
        ['\Lnrpc\SendResponse','decode'],
        $metadata, $options);
    }

    /**
     *
     * SendToRouteSync is a synchronous version of SendToRoute. It Will block
     * until the payment either fails or succeeds.
     * @param \Lnrpc\SendToRouteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendToRouteSync(\Lnrpc\SendToRouteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendToRouteSync',
        $argument,
        ['\Lnrpc\SendResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `addinvoice`
     * AddInvoice attempts to add a new invoice to the invoice database. Any
     * duplicated invoices are rejected, therefore all invoices *must* have a
     * unique payment preimage.
     * @param \Lnrpc\Invoice $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddInvoice(\Lnrpc\Invoice $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/AddInvoice',
        $argument,
        ['\Lnrpc\AddInvoiceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listinvoices`
     * ListInvoices returns a list of all the invoices currently stored within the
     * database. Any active debug invoices are ignored. It has full support for
     * paginated responses, allowing users to query for specific invoices through
     * their add_index. This can be done by using either the first_index_offset or
     * last_index_offset fields included in the response as the index_offset of the
     * next request. By default, the first 100 invoices created will be returned.
     * Backwards pagination is also supported through the Reversed flag.
     * @param \Lnrpc\ListInvoiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInvoices(\Lnrpc\ListInvoiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListInvoices',
        $argument,
        ['\Lnrpc\ListInvoiceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `lookupinvoice`
     * LookupInvoice attempts to look up an invoice according to its payment hash.
     * The passed payment hash *must* be exactly 32 bytes, if not, an error is
     * returned.
     * @param \Lnrpc\PaymentHash $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LookupInvoice(\Lnrpc\PaymentHash $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/LookupInvoice',
        $argument,
        ['\Lnrpc\Invoice', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribeInvoices returns a uni-directional stream (server -> client) for
     * notifying the client of newly added/settled invoices. The caller can
     * optionally specify the add_index and/or the settle_index. If the add_index
     * is specified, then we'll first start by sending add invoice events for all
     * invoices with an add_index greater than the specified value. If the
     * settle_index is specified, the next, we'll send out all settle events for
     * invoices with a settle_index greater than the specified value. One or both
     * of these fields can be set. If no fields are set, then we'll only send out
     * the latest add/settle events.
     * @param \Lnrpc\InvoiceSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeInvoices(\Lnrpc\InvoiceSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeInvoices',
        $argument,
        ['\Lnrpc\Invoice', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `decodepayreq`
     * DecodePayReq takes an encoded payment request string and attempts to decode
     * it, returning a full description of the conditions encoded within the
     * payment request.
     * @param \Lnrpc\PayReqString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DecodePayReq(\Lnrpc\PayReqString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DecodePayReq',
        $argument,
        ['\Lnrpc\PayReq', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listpayments`
     * ListPayments returns a list of all outgoing payments.
     * @param \Lnrpc\ListPaymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPayments(\Lnrpc\ListPaymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListPayments',
        $argument,
        ['\Lnrpc\ListPaymentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * DeletePayment deletes an outgoing payment from DB. Note that it will not
     * attempt to delete an In-Flight payment, since that would be unsafe.
     * @param \Lnrpc\DeletePaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePayment(\Lnrpc\DeletePaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DeletePayment',
        $argument,
        ['\Lnrpc\DeletePaymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * DeleteAllPayments deletes all outgoing payments from DB. Note that it will
     * not attempt to delete In-Flight payments, since that would be unsafe.
     * @param \Lnrpc\DeleteAllPaymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAllPayments(\Lnrpc\DeleteAllPaymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DeleteAllPayments',
        $argument,
        ['\Lnrpc\DeleteAllPaymentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `describegraph`
     * DescribeGraph returns a description of the latest graph state from the
     * point of view of the node. The graph information is partitioned into two
     * components: all the nodes/vertexes, and all the edges that connect the
     * vertexes themselves. As this is a directed graph, the edges also contain
     * the node directional specific routing policy which includes: the time lock
     * delta, fee information, etc.
     * @param \Lnrpc\ChannelGraphRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeGraph(\Lnrpc\ChannelGraphRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DescribeGraph',
        $argument,
        ['\Lnrpc\ChannelGraph', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `getnodemetrics`
     * GetNodeMetrics returns node metrics calculated from the graph. Currently
     * the only supported metric is betweenness centrality of individual nodes.
     * @param \Lnrpc\NodeMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNodeMetrics(\Lnrpc\NodeMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetNodeMetrics',
        $argument,
        ['\Lnrpc\NodeMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `getchaninfo`
     * GetChanInfo returns the latest authenticated network announcement for the
     * given channel identified by its channel ID: an 8-byte integer which
     * uniquely identifies the location of transaction's funding output within the
     * blockchain.
     * @param \Lnrpc\ChanInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetChanInfo(\Lnrpc\ChanInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetChanInfo',
        $argument,
        ['\Lnrpc\ChannelEdge', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `getnodeinfo`
     * GetNodeInfo returns the latest advertised, aggregated, and authenticated
     * channel information for the specified node identified by its public key.
     * @param \Lnrpc\NodeInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNodeInfo(\Lnrpc\NodeInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetNodeInfo',
        $argument,
        ['\Lnrpc\NodeInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `queryroutes`
     * QueryRoutes attempts to query the daemon's Channel Router for a possible
     * route to a target destination capable of carrying a specific amount of
     * satoshis. The returned route contains the full details required to craft and
     * send an HTLC, also including the necessary information that should be
     * present within the Sphinx packet encapsulated within the HTLC.
     *
     * When using REST, the `dest_custom_records` map type can be set by appending
     * `&dest_custom_records[<record_number>]=<record_data_base64_url_encoded>`
     * to the URL. Unfortunately this map type doesn't appear in the REST API
     * documentation because of a bug in the grpc-gateway library.
     * @param \Lnrpc\QueryRoutesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryRoutes(\Lnrpc\QueryRoutesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/QueryRoutes',
        $argument,
        ['\Lnrpc\QueryRoutesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `getnetworkinfo`
     * GetNetworkInfo returns some basic stats about the known channel graph from
     * the point of view of the node.
     * @param \Lnrpc\NetworkInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNetworkInfo(\Lnrpc\NetworkInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetNetworkInfo',
        $argument,
        ['\Lnrpc\NetworkInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `stop`
     * StopDaemon will send a shutdown request to the interrupt handler, triggering
     * a graceful shutdown of the daemon.
     * @param \Lnrpc\StopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StopDaemon(\Lnrpc\StopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/StopDaemon',
        $argument,
        ['\Lnrpc\StopResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribeChannelGraph launches a streaming RPC that allows the caller to
     * receive notifications upon any changes to the channel graph topology from
     * the point of view of the responding node. Events notified include: new
     * nodes coming online, nodes updating their authenticated attributes, new
     * channels being advertised, updates in the routing policy for a directional
     * channel edge, and when channels are closed on-chain.
     * @param \Lnrpc\GraphTopologySubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeChannelGraph(\Lnrpc\GraphTopologySubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeChannelGraph',
        $argument,
        ['\Lnrpc\GraphTopologyUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `debuglevel`
     * DebugLevel allows a caller to programmatically set the logging verbosity of
     * lnd. The logging can be targeted according to a coarse daemon-wide logging
     * level, or in a granular fashion to specify the logging for a target
     * sub-system.
     * @param \Lnrpc\DebugLevelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DebugLevel(\Lnrpc\DebugLevelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DebugLevel',
        $argument,
        ['\Lnrpc\DebugLevelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `feereport`
     * FeeReport allows the caller to obtain a report detailing the current fee
     * schedule enforced by the node globally for each channel.
     * @param \Lnrpc\FeeReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FeeReport(\Lnrpc\FeeReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/FeeReport',
        $argument,
        ['\Lnrpc\FeeReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `updatechanpolicy`
     * UpdateChannelPolicy allows the caller to update the fee schedule and
     * channel policies for all channels globally, or a particular channel.
     * @param \Lnrpc\PolicyUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateChannelPolicy(\Lnrpc\PolicyUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/UpdateChannelPolicy',
        $argument,
        ['\Lnrpc\PolicyUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `fwdinghistory`
     * ForwardingHistory allows the caller to query the htlcswitch for a record of
     * all HTLCs forwarded within the target time range, and integer offset
     * within that time range, for a maximum number of events. If no maximum number
     * of events is specified, up to 100 events will be returned. If no time-range
     * is specified, then events will be returned in the order that they occured.
     *
     * A list of forwarding events are returned. The size of each forwarding event
     * is 40 bytes, and the max message size able to be returned in gRPC is 4 MiB.
     * As a result each message can only contain 50k entries. Each response has
     * the index offset of the last entry. The index offset can be provided to the
     * request to allow the caller to skip a series of records.
     * @param \Lnrpc\ForwardingHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ForwardingHistory(\Lnrpc\ForwardingHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ForwardingHistory',
        $argument,
        ['\Lnrpc\ForwardingHistoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `exportchanbackup`
     * ExportChannelBackup attempts to return an encrypted static channel backup
     * for the target channel identified by it channel point. The backup is
     * encrypted with a key generated from the aezeed seed of the user. The
     * returned backup can either be restored using the RestoreChannelBackup
     * method once lnd is running, or via the InitWallet and UnlockWallet methods
     * from the WalletUnlocker service.
     * @param \Lnrpc\ExportChannelBackupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ExportChannelBackup(\Lnrpc\ExportChannelBackupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ExportChannelBackup',
        $argument,
        ['\Lnrpc\ChannelBackup', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * ExportAllChannelBackups returns static channel backups for all existing
     * channels known to lnd. A set of regular singular static channel backups for
     * each channel are returned. Additionally, a multi-channel backup is returned
     * as well, which contains a single encrypted blob containing the backups of
     * each channel.
     * @param \Lnrpc\ChanBackupExportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ExportAllChannelBackups(\Lnrpc\ChanBackupExportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ExportAllChannelBackups',
        $argument,
        ['\Lnrpc\ChanBackupSnapshot', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * VerifyChanBackup allows a caller to verify the integrity of a channel backup
     * snapshot. This method will accept either a packed Single or a packed Multi.
     * Specifying both will result in an error.
     * @param \Lnrpc\ChanBackupSnapshot $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyChanBackup(\Lnrpc\ChanBackupSnapshot $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/VerifyChanBackup',
        $argument,
        ['\Lnrpc\VerifyChanBackupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `restorechanbackup`
     * RestoreChannelBackups accepts a set of singular channel backups, or a
     * single encrypted multi-chan backup and attempts to recover any funds
     * remaining within the channel. If we are able to unpack the backup, then the
     * new channel will be shown under listchannels, as well as pending channels.
     * @param \Lnrpc\RestoreChanBackupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RestoreChannelBackups(\Lnrpc\RestoreChanBackupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/RestoreChannelBackups',
        $argument,
        ['\Lnrpc\RestoreBackupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * SubscribeChannelBackups allows a client to sub-subscribe to the most up to
     * date information concerning the state of all channel backups. Each time a
     * new channel is added, we return the new set of channels, along with a
     * multi-chan backup containing the backup info for all channels. Each time a
     * channel is closed, we send a new update, which contains new new chan back
     * ups, but the updated set of encrypted multi-chan backups with the closed
     * channel(s) removed.
     * @param \Lnrpc\ChannelBackupSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeChannelBackups(\Lnrpc\ChannelBackupSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeChannelBackups',
        $argument,
        ['\Lnrpc\ChanBackupSnapshot', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `bakemacaroon`
     * BakeMacaroon allows the creation of a new macaroon with custom read and
     * write permissions. No first-party caveats are added since this can be done
     * offline.
     * @param \Lnrpc\BakeMacaroonRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BakeMacaroon(\Lnrpc\BakeMacaroonRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/BakeMacaroon',
        $argument,
        ['\Lnrpc\BakeMacaroonResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listmacaroonids`
     * ListMacaroonIDs returns all root key IDs that are in use.
     * @param \Lnrpc\ListMacaroonIDsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMacaroonIDs(\Lnrpc\ListMacaroonIDsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListMacaroonIDs',
        $argument,
        ['\Lnrpc\ListMacaroonIDsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `deletemacaroonid`
     * DeleteMacaroonID deletes the specified macaroon ID and invalidates all
     * macaroons derived from that ID.
     * @param \Lnrpc\DeleteMacaroonIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteMacaroonID(\Lnrpc\DeleteMacaroonIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DeleteMacaroonID',
        $argument,
        ['\Lnrpc\DeleteMacaroonIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listpermissions`
     * ListPermissions lists all RPC method URIs and their required macaroon
     * permissions to access them.
     * @param \Lnrpc\ListPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPermissions(\Lnrpc\ListPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListPermissions',
        $argument,
        ['\Lnrpc\ListPermissionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * CheckMacaroonPermissions checks whether a request follows the constraints
     * imposed on the macaroon and that the macaroon is authorized to follow the
     * provided permissions.
     * @param \Lnrpc\CheckMacPermRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CheckMacaroonPermissions(\Lnrpc\CheckMacPermRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/CheckMacaroonPermissions',
        $argument,
        ['\Lnrpc\CheckMacPermResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * RegisterRPCMiddleware adds a new gRPC middleware to the interceptor chain. A
     * gRPC middleware is software component external to lnd that aims to add
     * additional business logic to lnd by observing/intercepting/validating
     * incoming gRPC client requests and (if needed) replacing/overwriting outgoing
     * messages before they're sent to the client. When registering the middleware
     * must identify itself and indicate what custom macaroon caveats it wants to
     * be responsible for. Only requests that contain a macaroon with that specific
     * custom caveat are then sent to the middleware for inspection. The other
     * option is to register for the read-only mode in which all requests/responses
     * are forwarded for interception to the middleware but the middleware is not
     * allowed to modify any responses. As a security measure, _no_ middleware can
     * modify responses for requests made with _unencumbered_ macaroons!
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function RegisterRPCMiddleware($metadata = [], $options = []) {
        return $this->_bidiRequest('/lnrpc.Lightning/RegisterRPCMiddleware',
        ['\Lnrpc\RPCMiddlewareRequest','decode'],
        $metadata, $options);
    }

    /**
     * lncli: `sendcustom`
     * SendCustomMessage sends a custom peer message.
     * @param \Lnrpc\SendCustomMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendCustomMessage(\Lnrpc\SendCustomMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendCustomMessage',
        $argument,
        ['\Lnrpc\SendCustomMessageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `subscribecustom`
     * SubscribeCustomMessages subscribes to a stream of incoming custom peer
     * messages.
     *
     * To include messages with type outside of the custom range (>= 32768) lnd
     * needs to be compiled with  the `dev` build tag, and the message type to
     * override should be specified in lnd's experimental protocol configuration.
     * @param \Lnrpc\SubscribeCustomMessagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function SubscribeCustomMessages(\Lnrpc\SubscribeCustomMessagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeCustomMessages',
        $argument,
        ['\Lnrpc\CustomMessage', 'decode'],
        $metadata, $options);
    }

    /**
     * lncli: `listaliases`
     * ListAliases returns the set of all aliases that have ever existed with
     * their confirmed SCID (if it exists) and/or the base SCID (in the case of
     * zero conf).
     * @param \Lnrpc\ListAliasesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAliases(\Lnrpc\ListAliasesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListAliases',
        $argument,
        ['\Lnrpc\ListAliasesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *
     * LookupHtlcResolution retrieves a final htlc resolution from the database.
     * If the htlc has no final resolution yet, a NotFound grpc status code is
     * returned.
     * @param \Lnrpc\LookupHtlcResolutionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LookupHtlcResolution(\Lnrpc\LookupHtlcResolutionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/LookupHtlcResolution',
        $argument,
        ['\Lnrpc\LookupHtlcResolutionResponse', 'decode'],
        $metadata, $options);
    }

}
