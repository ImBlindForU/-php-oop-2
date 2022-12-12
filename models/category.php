<?php
// category
class category{
    public $categoryName;

    public function __construct(String $categoryName)
    {
        $this->categoryName= $categoryName;
    }
    public function PrintCategory(){
        return $this->categoryName;
    }
}
