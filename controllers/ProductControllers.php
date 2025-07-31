<?php
class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->getAll();
        require_once 'Views/products/index.php';
    }

    public function show($id) {
        $product = $this->productModel->getById($id);
        require_once 'Views/products/show.php';
    }
}