                    <div class="row">
                        <div class="col-md-12 col-lg grid-margin stretch-card">
                            <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Users</h6>
                                    <?php
                                        $countUsers = mysqli_query($conn, "SELECT user_id FROM users");
                                        echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countUsers), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg grid-margin stretch-card">
                            <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Properties</h6>
                                    <?php
                                        $countProperties = mysqli_query($conn, "SELECT property_id FROM properties");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countProperties), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg grid-margin stretch-card">
                            <div class="card bg-gradient-dark text-white text-center card-shadow-warning">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Total Affiliates</h6>
                                    <?php
                                        $countProperties = mysqli_query($conn, "SELECT affiliate_id FROM affiliates");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countProperties), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg grid-margin stretch-card">
                            <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Property Support</h6>
                                    <?php
                                        $countContact = mysqli_query($conn, "SELECT enquiry_id FROM property_enquiry");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countContact), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg grid-margin stretch-card">
                            <div class="card bg-gradient-info text-white text-center card-shadow-warning">
                                <div class="card-body">
                                    <h6 class="font-weight-normal">Contact Support</h6>
                                    <?php
                                        $countContact = mysqli_query($conn, "SELECT contact_id FROM contact_enquiry");
                                    echo "<h2 class='mb-0'>".number_format(mysqli_num_rows($countContact), 0, '.', ',')."</h2>"
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>