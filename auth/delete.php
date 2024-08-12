<?php
session_start();
// Connect database
include "./config/db.php";


// Delete User script
if (isset($_POST['delete_user_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM users WHERE user_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "User deleted";
    }else{
        $_SESSION['error_message'] = "Delete other resources linked to this user first";
    }

}


// Delete Property script
if (isset($_POST['delete_property_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM properties WHERE property_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Property deleted";
    }else{
        $_SESSION['error_message'] = "Error deleting property".mysqli_error($conn);
    }

}