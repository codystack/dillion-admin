<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>
        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>


            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-3 mb-lg-0">
                                    <h1 class="mb-2 h2 font-weight-bold">User</h1>
                                </div>

                                <div class="align-items-center">
                                    <button onclick="history.back()" class="btn btn-md btn-dark d-none d-sm-inline-flex"><i class="mdi mdi-arrow-left"></i> <span class="mr-2">Go back</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row grid-margin">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <?php
                                    $user_id = $_GET['id'];
                                    
                                    $select_query = "SELECT * FROM affiliates INNER JOIN users ON users.user_id ='$user_id' AND affiliates.affiliate_code = affiliates.affiliate_code";
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
                                <div class="card-body">

                                    <div class="text-center mb-10 mt-5">
                                        <div class="mb-3">
                                            <img alt="" src="<?php if (!$picture){echo './assets/images/avatar.png';}else{echo 'https://dillionproperty.ng/app/', $picture;} ?>" class="img-responsive img-xl rounded-circle">
                                        </div>
                                        <div class="col-lg-4 col-sm-3 col-md-3 col-4 mx-auto d-flex justify-content-center mt-3 bg-light-primary px-1 py-2 wallet-border">
                                            <div>
                                                <span class="fs-6">STATUS:</span>
                                            </div>
                                            &nbsp;
                                            <div style="">
                                                <span class="badge <? echo $class; ?> text-xs <? echo $text; ?>"><?php echo $status; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="container mt-10 mb-10">
                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">FULL NAME</span>
                                                <h5 class="mt-2"><?php echo $first_name; ?> <?php echo $last_name; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">EMAIL</span>
                                                    <h5 class="mt-2"><?php echo $email; ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">PHONE</span>
                                                <h5 class="mt-2"><?php echo $phone; ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">GENDER</span>
                                                    <h5 class="mt-2"><?php if (!$gender){echo 'Nil';}else{echo $gender;} ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">NIN</span>
                                                <h5 class="mt-2"><?php if (!$nin){echo 'Nil';}else{echo $nin;} ?></h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">ADDRESS</span>
                                                    <h5 class="mt-2"><?php if (!$address){echo 'Nil';}else{echo $address;} ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4 mb-3">
                                            <div class="col-md-8 col-lg-6 col-12">
                                                <span class="fs-6 font-weight-bold">REFERRAL AGENT/CODE</span>
                                                <h5 class="mt-2">
                                                    <?php
                                                        $user_id = $_GET['id'];
                                                        
                                                        $select_query = "SELECT affiliates.first_name, affiliates.last_name, affiliates.affiliate_id, affiliates.affiliate_code, users.affiliate_code, users.user_id FROM affiliates INNER JOIN users ON affiliates.affiliate_code = users.affiliate_code AND users.user_id = '$user_id'";
                                                        $result = mysqli_query($conn, $select_query);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $affiliate_id = $row['affiliate_id'];
                                                                $first_name = $row['first_name'];
                                                                $last_name = $row['last_name'];
                                                            
                                                    ?>
                                                    <?php echo $first_name; ?> <?php echo $last_name; ?>
                                                    ( <?php if (!$affiliate_code){echo 'Nil';}else{echo $affiliate_code;} ?> ) <a href="view-affiliate?id=<?php echo $affiliate_id; ?>" class="text-danger">view affiliate</a>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </h5>
                                            </div>

                                            <div class="col-md-4 col-lg-6 col-12 text-right">
                                                <div class="text-end">
                                                    <span class="fs-6 text-end font-weight-bold">ACCOUNT CREATION DATE</span>
                                                    <h5 class="mt-2"><?php echo date('j F, Y', $date); ?></h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-5 mb-4 no-print mb-10">
                                        <div class="text-center mx-auto">
                                            <button type="button" id="<? echo $user_id; ?>" class="view_id_card btn btn-dark" data-bs-toggle="modal" data-bs-target="#viewIDCardModal"> View ID Card</button>
                                            <a href="edit-user?id=<?php echo $user_id; ?>" class='btn btn-primary'>Edit <?php echo $first_name; ?>'s Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View ID Card modal start-->
                <div class="modal fade" id="viewIDCardModal" tabindex="-1" role="dialog" aria-labelledby="viewIDCardModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mt-0">
                        <div class="modal-content shadow-3 p-0 border-0" style="border-radius: 0.5rem;">
                            <div class="modal-body p-0" id="id_card_info">
                                <?php @include("./view/view-pastor.php");?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- View ID Card modal end-->


<?php include "./components/footer.php"; ?>