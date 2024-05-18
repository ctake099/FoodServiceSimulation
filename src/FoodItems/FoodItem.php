<?php

class FoodItem {
    private string $name;
    private string $description;
    private string $price; 

    public function __construct(string $name, string $description, string $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): string {
        return $this->price;
    }

    public function getCategory(): string {
        return "food\n";
    }
}