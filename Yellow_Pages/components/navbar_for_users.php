<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../assests/css/all_css_cdns.php'; ?>
  <link rel="stylesheet" href="../assests/css/navbar.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" target="_blank" href="https://yellow.com.eg/en/">Yellow Pages</a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-md-auto gap-2">
          <li class="nav-item rounded">
            <a class="nav-link" aria-current="page" href="users_welcome.php"><i class="bi bi-house-fill me-2"></i>Home</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="list_companies_for_users.php"><i class="bi bi-telephone-fill me-2"></i>Companies List</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link" href="login.php"><i class="bi bi-telephone-fill me-2"></i>Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php include '../assests/js/all_scripts.php'; ?>
  <script src="../assests/js/navbar.js"> </script>
</body>

</html>