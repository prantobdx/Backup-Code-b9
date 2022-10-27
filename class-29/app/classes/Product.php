<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Brand;

class Product
{
    public $product=[];
    public $res=[];
    public $products;
    public $category;
    public $categoryById;
    public $brand;
    public $brandById;

    public function __construct()
    {
        $this->product=[
            [
                'id'=>'1',
                'category_id'=>'1',
                'brand_id'=>'1',
                'name'=>'MacBook',
                'price'=>'50000 TK',
                'description'=>'Brand New Laptop',
                'company_name'=>'Chinese',
                'image'=>'laptop.jpg',
            ],
            [
                'id'=>'2',
                'category_id'=>'1',
                'brand_id'=>'1',
                'name'=>'MacBook Pro',
                'price'=>'60000 TK',
                'description'=>'Brand New Laptop',
                'company_name'=>'Indian',
                'image'=>'laptop-1.jpg',
            ],
            [
                'id'=>'3',
                'category_id'=>'1',
                'brand_id'=>'1',
                'name'=>'MacBook Ultra',
                'price'=>'70000 TK',
                'description'=>'Brand New Laptop',
                'company_name'=>'Global',
                'image'=>'laptop-2.jpg',
            ],
            [
                'id'=>'4',
                'category_id'=>'2',
                'brand_id'=>'2',
                'name'=>'Xioami Mobile',
                'price'=>'30000 TK',
                'description'=>'Brand New Mobile',
                'company_name'=>'Chinese',
                'image'=>'m1.jpg',
            ],
            [
                'id'=>'5',
                'category_id'=>'2',
                'brand_id'=>'2',
                'name'=>'Oppo Mobile',
                'price'=>'35000 TK',
                'description'=>'Brand New Mobile',
                'company_name'=>'Indian',
                'image'=>'m2.jpg',
            ],
            [
                'id'=>'6',
                'category_id'=>'2',
                'brand_id'=>'2',
                'name'=>'Notihng Mobile',
                'price'=>'40000 TK',
                'description'=>'Brand New Mobile',
                'company_name'=>'Global',
                'image'=>'m3.jpg',
            ],
        ];
    }
    public function allProduct(){
        return $this->product;
    }
    public function productDetails($product_id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if($product['id']==$product_id){
                $this->category=new Category();
                $this->categoryById=$this->category->getCategory($product['category_id']);
                $product['category_name']=$this->categoryById['name'];

                $this->brand=new Brand();
                $this->brandById=$this->brand->getBrand($product['brand_id']);
                $product['brand_name']=$this->brandById['name'];
                return $product;
            }
        }
    }
    public function productByCategory($id){
        $this->products=$this->allProduct();
        foreach ($this->products as $product){
            if ($product ['category_id']==$id){
                array_push($this->res,$product);
            }
        }
        return $this->res;
    }
}