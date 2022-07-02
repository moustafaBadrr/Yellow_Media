<?php

namespace Controllers;

use Models\Company;
include  '../Models/company.php';

class companyController
{

	function __construct()
	{
	}

	public function insert_data(array $data)
	{
		$model = new Company();
		$model->insert_data($data);
	}
	public function getArea($city_code)
	{
		$model = new Company();
		return $model->get_area($city_code);
	}
	public function getCity()
	{
		$company_obj = new company();
		return $company_obj->get_city();
	}
}

if (isset($_POST)) {
	$company = new companyController();
	$company->insert_data(array_merge($_POST, $_FILES['images']));
}
