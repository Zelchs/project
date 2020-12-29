<?php

namespace app;

use PDO;
use app\models\Product;
use app\Config;

class Database extends Config
{


    public \PDO $pdo;
    public static Database $db;
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=$this->host;port=3306;dbname=$this->dbName", "$this->user", "$this->pass");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        self::$db = $this;
    }

    public function getProducts()
    {
        $statement = $this->pdo->prepare("SELECT * FROM posts ORDER BY id DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function createProduct(Product $product)
    {
        $statement = $this->pdo->prepare("INSERT INTO posts (sku, name, price, size, weight, dimensions, date_created) 
            VALUES (:sku, :name, :price, :size, :weight, :dimensions, :date)
        ");
        $statement->bindValue(':sku', $product->sku);
        $statement->bindValue(':name', $product->name);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':size', $product->size);
        $statement->bindValue(':weight', $product->weight);
        $statement->bindValue(':dimensions', $product->dimensions);
        $statement->bindValue(':date', date("Y-m-d H:i:s"));
        $statement->execute();
    }

    public function deleteProduct($toDelete)
    {
        $statement = $this->pdo->prepare("DELETE FROM posts WHERE id = :id");
        foreach ($toDelete as $id) {
            $statement->bindValue(":id", $id,);
            $statement->execute();
        }
    }
}
