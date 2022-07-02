<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../components/navbar.php'; ?>

    <link rel="stylesheet" href="../assests/css/company.css">
    <title>Add Categories</title>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" id="fff">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" >Add Category</h2>
                    <form class="row g-3" method=POST action="../Controllers/Categories.php">
                        <div class="category_form">
                            <div class="col-12">
                                <input type="text" class=input--style-4 name=category id=category placeholder="Enter Category Name" required>
                            </div>
                            <div class="p-t-15" style="align-items:center;">
                                <button class="btn btn-primary" style="position:absolute; top:77%; left:36%" type="submit">Add Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include '../components/footer.php'; ?>
</body>

</html>