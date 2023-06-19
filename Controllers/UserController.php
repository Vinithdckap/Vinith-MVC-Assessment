<?php
require_once "Model/UserModel.php";

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function createProducts($products,$files) {
        if($products && $files){
            $this->userModel->dataInsert($products,$files);
            header("location:/");
        }else{
            require "views/products/create.php";
        }

    }

    public function edit($product,$files) {
//        var_dump($files);
        $this->userModel->update($product,$files);
        require 'views/products/edit.php';

    }
//
    public function delete($id) {
        $this->userModel->deleteDB($id);

    }

    public function listProducts() {
        $allproducts=$this->userModel->allproducts();
        require 'views/products/productsList.php';
    }
//
    public function viewProduct($id) {
        $uniqueProduct=$this->userModel->read("$id");
        require 'views/products/edit.php';


    }
}