<?php


namespace App\classes;


class Product
{
    public $product= [];

    public $result = [];

    public $allProd;

    public function __construct()
    {
        $this->product = [
            [
                'id' => 1,
                'name' => 'new-laptop-1',
                'price' => '8000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'basketball.png',
            ],
            [
                'id' => 2,
                'name' => 'new-laptop-2',
                'price' => '9000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'lap-2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'new-laptop-3',
                'price' => '5000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'lap-3.jpg',
            ],
            [
                'id' => 4,
                'name' => 'new-laptop-4',
                'price' => '5000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'banner.png',
            ],
        ];
    }

    public function allProduct(){
        return $this->product;
    }

    public function getProductDeatils($id){
        $this->allProd = $this->allProduct();
        foreach ($this->allProd as $product)
        {
            if($product['id'] == $id)
            {
                   return $product;
//                array_push($this->result, $product);
            }
        }

    }
}