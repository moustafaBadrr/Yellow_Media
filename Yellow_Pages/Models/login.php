<?php
    include '../config/Database_Connection/dbConnection.php';
    $query = "SELECT is_admin, email, password FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
    $result = mysqli_query($connection, $query);
    var_dump($result->num_rows );
    if($result->num_rows > 0){
        $is_admin = "";
        foreach ($result as $obj) {
            $is_admin = $obj['is_admin'];
        }
        if($is_admin) header('Location: http://localhost/Yellow_Media/Yellow_Pages/Views/welcome.php');
        else header('Location: http://localhost/Yellow_Media/Yellow_Pages/Views/list_companies_for_users.php');
        
    }else{
        header('Location: http://localhost/Yellow_Media/Yellow_Pages/Views/login.php');
    }