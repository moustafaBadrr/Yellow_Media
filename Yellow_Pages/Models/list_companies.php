<?php

namespace Models;

class ListOfCompanies
{
    public function __construct()
    {
    }

    public function getAllCompanies()
    {
        include '../config/Database_Connection/dbConnection.php';
        if (!$connection) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($connection, 'categories');
        }
        $results_per_page = 10;
        $query = "select * from companies";
        $result = mysqli_query($connection, $query);
        $number_of_result = mysqli_num_rows($result);

        $number_of_page = ceil($number_of_result / $results_per_page);

        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        $page_first_result = ($page - 1) * $results_per_page;

        $query = "SELECT * FROM companies LIMIT " . $page_first_result . ',' . $results_per_page;
        $result = mysqli_query($connection, $query);
        return [$result, $number_of_page];
    }

    public function get_city($company_city)
    {
        include '../config/Database_Connection/dbConnection.php';
        $city_query = mysqli_query($connection, "SELECT name FROM cities WHERE id=$company_city LIMIT 1");
        $city = mysqli_fetch_assoc($city_query);

        return  $city;
    }

    public function get_area($company_area)
    {
        include '../config/Database_Connection/dbConnection.php';
        $area_query = mysqli_query($connection, "SELECT area FROM areas WHERE id=$company_area LIMIT 1");
        $area = mysqli_fetch_assoc($area_query);

        $select_query = "SELECT id, name FROM cities";
        $cities = mysqli_query($connection, $select_query);
        return  $area;
    }
    public function get_category($category)
    {
        include '../config/Database_Connection/dbConnection.php';
        $category_query = mysqli_query($connection, "SELECT name FROM categories WHERE id=$category LIMIT 1");
        $category = mysqli_fetch_assoc($category_query);
        return  $category;
    }

}
