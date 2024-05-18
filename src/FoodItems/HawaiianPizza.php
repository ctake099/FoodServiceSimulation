<?php
namespace FoodItems;

use FoodItems\FoodItem;

class HawaiianPizza extends FoodItem {
    public function getCategory(): string {
        return "Pizza";
    }
}