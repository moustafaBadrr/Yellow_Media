<!DOCTYPE html>
<html>

<head> <?php include '../assests/css/all_css_cdns.php';
        include '../components/navbar_for_users.php'; ?>
    <link rel="stylesheet" href="../assests/css/cards.css">
    <title> List Of Companies </title>
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
            <div class="all_cards">
                <div class="each_card">
                    <!-- Name -->
                    <h2> <?php echo $row['company_name'] ?> </h2>
                    <!-- Phone Number -->
                    <h6 class="card-title"> <?php echo $row['company_phone_number'] ?> </h6>
                    <!-- City  And Area-->
                <?php $city = $list->get_city($row['company_city']);
                $area = $list->get_area($row['company_area']);
                if ($city) {
                    echo '<p class="card-title">' . $area['area'] . ", " . $city['name'] . "</p>";
                }
                $categories = explode(",", $row['categories']);
                echo "<h4>Specialists</h4>";
                foreach ($categories as $category) {
                    if ($category) {
                        $_category = $list->get_category($category);
                        echo '<p class="card-title">' . $_category['name'] . "</p>";
                    }
                }
                echo '</div>
                </div>
    </div>';
            } ?>
                <div class=pag>
                    <?php for ($page = 1; $page <= $number_of_page; $page++) {
                        echo '<a class="page" href = "list_companies_for_users.php?page=' . $page . '">' . $page . ' </a>';
                    } ?>
                </div>
                <div class="footer">
                    <?php include '../components/footer.php'; ?>
                </div>

</body>

</html>