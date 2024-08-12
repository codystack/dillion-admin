<?php
    require_once "./auth/account.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login :: Admin Dashboard</title>

    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/d-favicon.png" />
</head>
<body class="sidebar-fixed">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            <div class="brand-logo">
                                <img src="./assets/images/d-logo.png" alt="logo">
                            </div>
                            <h4 class="font-weight-bold h3">Welcome back!</h4>
                            <h6 class="font-weight-light mb-4">Happy to see you again!</h6>
                            <?php
                            if (isset($_SESSION['error_message'])) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert-message text-center">
                                        <?php
                                        echo $_SESSION['error_message'];
                                        session_destroy();
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
                                <div class="alert alert-success" role="alert">
                                    <div class="alert-message text-center">
                                        <?php echo $_SESSION['success_message']; ?>
                                    </div>
                                </div>
                                <?php
                                unset($_SESSION['success_message']);
                            }
                            ?>
                            <form class="pt-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-account-outline text-primary"></i>
                                        </span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg border-left-0" name="username" required placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="mdi mdi-lock-outline text-primary"></i>
                                        </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0" required name="password" placeholder="Password">                        
                                    </div>
                                </div>
                                <div class="my-3">
                                    <button class="button btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="login_btn" onclick="this.classList.toggle('button--loading')"><span class="button__text">LOGIN</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Dillion Property&reg;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
</body>

</html>

