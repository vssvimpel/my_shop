<?php 

require_once '../db.php';

class Collection
{
    public $id;
    public $title;
    public $description;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM collections WHERE collection_id=$id";
        $result = $mysqli->query($query);

        $collection_data = $result->fetch_assoc();

        $this->id = $collection_data['collection_id'];
        $this->title = $collection_data['title'];
        $this->description = $collection_data['description'];
        
    }
    
    public static function getAll() 
    {
        global $mysqli;

        $query = "SELECT collection_id FROM collections";
        $result = $mysqli->query($query);

        $collections = [];
        while ($collection_data = $result->fetch_assoc()) {
            $collections[] = new Collection($collection_data['collection_id']);
        }

        return $collections;
    }

    public static function create($title, $description)
    {
        global $mysqli;

        $query = "INSERT INTO collections (title, description)
                  VALUES ('$title', '$description')";

        $mysqli->query($query);
    }

    public function update($title, $description) 
    {
        global $mysqli;

        $query = "UPDATE collections SET title='$title', description='$description'
                  WHERE collection_id=$this->id";

        $mysqli->query($query);
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM collections WHERE collection_id=$this->id";

        $mysqli->query($query);
    }
}

// $collection = Collection::getAll();
// var_dump($collection);

// $collection = new Collection(1);
// var_dump($collection);



// $collection = new Collection(1);
// $collection->update('Мужчинам','Товары для мужчин');
// $collection->delete('$this->id');



