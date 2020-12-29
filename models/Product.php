<?php

namespace app\models;

use app\Database;

class Product
{
    public ?string $sku = null;
    public ?string $name = null;
    public ?float $price = null;
    public ?int $size  = null;
    public ?int $weight = null;
    public ?string $dimensions = null;

    public function load($productData)
    {
        $this->sku = $productData["sku"];
        $this->name = $productData["name"];
        $this->price = $productData["price"];
        $this->size = $productData["size"] ?? null;
        $this->weight = $productData["weight"] ?? null;
        $this->dimensions = $productData["dimensions"] ?? null;
    }

    public function save()
    {
        $errors = [];

        if (!$this->name) {
            $errors[] = "Product name is required";
        }

        if (!$this->price) {
            $errors[] = "Product price is required";
        }
        if (!$this->sku) {
            $errors[] = "Product SKU is required";
        }


        if (empty($errors)) {

            $db = Database::$db;
            $db->createProduct($this);
        }
        return $errors;
    }
}
