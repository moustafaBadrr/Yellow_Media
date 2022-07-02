<?php
include '../config/Database_Connection/dbConnection.php';
if (isset($_POST['password']) && $_POST['password'] == $_POST['repeated_password']) {
    $insert_users = "INSERT INTO users (email, password, name) VALUES ('$_POST[email]', '$_POST[password]', '$_POST[name]')";
    if (!($connection->query($insert_users) === TRUE)) {
        echo "Error: " . $insert_cateogry . "<br>" . $connection->error;
    }else{
        header('Location: http://localhost/Yellow_Pages/Views/login.php');
    }
} else {
    // header('Location: http://localhost/Yellow_Pages/signup.php');
    echo "<script>
        alert('Two Passwords Not Matched');
        window.location.href='http://localhost/Yellow_Pages/index.php';
        </script>";
}
