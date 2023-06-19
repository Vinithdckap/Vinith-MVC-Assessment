<?php

class data
{
    public $db;
    public function __construct(){
        try {
            $this->db= new PDO
            ("mysql:host=127.0.0.1;dbname=mvc_assessment",
                "admin",
                "welcome");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

class UserModel extends data {
    // Database connection and other necessary properties

    public function dataInsert($products,$files)
    {

        move_uploaded_file($files["tmp_name"],"uploadedFiles/" .$files["name"]);
        $imagePath= "uploadedFiles/".$files["name"];
        $products_name =$products['product_name'];
        $price =$products['price'];
        $sku =$products['sku'];
        $brands =$products['brands'];
        $manufactured =$products['manufactured'];
        $remaining_stock =$products['remaining_stock'];

        $this->db ->query( "Insert into products (product_name,price,image,sku,brand,manufactured,remaining_stock) values ('$products_name','$price','$imagePath','$sku','$brands','$manufactured','$remaining_stock')");
//         header("location:/");
    }
    public function read($id) {
        $query =$this->db->query("select * from products where id =$id");
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;

    }

    public function update($products,$files) {

        move_uploaded_file($files["tmp_name"],"uploadedFiles/" .$files["name"]);
        $imagePath= "uploadedFiles/".$files["name"];
        $products_name =$products['product_name'];
        $price =$products['price'];
        $sku =$products['sku'];
        $brands =$products['brands'];
        $manufactured =$products['manufactured'];
        $remaining_stock =$products['remaining_stock'];
        $id =$products['id'];

        $this->db ->query("Update products set product_name ='$products_name',price='$price',image='$imagePath',sku='$sku',brand='$brands',manufactured='$manufactured',remaining_stock='$remaining_stock' where id='$id'");
        header("location:/");

    }

    public function deleteDB($id) {
        $this->db ->query( "DELETE FROM products WHERE id = '$id' ");
        header("location:/");
    }

    public function allproducts() {
        $query =$this->db->query("select * from products");
        $query->execute();
        $datas=$query->fetchAll(PDO::FETCH_OBJ);
        return $datas;

    }
}