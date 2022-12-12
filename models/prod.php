<?php

require_once __DIR__ . "/Products.php";

 // product
 class prod extends Products{
    public $name;
    public $price;
    public $color;
    public $material;
    public $img;

    public function __construct(String  $name,String  $price,String  $color, String $material, String $img, $productstype)
    {
        $this->name = $name;
        $this->price =$price;
        $this->color =$color;
        $this->material =$material;
        $this->img =$img;
        parent::__construct($productstype);
    }
    public function PrintProd(){
        return "Price:$this->price  
            Color: $this->color   
            Materiale:$this->material
            ";
            
    }
    public function printname(){
        return $this->name;
    }
    public function imageprint(){
        return $this->img;
    }
}