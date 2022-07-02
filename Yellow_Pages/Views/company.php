<?php

use Models\company;

include '../components/navbar.php';
include  '../Models/company.php';

if (isset($_POST['city_code'])) {
    $company_obj = new company();
    $areas = $company_obj->get_area($_POST['city_code']);
    echo "<option value=0>-- Select Area --</option>";
    foreach ($areas as $area) {
        echo '<option value=' . $area['id'] . '>' . $area['area'] . '</option>';
    }
    die;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Data</title>
    <link rel="stylesheet" href="../assests/css/pad.css">
    <link href="../assests/css/company.css" rel="stylesheet" type="text/css" media=all>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" id="fff">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Company Data</h2>
                    <form method=POST action="../Controllers/company.php" enctype="multipart/form-data">

                        <div class="row row-space">
                            <!-- Company Name -->
                            <div class="col-12 pad">
                                <input class="input--style-4" type="text" name="company_name" placeholder="Enter Company Name" required>
                            </div>
                            <!-- Company Phone Number -->
                            <div class="col-12 pad">
                                <input class="input--style-4" type="text" name="company_number" placeholder="Enter Company Phone Number">
                            </div>
                            <!-- City Selection -->
                            <div class="col-12 pad">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name=city id=city>
                                        <option value=0>-- Select City --</option>
                                        <?php
                                        $company_obj = new company();
                                        $cities = $company_obj->get_city();
                                        foreach ($cities as $city) {
                                            echo '<option value=' . $city['id'] . '>' . $city['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <!-- Area Selection -->
                            <div class="col-12 pad">
                                <label class="label"></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name=area id=area>
                                        <option value=0>-- Select Area --</option>

                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <!-- Categories -->
                            <div class="col-12 pad">
                                <div class="rs-select2 js-select-simple">
                                    <p class=form-label style="display: inline;"> Categories</p>
                                    <select name="categories[]" id=categories class="test" multiple="multiple">
                                        <option value=0 disabled>-- Select one or more Category --</option>
                                        <?php
                                        $categories = $company_obj->get_categories();
                                        foreach ($categories as $category) {
                                            echo '<option value=' . $category['id'] . '>' . $category['name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <!-- Images -->
                            <div class="col-12 pad">
                                <label for="images" class="form-label">Upload Images</label>
                                <input type="file" name="images[]" id="images" multiple class="form-control">
                            </div>
                        </div>
                        <div class="p-t-15" style="align-items:center;">
                            <button class="btn btn-primary mb-3" style="position: absolute;top: 90%; left: 36%;" type="submit">Add Company</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>
    <script src="../assests/js/company.js"></script>
    <script>
        $(document).ready(function() {
            $('#categories').select2();
            $('#city').select2();
            $('#area').select2();
            $("#city").on("change", function() {
                const city_code = $('#city').val();
                jQuery.ajax({
                    type: 'POST',
                    data: {
                        action: 'get_cities',
                        city_code: city_code
                    },
                    success: function(data) {
                        $("#area").html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>