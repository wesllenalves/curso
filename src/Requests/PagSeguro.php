<?php
namespace BrPayments\Requests;
use BrPayments\Payments\PagSeguro as Order;
class PagSeguro
{
    // URL pagamento sem Sandbox
    const URL = 'https://pagseguro.uol.com.br/v2/checkout/payment.html';
    const URL_CHECKOUT = 'https://ws.pagseguro.uol.com.br/v2/checkout';
    // Método
    const METHOD = 'POST';
    // URL pagamento com Sandbox
    const URL_SANDBOX = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html';
    const URL_CHECKOUT_SANDBOX = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';

    public function getUrlCheckout(Order $order, bool $sandbox = null)
    {
        if ($sandbox) {
            return PagSeguro::URL_CHECKOUT_SANDBOX . '?' . (string)$order;
        }
        return PagSeguro::URL_CHECKOUT . '?' . (string)$order;
    }

    public function getMethod()
    {
        return PagSeguro::METHOD;
    }

    public function getUrlFinal($code, bool $sandbox = null)
    {
        if ($sandbox) {
            return PagSeguro::URL_SANDBOX . '?code=' . (string)$code;
        }
        return PagSeguro::URL . '?code=' . (string)$code;
    }
}
?>
