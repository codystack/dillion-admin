<?php

session_start();

//Connect database
include "./config/db.php";



//Login script
if (isset($_POST['login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $username = $conn->real_escape_string($_POST['username']);
    $status = $conn->real_escape_string($_POST['status']);
    $verified = $conn->real_escape_string($_POST['verified']);
    $designation = $conn->real_escape_string($_POST['designation']);

    $password = sha1($password);
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $admin_id = $row['admin_id'];
        $status = $row['status'];
        $picture = $row['picture'];
        $username = $row['username'];
        $designation = $row['designation'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['admin_id'] = $admin_id;
        $_SESSION['designation'] = $designation;
        $_SESSION['username'] = $username;
        if ($status == 1){
            $_SESSION['success_message'] = "Login Successfull";
            header('location: overview');
        }
        if ($status == 0){
            $_SESSION['error_message'] = "Account Deactivated";
        }
    }else {
        $_SESSION['error_message'] = "Incorrect Login Details";
    }
}