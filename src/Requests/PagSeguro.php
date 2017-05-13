<?php
namespace BrPayments\Requests;

use BrPayments\OrderInterface as Order;

class PagSeguro extends RequestAbstract
{
    // URL pagamento sem Sandbox
    const URL = 'https://pagseguro.uol.com.br/v2/checkout/payment.html';
    const URL_CHECKOUT = 'https://ws.pagseguro.uol.com.br/v2/checkout';
    // Método
    const METHOD = 'POST';
    // URL pagamento com Sandbox
    const URL_FINAL = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html';
    const URL_FINAL_SANDBOX = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';


    public function getUrlFinal($code, bool $sandbox = null)
    {
        if ($sandbox) {
            return PagSeguro::URL_FINAL_SANDBOX . '?code=' . (string)$code;
        }
        return PagSeguro::URL_FINAL . '?code=' . (string)$code;
    }
}
?>
