<?php
// products
class Products{
    public $productstype;
    public function __construct($productstype)
    {
        $this->productstype = $productstype;
    }
    public function PrintProductstype(){
        return  $this->productstype;
    }
}
