<?php
namespace BrPayments\Payments;

class PagSeguro
{

    protected $config;
    protected $sender;
    protected $shipping;
    protected $products;



	public function __construct(array $config) {
           $this->config = $config;
	}

	public function customer(...$customer) {
		$this->sender = [
		    'senderName' => $customer[0],
		    'senderAreaCode' => $customer[1],
		    'senderPhone' => $customer[2],
		    'senderEmail' => $customer[3],

		];
	}

	public function shipping(...$shipping) {
		 $this->shipping = [

		 	'shippingType' => $shipping[0],
		 	'shippingAnddresStreet' => $shipping[1],
		 	'shippingAnddresNumber' => $shipping[2],
		 	'shippingAnddresComplement' => $shipping[3],
		 	'shippingAnddresDistrict' => $shipping[4],
		 	'shippingAnddresPostalCode' => $shipping[5],
		 	'shippingAnddresCity' => $shipping[6],
		 	'shippingAnddresState' => $shipping[7],
		 	'shippingAnddresCountry' => $shipping[8],

		 ];
	}

	public function addProduct(...$product) {
		$index = count($this->products);
		$this->products[$index] = [
             'id' => $product[0],
             'description' => $product[1],
             'amount' => $product[2],
             'quantity' => $product[3],             
		];
		if (!empty($product[4])){
		$this->products[$index]['wheight'] = $product[4];

		}
	}


}
