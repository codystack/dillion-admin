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
                                <h1 class="mb-2 h2 font-weight-bold">Hey <?php echo $_SESSION['first_name']; ?>,</h1>
                                <h5 class="text-dark mt-0 lead" id="greet"></h5>
                            </div>
                        </div>
                    </div>
                    <?php include "./components/analytics.php";?>

                    <div class="row grid-margin">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-primary">Most Recent Investment</h4>
                                    <div class="table-responsive">
                                        <table id="recent-investment" class="table">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>David Grey</td>
                                                    <td>demo@gmail.com</td>
                                                    <td>$500</td>
                                                </tr>
                                            
                                            <tr>
                                                <td>2</td>
                                                <td>Stella Johnson</td>
                                                <td>testemail@yahoo.com</td>
                                                <td>$1,500</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Marina Michel</td>
                                                <td>test@yahoo.com</td>
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>John Doe</td>
                                                <td>testemail@gmail.com</td>
                                                <td>$350</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Peter Dobrick</td>
                                                <td>test@gmail.com</td>
                                                <td>$2,000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php include "./components/footer.php"; ?>