<!DOCTYPE html>
<html>

<head> <?php include '../assests/css/all_css_files.php';
            include '../components/navbar_for_users.php'; ?>
    <title> List Of Companies </title>
    <style>
        body {
            background: -webkit-gradient(linear,
                    left bottom,
                    right top,
                    from(#fc2c77),
                    to(#6c4079));
            background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
            background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);
            ;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
            margin: 10px;
            margin-bottom: 20px;
        }

        .card-body {
            width: 290px;
        }

        .pag {
            color: blue;
            background-color: red;
            position: absolute;
            top: 340%;
            left: 95%;
            width: 10px;
        }
    </style>
    <link rel="stylesheet" href="../css/list_companies.css">
</head>

<body>
    <div style="padding-top:120px; display:inline-block;">
        <?php

        use Models\ListOfCompanies;

        include '../Models/list_companies.php';

        $list = new ListOfCompanies();
        $_list = $list->getAllCompanies();
        $result = $_list[0];
        $number_of_page = $_list[1];
        while ($row = mysqli_fetch_array($result)) { ?>
            <div class="card" style="display:inline-flex; height:400px;">
                <div class="col-md-8">
                    <div class="card-body">
                        <!-- Name -->
                        <h1><?php $row['company_city'] ?></h1>
                        <h2 class="card-title"> <?php echo $row['company_name'] ?> </h2>
                        <!-- Phone Number -->
                        <h6 class="card-title"> <?php echo $row['company_phone_number'] ?> </h6>
                        <!-- City  And Area-->
                    <?php $city = $list->get_city($row['company_city']);
                    $area = $list->get_area($row['company_area']);
                    if ($city) {
                        echo '<p class="card-title">' . $area['area'] . ", " . $city['name'] . "</p>";
                    }
                    $categories = explode(",", $row['categories']);
                    echo "Specialists";
                    foreach ($categories as $category) {
                        if ($category) {
                            $_category = $list->get_category($category);
                            echo '<p class="card-title">' . $_category['name'] . "</p>";
                        }
                    }
                    echo '</div>
                    </div>
                </div>
    </div>';
                }
                for ($page = 1; $page <= $number_of_page; $page++) {
                    echo '<a class="page-link pag" href = "list_companies.php?page=' . $page . '">' . $page . ' </a> ';
                } ?>
                    <?php include '../components/footer.php'; ?>
</body>

</html>