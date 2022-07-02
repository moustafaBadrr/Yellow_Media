<?php

namespace Controllers;

use Models\Category;
include  '../Models/categories.php';

class categoryController
{

	function __construct()
	{
	}

	public function insert_data(array $data)
	{
		$model = new Category();
		$model->insert_data($data);
	}
	public function getCity()
	{
		$company_obj = new Category();
		return $company_obj->get_city();
	}
}

if (isset($_POST)) {
	$company = new categoryController();
	$company->insert_data($_POST);
}