<?php

namespace app\models;

use app\Database;

class Product
{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description  = null;
    public ?float $price = null;

    public function load($data)
    {
        $this->id = $data["id"] ?? null;
        $this->title = $data["title"];
        $this->description = $data["description"] ?? "";
        $this->price = $data["price"];
    }

    public function save()
    {
        $errors = [];

        if (!$this->title) {
            $errors[] = "Product title is required";
        }

        if (!$this->price) {
            $errors[] = "Product price is required";
        }


        if (empty($errors)) {

            $db = Database::$db;
            $db->createProduct($this);
        }
        return $errors;
    }
}
