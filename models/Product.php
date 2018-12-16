<?php

require_once '../db.php';

class Product 
{
    public $id;
    public $image;
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $collection_id;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM products WHERE product_id=$id";
        $result = $mysqli->query($query);

        $product_data = $result->fetch_assoc();

        $this->id = $product_data['product_id'];
        $this->image = $product_data['image'];
        $this->title = $product_data['title'];
        $this->description = $product_data['description'];
        $this->price = $product_data['price'];
        $this->category_id = $product_data['category_id'];
        $this->collection_id = $product_data['collection_id'];
    }

    public static function getAll($collection_id = false, $category_id = false, $order_id = false)
    {
        global $mysqli;

        $conditions = '';
        $tables = 'products p';

        if ($category_id != false) {
            $conditions .= " AND category_id=$category_id";
        }

        if ($collection_id != false) {
            $conditions .= " AND collection_id=$collection_id";
        }

        if($order_id != false) {
            $conditions .= " AND order_id=$order_id";
            $conditions .= "  AND op.product_id = p.product_id";
            $tables .= ', order_products op';
        }

        // SELECT p.product_id
        // FROM products p, order_products op
        // WHERE 1 AND op.order_id = 1 AND op.product_id = p.product_id 

        $query = "SELECT p.product_id FROM $tables WHERE 1 $conditions";
        $result = $mysqli->query($query);

        $products = [];
        while ($product_data = $result->fetch_assoc()) {
            $products[] = new Product($product_data['product_id']);
        }

        return $products;
    }

    public static function create($image, $title, $description, $price, $category_id, $collection_id)
    {
        global $mysqli;

        $query = "INSERT INTO products (image, title, description, price, category_id, collection_id)
                  VALUES ('$image', '$title', '$description', '$price', '$category_id', '$collection_id')";

        $mysqli->query($query);
    }

    public function update($image, $title, $description, $price, $category_id, $collection_id) 
    {
        global $mysqli;

        $query = "UPDATE products SET image='$image', title='$title', description='$description', price='$price', category_id='$category_id', collection_id='$collection_id'
                  WHERE product_id=$this->id";

        $mysqli->query($query);
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM products WHERE product_id=$this->id";

        $mysqli->query($query);
    }
}
