<?php
namespace FoodItems;

use FoodItems\FoodItem;

class HawaiianPizza extends FoodItem {
    public function __construct() {
        parent::__construct("Hawaiian Pizza", "Pizza with ham and pineapple", 500);
    }
    public function getCategory(): string {
        return "Pizza";
    }
}