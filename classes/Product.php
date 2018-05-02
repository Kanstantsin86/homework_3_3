<?php
abstract class Product
{
    abstract public function discountCalculation();
    public $category;
    public $name;
    public $validity;
    public $price;
    public $tax;
    public $discount;
}