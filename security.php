<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>

        <div class="container-fluid page-body-wrapper">
        
            <?php include "./components/side-navbar.php"; ?>


            <div class="main-panel"> 
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="mb-3 mb-lg-0">
                                <h1 class="mb-2 h2 fw-bold">Change Password</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8 mb-5 mx-auto">
                                            <div class="mt-3 py-2">
                                                <form class="forms-sample">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="oldPassword">Old Passowrd</label>
                                                                <input type="password" class="form-control" id="oldPassword" placeholder="Enter old password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password">New Password</label>
                                                                <input type="password" class="form-control" id="password" placeholder="Enter new password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="confirmPassword">Confirm New Password</label>
                                                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-lg mr-2">Change Password</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



<?php include "./components/footer.php"; ?>