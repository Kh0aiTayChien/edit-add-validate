<?php


class Product
{
    public $id;
    public $name;
    public $price;
    public function __construct($id, $name,$price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price=$price;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function check_username($id,$name,$price)
    {
        $pattern = "/^[A-Za-z]{6,}$/";
        if (!preg_match($pattern,$name)){
            session_start();
            $_SESSION['name']="Username sai roi";
        }else{
            $product = new Product($id, $name, $price);
            ProductManager::$pathFile = '../../data.json';
            ProductManager::addProduct($product);
            header('location:../../index.php');

        }

    }
}