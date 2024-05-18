<?php

namespace FoodItems;
abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected int $price; 

    public function __construct(string $name, string $description, int $price) {
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

    public function getPrice(): int {
        return $this->price;
    }

    abstract public function getCategory(): string;
}