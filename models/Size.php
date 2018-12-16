<?php

require_once '../db.php';

class Size
{
    public $id;
    public $value;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM sizes WHERE size_id=$id";
        $result = $mysqli->query($query);

        $size_data = $result->fetch_assoc();

        $this->id = $size_data['size_id'];
        $this->value = $size_data['value'];
    }
    public static function getAll() 
    {
        global $mysqli;

        $query = "SELECT size_id FROM sizes";
        $result = $mysqli->query($query);

        $sizes = [];
        while ($size_data = $result->fetch_assoc()) {
            $sizes[] = new Size ($size_data['size_id']);
        }

        return $sizes;
    }

    public static function getAllByProduct($product_id) 
    {
        global $mysqli;

        $query = "SELECT size_id FROM product_sizes WHERE product_id=$product_id";
        $result = $mysqli->query($query);

        $sizes = [];
        while ($size_data = $result->fetch_assoc()) {
            $sizes[] = new Size ($size_data['size_id']);
        }

        return $sizes;
        
    }
    public static function create($size)
    {
        global $mysqli;

        $query = "INSERT INTO sizes (value)
            VALUES ('$size')";

        $mysqli->query($query);
        // var_dump($query);
    }
    public function update($size) 
    {
        global $mysqli;

        $query = "UPDATE sizes SET size='$size'
                WHERE size_id=$this->id";

        $mysqli->query($query);
    }
    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM sizes WHERE size_id=$this->id";

        $mysqli->query($query);
    }
}

// $sizes = Size::getAllbyProduct(6);
// var_dump ($sizes);

// echo '<hr>';

// $size = new Size(1);
// var_dump ($size);

// Size::create('size');
// $size = new Size(1);

// $size->update('size');
// $size->delete('size');



