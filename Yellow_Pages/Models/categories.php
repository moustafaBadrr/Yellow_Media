<?php

namespace Models;

class Category
{
   protected $id;
   protected $name;
   public function __construct()
   {
   }
   // GET METHODS
   public function getId()
   {
      return $this->id;
   }

   public function getName()
   {
      return $this->name;
   }
   // SET METHODS
   public function setName(string $name)
   {
      $this->name = $name;
   }
   // CRUD OPERATIONS
   public function insert_data(array $data)
   {
      include '../config/Database_Connection/dbConnection.php';

      $insert_cateogry = "INSERT INTO categories (name) VALUES ('$data[category]')";
      if (!($connection->query($insert_cateogry) === TRUE)) {
         echo "Error: " . $insert_cateogry . "<br>" . $connection->error;
      } else {
         header('Location: http://localhost/Yellow_Media/Yellow_Pages/Views/welcome.php');
      }

      $connection->close();
   }

   public function read(int $id)
   {
   }

   public function update(int $id, array $data)
   {
   }

   public function delete(int $id)
   {
   }

   public function get_city()
   {
      include '../config/Database_Connection/dbConnection.php';
      $select_query = "SELECT id, name FROM cities";
      $cities = mysqli_query($connection, $select_query);
      return  $cities;
   }
}
