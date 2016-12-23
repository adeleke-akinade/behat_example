<?php

class Basket {
  
  private $products = [];
  
  public function add($product) {
    $this->products[] = $product;
  }
  
  public function count() {
    return count($this->products);
  }
  
}