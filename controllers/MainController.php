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
            "title" => "",
            "description" => "",
            "price" => ""
        ];
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $productData["title"] = $_POST["title"];
            $productData["description"] = $_POST["description"];
            $productData["price"] = (float)$_POST["price"];

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
        $id = $_POST["id"] ?? null;
        if (!$id) {
            header("Location: /");
            exit;
        }
        $router->db->deleteProduct($id);
        header("Location: /");
    }
}
