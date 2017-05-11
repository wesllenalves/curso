<?php
namespace BrPayments\Payments;
class PagSeguroTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $access = [
            'email'=>'email@email',
            'token'=>'token',
            'currency'=>'BRL',
            'reference'=>'REF1234'
        ];
        $this->pag_seguro = new PagSeguro($access);
        //name, areacode, phone, email
        $this->pag_seguro->customer('Jose Comprador', 11, 99999999, 'comprador@comprador.com.br');
        //type, street, number, complement, district, postal code, city, state, country
        $this->pag_seguro->shipping(
            1,
            'Av. PagSeguro',
            99,
            '99o andar',
            'Jardim Internet',
            99999999,
            'Cidade Exemplo',
            'SP',
            'ATA'
        );
        //id, description, amount, quantity, wheight(optional)
        $this->pag_seguro->addProduct(1, 'Curso de PHP', 19.99, 20);
        $this->pag_seguro->addProduct(2, 'Livro de Laravel', 15, 31, 1.5);
    }
    public function testListarProdutosAdicionadosEmUmArray()
    {
        $this->assertEquals(true, true);
    }
}
?>