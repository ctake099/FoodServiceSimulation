<?php
namespace FoodItems;

use FoodItems\FoodItem;

class Spaghetti extends FoodItem {
    public function getCategory(): string {
        return "Spaghetti";
    }
}