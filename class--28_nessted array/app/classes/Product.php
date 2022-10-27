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
                'brandId' => '1',
                'categoryId' => '1',
                'name' => 'new-laptop-1',
                'price' => '8000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'basketball.png',
            ],
            [
                'id' => 2,
                'brandId' => '2',
                'categoryId' => '2',
                'name' => 'new-laptop-2',
                'price' => '9000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'lap-2.jpg',
            ],
            [
                'id' => 3,
                'brandId' => '1',
                'categoryId' => '1',
                'name' => 'new-laptop-3',
                'price' => '5000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'lap-3.jpg',
            ],
            [
                'id' => 4,
                'brandId' => '2',
                'categoryId' => '2',
                'name' => 'new-laptop-4',
                'price' => '5000 tk',
                'description' => 'Best-laptop',
                'company_name' => 'Asus',
                'image' => 'banner.png',
            ],
            [
                'id' => 5,
                'brandId' => '1',
                'categoryId' => '1',
                'name' => 'new-laptop-5',
                'price' => '7000 tk',
                'description' => 'Best-laptop-5',
                'company_name' => 'Apple',
                'image' => 'library.png',
            ],
            [
                'id' => 6,
                'brandId' => '2',
                'categoryId' => '2',
                'name' => 'new-laptop-6',
                'price' => '4000 tk',
                'description' => 'Best-laptop-6',
                'company_name' => 'Hp',
                'image' => 'cafeteria.png',
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
//                array_push($this->result, $product);
                  return $product;
            }
        }
//        return $this->result;
    }

//    public function shortProducts($)
}