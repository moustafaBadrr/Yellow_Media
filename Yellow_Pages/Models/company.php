<?php

namespace Models;

class Company
{
	protected $id;
	protected $name;
	protected $phone;
	protected $city;
	protected $area;
	protected $categories;
	protected $image;

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

	public function getPhone()
	{
		return $this->phone;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function getArea()
	{
		return $this->area;
	}

	public function getCategories()
	{
		return $this->categories;
	}

	public function getImage()
	{
		return $this->image;
	}

	// SET METHODS
	public function setName(string $name)
	{
		$this->name = $name;
	}

	public function setPhone(string $phone)
	{
		$this->phone = $phone;
	}

	public function setCity(string $city)
	{
		$this->city = $city;
	}

	public function setArea(string $area)
	{
		$this->area = $area;
	}

	public function setCategories(string $categories)
	{
		$this->categories = $categories;
	}

	public function setImage(string $image)
	{
		$this->image = $image;
	}

	// CRUD OPERATIONS
	public function insert_data(array $data)
	{
		include '../config/Database_Connection/dbConnection.php';
		$catrgories = array();
		$categories_joined = "";
		$images_joined = "";
		if (isset($data['categories'])) {
			foreach ($data['categories'] as $catrgory) {
				$catrgories[] = (int) $catrgory;
			}
			$categories_joined = join(',', $catrgories);
		}
		if (isset($data['name'])) {
			foreach ($data['name'] as $image) {
				$images[] = $image;
			}
			$images_joined = join(',', $images);
		}

		$insert_data_query = "INSERT INTO companies (company_name, categories, company_phone_number, company_city, company_area, company_images) 
    	VALUES ('$data[company_name]', '$categories_joined', '$data[company_number]', '$data[city]', '$data[area]', '$images_joined')";

		if (!($connection->query($insert_data_query) === TRUE)) {
			echo "Error: " . $insert_data_query . "<br>" . $connection->error;
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
	public function get_categories()
	{
		include '../config/Database_Connection/dbConnection.php';
		$select_query = "SELECT id, name FROM categories";
		$categories = mysqli_query($connection, $select_query);
		return  $categories;
	}
	public function get_area($city_id)
	{
		include '../config/Database_Connection/dbConnection.php';
		$select_query = "SELECT id, area, city_id FROM areas where city_id = $city_id";
		$areas = mysqli_query($connection, $select_query);
		return  $areas;
	}
}
