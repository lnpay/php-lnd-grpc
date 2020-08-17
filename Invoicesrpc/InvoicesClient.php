<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Invoicesrpc;

/**
 * Invoices is a service that can be used to create, accept, settle and cancel
 * invoices.
 */
class InvoicesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * *
     * SubscribeSingleInvoice returns a uni-directional stream (server -> client)
     * to notify the client of state transitions of the specified invoice.
     * Initially the current invoice state is always sent out.
     * @param \Invoicesrpc\SubscribeSingleInvoiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubscribeSingleInvoice(\Invoicesrpc\SubscribeSingleInvoiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/invoicesrpc.Invoices/SubscribeSingleInvoice',
        $argument,
        ['\Lnrpc\Invoice', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * CancelInvoice cancels a currently open invoice. If the invoice is already
     * canceled, this call will succeed. If the invoice is already settled, it will
     * fail.
     * @param \Invoicesrpc\CancelInvoiceMsg $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelInvoice(\Invoicesrpc\CancelInvoiceMsg $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/invoicesrpc.Invoices/CancelInvoice',
        $argument,
        ['\Invoicesrpc\CancelInvoiceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * AddHoldInvoice creates a hold invoice. It ties the invoice to the hash
     * supplied in the request.
     * @param \Invoicesrpc\AddHoldInvoiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddHoldInvoice(\Invoicesrpc\AddHoldInvoiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/invoicesrpc.Invoices/AddHoldInvoice',
        $argument,
        ['\Invoicesrpc\AddHoldInvoiceResp', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * SettleInvoice settles an accepted invoice. If the invoice is already
     * settled, this call will succeed.
     * @param \Invoicesrpc\SettleInvoiceMsg $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SettleInvoice(\Invoicesrpc\SettleInvoiceMsg $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/invoicesrpc.Invoices/SettleInvoice',
        $argument,
        ['\Invoicesrpc\SettleInvoiceResp', 'decode'],
        $metadata, $options);
    }

}
