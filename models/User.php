<?php

require_once '../db.php';

class User 
{
    public $id;
    public $name;
    public $login;
    public $pass;
    public $role;

    
    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT * FROM users WHERE user_id=$id";
        $result = $mysqli->query($query);

        $user_data = $result->fetch_assoc();

        $this->id = $user_data['user_id'];
        $this->name = $user_data['name'];
        $this->login = $user_data['login'];
        $this->pass = $user_data['pass'];
        $this->role = $user_data['role'];
    }

    public static function getAll() 
    {
        global $mysqli;

        $query = "SELECT user_id FROM users";
        $result = $mysqli->query($query);

        $users = [];
        while ($user_data = $result->fetch_assoc()) {
            $users[] = new User($user_data['user_id']);
        }

        return $users;
    }

    public static function getUserByLogin($login)  // создание функции
    {
        global $mysqli;  // подключение к базе
        $query = "SELECT user_id FROM users WHERE login='$login'"; //выбираем из базы что чему ровняется
        $result = $mysqli->query($query); // создаем переменную которая ровняется id юзера из базы и принимает числовое значение 1,2... или =0 если логин или пароль не совпадают
        if ($result->num_rows != 0) { // задаем условие при котором "если $result не равен 0, то такой пользователь есть, иначе - такого пользователя нет"
            $user_data = $result->fetch_assoc();
            $user = new User($user_data['user_id']);
            return $user;
        } else {
            return false;
        }
    }

    public static function create($name, $login, $pass)
    {
        global $mysqli;
        // потестила, этот пункт работает
        $query  = "SELECT user_id FROM users WHERE login='$login'";
        $result = $mysqli->query($query);
        if ($result->num_rows != 0) {
            return false;
        } else {
        $query = "INSERT INTO users (name, login, pass)
                  VALUES ('$name', '$login', '$pass')";
        $mysqli->query($query);
        return true;
        }
    }

    public function update($name, $login, $pass, $role) 
    {
        global $mysqli;
        // думаю здесь проверка по имени не очень нужна, так что тоже сделала проверку только по логину
        $query  = "SELECT login FROM users WHERE login='$login'";
        $result = $mysqli->query($query);
        if ($rusult->num_rows==1) {
            return false;
        }


        $query = "UPDATE users SET name='$name', login='$login', pass='$pass', role='$role'
                  WHERE user_id=$this->id";

        $mysqli->query($query);
        return true;
    }

    public function delete() 
    {
        global $mysqli;

        $query = "DELETE FROM users WHERE user_id=$this->id";

        $mysqli->query($query);
    }
}
