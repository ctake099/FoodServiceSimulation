<?php

// 名前の衝突を防ぐ
namespace Persons;

// abstractはインスタンス化できないクラス
// 継承されることを前提
abstract class Person {
    // protected: 同じクラスとそのサブクラスからアクセス可能
    protected string $name;
    protected int $age;
    protected string $address;
    public function __construct(string $name, int $age, string $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getAddress(): string {
        return $this->address;
    }
}