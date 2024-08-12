<?php
include "./components/header.php";
include "./components/topnavbar.php";
require_once "./auth/update.php";
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>

            <?php

                $user_id = $_GET['id'];
                
                $select_query = "SELECT * FROM users WHERE user_id='$user_id'";
                $result = mysqli_query($conn, $select_query);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $user_id = $row['user_id'];
                        $first_name = $row['first_name'];
                        $last_name = $row['last_name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $gender = $row['gender'];
                        $picture = $row['picture'];
                        $nin = $row['nin'];
                        $address = $row['address'];
                        $affiliate_code = $row['affiliate_code'];
                        $proof_of_identification = $row['proof_of_identification'];
                        $created_at = $row['created_at'];
                        $status = $row['status'];
                        $verified = $row['verified'];
                        $date = strtotime($created_at);
                        switch ($status) {
                            case "Inactive";
                                $class  = 'badge-danger';
                                break;
                            case "Active";
                                $class  = 'badge-success';
                                break;
                            case "pending";
                                $class  = 'bg-warning';
                                $text  = 'text-warning';
                                break;
                            default:
                                $class  = '';
                        }
                    }
                }

            ?>
            
            <div class="main-panel"> 
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4 class="display-4 text-primary font-weight-bold">Edit <?php echo $first_name; ?>'s Account</h4>
                                        </div>
                                        <div class="hstack align-items-center">
                                            <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="">
                                            <?php
                                                if (isset($_SESSION['error_message'])) {
                                                    ?>
                                                    <div class="alert alert-danger mt-2 mb-3" role="alert">
                                                        <div class="alert-message text-center">
                                                            <?php
                                                            echo $_SESSION['error_message'];
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    unset($_SESSION['error_message']);
                                                }
                                            ?>
                                            <?php
                                                if (isset($_SESSION['success_message'])) {
                                                    ?>
                                                    <div class="alert alert-success mt-2 mb-3" role="alert">
                                                        <div class="alert-message text-center">
                                                            <?php echo $_SESSION['success_message']; ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    unset($_SESSION['success_message']);
                                                }
                                            ?>
                                            
                                            <form class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                                <div class="row pt-4">
                                                    <div class="col-md-4" style="display: none;">
                                                        <div class="form-group">
                                                            <label for="user_id">User ID</label>
                                                            <input type="text" class="form-control" name="user_id" value="<?php echo $user_id; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="first_name">First Name</label>
                                                            <input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="tel" class="form-control" name="phone" value="<?php echo $phone; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="gender">Gender</label>
                                                            <select class="form-control" name="gender">
                                                                <option selected><?php if (!$gender){echo 'Select Gender';}else{echo $gender;} ?></option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nin">NIN</label>
                                                            <input type="text" class="form-control" name="nin" value="<?php echo $nin; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Address</label>
                                                            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="affiliate_code">Affiliate Code</label>
                                                            <input type="text" class="form-control" name="affiliate_code" value="<?php echo $affiliate_code; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="verified">Account Verification</label>
                                                            <select class="form-control" name="verified">
                                                                <option selected><?php if (!$verified){echo 'Not Verified';}elseif ($verified == 1){echo 'Verified';}else{echo 'Not Verified';} ?></option>
                                                                <option value="1">Verify</option>
                                                                <option value="0">Unverify</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="status">Status</label>
                                                            <select class="form-control" name="status">
                                                                <option selected><?php if (!$status){echo 'Change Status';}else{echo $status;} ?></option>
                                                                <option>Active</option>
                                                                <option>Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <button name="update_user_btn" type="submit" class="button btn-block btn btn-primary btn-lg mr-2" onclick="this.classList.toggle('button--loading')"><span class="button__text">Update User</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
<?php include "./components/footer.php"; ?>