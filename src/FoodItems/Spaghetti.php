<?php
namespace FoodItems;

use FoodItems\FoodItem;

class Spaghetti extends FoodItem {
    public function __construct() {
        parent::__construct("Spaghetti Bolognese", "Pasta with meat sauce", 320);
    }
    public function getCategory(): string {
        return "Spaghetti";
    }
}