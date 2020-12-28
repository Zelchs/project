<?php

namespace app\controllers;

use app\Router;
use app\models\Product;

class MainController
{
    public function index(Router $router)
    {
        $products = $router->db->getProducts();
        return $router->renderView("index", [
            "products" => $products
        ]);
    }

    public function create(Router $router)
    {
        $errors = [];
        $productData = [
            "sku" => "",
            "name" => "",
            "price" => "",
            "size" => "",
            "weight" => "",
            "dimensions" => ""
        ];
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $productData["sku"] = $_POST["sku"];
            $productData["name"] = $_POST["name"];
            $productData["price"] = (float)$_POST["price"];
            $productData["size"] = (int)$_POST["size"];
            $productData["weight"] = (int)$_POST["weight"];
            if ($_POST["typeSwitch"] === "FUR") {
                $productData["dimensions"] = $_POST["height"] . "x" . $_POST["width"] . "x" . $_POST["length"];
            } else {
                $productData["dimensions"] = "";
            }

            $product = new Product();
            $product->load($productData);
            $errors = $product->save();
            if (empty($errors)) {
                header("Location: /");
                exit;
            }
        }


        return $router->renderView("create", [
            "product" => $productData,
            "errors" => $errors
        ]);
    }

    public function delete(Router $router)
    {
        $toDelete = $_POST["checked"] ?? null;
        if (!$toDelete) {
            header("Location: /");
            exit;
        }
        $router->db->deleteProduct($toDelete);
        header("Location: /");
    }
}
