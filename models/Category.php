<?php

require_once '../db.php';

class Category
{

    public $id;
    public $title;
    public $description;


    public function __construct($id)
    {
    global $mysqli;

    $query = "SELECT * FROM  categories WHERE category_id=$id";
    $result = $mysqli->query($query);

    $category_data = $result->fetch_assoc();

    $this->id = $category_data['category_id'];
    $this->title = $category_data['title'];
    $this->description = $category_data['description'];
    }

    public static function getAll()
    {
        global $mysqli;

        $query = "SELECT category_id FROM categories";
        $result = $mysqli->query($query);

        $categories = [];
        while ($category_data = $result->fetch_assoc()) {
            $categories[] = new Category($category_data['category_id']);
        }

        return $categories;
    }

    public static function create($title, $description)
    {
        global $mysqli;

        $query = "INSERT INTO categories (title, description)
                  VALUES ('$title', '$description')";

        $mysqli->query($query);
    }

    public function update($title, $description) 
    {
        global $mysqli;

        $query = "UPDATE categories SET title='$title', description='$description'
                  WHERE categories_id=$this->id";

        $mysqli->query($query);
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM categories WHERE categories_id=$this->id";

        $mysqli->query($query);
    }
}

// $categories = Category::getAll();
// var_dump($categories);
