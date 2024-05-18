<?php
namespace FoodItems;

use FoodItems\FoodItem;

class Fettuccine extends FoodItem {
    public function getCategory(): string {
        return "pasta";
    }
}