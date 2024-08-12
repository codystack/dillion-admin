<?php
// Connect database
include "./config/db.php";

//New Property Query
if (isset($_POST['add-property-btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
    $location = $conn->real_escape_string($_POST['location']);
    $city = $conn->real_escape_string($_POST['city']);
    $size = $conn->real_escape_string($_POST['size']);
    $document_title = $conn->real_escape_string($_POST['document_title']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $video_link = $conn->real_escape_string($_POST['video_link']);
    $property_info = $conn->real_escape_string($_POST['property_info']);
    $property_features = $conn->real_escape_string($_POST['property_features']);
    $property_image_path = $conn->real_escape_string('property-upload/'.$_FILES['property_image']['name']);

    if (file_exists($property_image_path)){
        $property_image_path = $conn->real_escape_string('property-upload/'.uniqid().rand().$_FILES['property_image']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['property_image']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }


    $check_query = "SELECT * FROM properties WHERE title='$title'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "Property Already Exist!";
    }else {
        $query = "INSERT INTO properties (title, location, city, size, document_title, quantity, amount, video_link, property_info, property_features, property_image) 
  			        VALUES('$title', '$location', '$city', '$size', '$document_title', '$quantity', '$amount', '$video_link', '$property_info', '$property_features', '$property_image_path')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {

            //copy image to property upload folder
            copy($_FILES['property_image']['tmp_name'], $property_image_path);

            $_SESSION['success_message'] = "<strong>Success!</strong> new property added";
            echo "<meta http-equiv='refresh' content='3; URL=properties'>";
        }else {
            $_SESSION['error_message'] = "Error adding property".mysqli_error($conn);
        }
    }
}