<?php
// Connect database
include "./config/db.php";
    

    //Update User Query
    if (isset($_POST['update_user_btn'])) {

        $user_id = isset($_GET['user_id']) ? $_GET['id'] : '';

        $first_name = $conn->real_escape_string($_POST['first_name']);
        $last_name = $conn->real_escape_string($_POST['last_name']);
        $email = $conn->real_escape_string($_POST['email']);
        $nin = $conn->real_escape_string($_POST['nin']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $status = $conn->real_escape_string($_POST['status']);
        $affiliate_code = $conn->real_escape_string($_POST['affiliate_code']);
        $gender = $conn->real_escape_string($_POST['gender']);
        $address = $conn->real_escape_string($_POST['address']);


        $sql=mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', nin='$nin', phone='$phone', status='$status', affiliate_code='$affiliate_code', gender='$gender', address='$address', verified='$verified' WHERE user_id='$user_id'");

            $_SESSION['success_message'] = "User account updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=users'>";
        } else {
            $_SESSION['error_message'] = "Error updating user.".mysqli_error($conn);
        }

    }


    //Update Meal Picture
    if (isset($_POST['update_meal_picture_btn'])) {

        $meal_id = isset($_GET['meal_id']) ? $_GET['meal_id'] : '';

        $meal_id = $conn->real_escape_string($_POST['meal_id']);
        $meal_image_path = $conn->real_escape_string('upload/'.$_FILES['meal_image']['name']);
        if (file_exists($meal_image_path)){
            $meal_image_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['meal_image']['name']);
        }
    
        $checker = 0;
    
        //make sure file type is image
        if (preg_match("!image!", $_FILES['meal_image']['type'])) {
            $checker ++;
        }
        if ($checker < 1){
            exit;
        }


        $sql=mysqli_query($conn,"SELECT * FROM meals where meal_id='$meal_id'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE meals SET  meal_image='$meal_image_path' WHERE meal_id='$meal_id'");

            //copy image to upload folder
            copy($_FILES['meal_image']['tmp_name'], $meal_image_path);

            $_SESSION['success_message'] = "Meal image updated 👍";
            echo "<meta http-equiv='refresh' content='5; URL=meals'>";
        } else {
            $_SESSION['error_message'] = "Error updating meal.".mysqli_error($conn);
        }

    }
