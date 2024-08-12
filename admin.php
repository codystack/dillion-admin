<?php
include "./components/header.php";
include "./components/topnavbar.php";
?>
        <div class="container-fluid page-body-wrapper">
        
          <!-- Left Navbar -->
          <nav class="sidebar sidebar-offcanvas bg-primary navbg" id="sidebar">
              <ul class="nav">
                  <li class="nav-item">
                      <a class="nav-link" href="admin">
                          <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                          <span class="menu-title">Dashboard</span>
                      </a>
                  </li>
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="deposit">
                          <i class="mdi mdi-wallet menu-icon"></i>
                          <span class="menu-title">Deposit</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#withdrawalModal" data-bs-toggle="modal" data-bs-target="#withdrawalModal">
                          <i class="mdi mdi-cash-multiple menu-icon"></i>
                          <span class="menu-title">Withdraw</span>
                      </a>
                  </li> -->
                  <li class="nav-item">
                      <a class="nav-link" href="users">
                          <i class="mdi mdi-account-multiple menu-icon"></i>
                          <span class="menu-title">Users</span>
                      </a>
                  </li>
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="support">
                          <i class="mdi mdi-comment-question-outline menu-icon"></i>
                          <span class="menu-title">Support</span>
                      </a>
                  </li> -->

                  <div class="text-center mt-6">
                      <button class="btn btn-white text-primary">
                          <i class="mdi mdi-logout menu-icon"></i> 
                          Log Out
                      </button>
                  </div>
              </ul>
          </nav>


          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12 mb-4">
                      <div class="mb-3 mb-lg-0">
                          <h1 class="mb-2 h2 fw-bold">Hey Don Tee,</h1>
                          <h5 class="text-dark mt-0 lead" id="greet"></h5>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                  <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Total Investment</h6>
                      <h2 class="mb-0"><span class="smart">USDT</span>12,000</h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                  <div class="card bg-gradient-danger text-white text-center card-shadow-danger">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Total Profits</h6>
                      <h2 class="mb-0"><span class="smart">USDT</span>2,000</h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                  <div class="card bg-gradient-warning text-white text-center card-shadow-warning">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Site Visitors</h6>
                      <h2 class="mb-0">2,893</h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                  <div class="card bg-gradient-info text-white text-center card-shadow-info">
                    <div class="card-body">
                      <h6 class="font-weight-normal">Refferals</h6>
                      <h2 class="mb-0">105</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body mb-4">
                      <h4 class="card-title text-primary">Investment</h4>
                      <canvas id="pieChart" width="736" height="368" style="display: block; height: 184px; width: 368px;" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body mb-4">
                      <h4 class="card-title text-primary">Cash Out</h4>
                      <canvas id="barChart" width="736" height="368" style="display: block; height: 184px; width: 368px;" class="chartjs-render-monitor"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row grid-margin">
                <div class="col-lg-6 col-sm-12">
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

                <div class="col-lg-6 col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title text-primary">Upcoming Cashout</h4>
                      <div class="table-responsive">
                        <table id="upcoming-cashout" class="table">
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

            <!-- Footer -->
            <footer class="footer">
                <div class="mx-auto justify-content-center justify-content-sm-between">
                    <span class="text-center text-center d-block">&copy; <script>document.write(new Date().getFullYear());</script> Pinecrest. All Rights Reserved</span>
                </div>
            </footer>

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
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/data-table.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.js"></script>
    
    <script>
        function copyToClipboard() {
          var copyText = document.getElementById("refferalLink").value;
          navigator.clipboard.writeText(copyText).then(() => {
              // Alert the user that the action took place.
              // Nobody likes hidden stuff being done under the hood!
              alert("Copied to clipboard");
          });
        }
    </script>
    <script>
        //Greet User
        var time = new Date().getHours();
        if (time < 4) {
            greeting = "You should be in bed 🙄!";
        }  else if (time < 12) {
            greeting = "Good morning, wash your hands 🌤";
        } else if (time < 16) {
            greeting = "It's lunch 🍛 time, what's on the menu!";
        } else {
            greeting = "Good Evening 🌙, how was your day?";
        }
        document.getElementById("greet").innerHTML = greeting;
    </script>
    
</body>

</html>
