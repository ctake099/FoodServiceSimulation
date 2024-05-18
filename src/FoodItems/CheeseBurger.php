<?php
namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function getCategory(): string {
        return "Burger";
    }
}