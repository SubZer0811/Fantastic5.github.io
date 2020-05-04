<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>YummyFoods - Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar"  data-color="azure">
        <!-- <div class="sidebar" data-image="../assets/img/sidebar-5.jpg"> -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        YummyFoods
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="edit_menu.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Edit Menu</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="orders.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="reports.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="dashboard.php"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="dashboard.html" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->

            <div class="content">
        <div class="container-fluid">

        <header> Statistics</header>
        <br>
            <div class="row">
                

                <div class="col-md-4">
                    <a href="">
                    <div class="card ">
                        <div class="card-header huge-text">
                            <h4 class="card-title">Total Orders</h4>
                            <p class="card-category">Click here to view all Orders</p>
                        </div>
                        <div class="card-body text-danger text-center">
                            <h1 class="huge-text" style="color: orange;">
                                5
                                <?php //include 'num_tot_ord.php' ?>
                            </h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                    <div class="card ">
                        <div class="card-header huge-text">
                            <h4 class="card-title">Undelivered Orders</h4>
                            <p class="card-category">Click here to view all undelivered Orders</p>
                        </div>
                        <div class="card-body text-danger text-center">
                            <h1 class="huge-text" style="color: red;">
                                5
                                <?php //include 'num_undel_ord.php' ?>
                            </h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                    <div class="card ">
                        <div class="card-header huge-text">
                            <h4 class="card-title">Delivered Orders</h4>
                            <p class="card-category">Click here to view all delivered Orders</p>
                        </div>
                        <div class="card-body text-danger text-center">
                            <h1 class="huge-text" style="color: green;">
                                5
                                <?php //include 'num_del_ord.php' ?>
                            </h1>
                        </div>
                    </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                    <a href="">
                    <div class="card ">
                        <div class="card-header huge-text">
                            <h4 class="card-title">Total Revenue</h4>
                            <p class="card-category">Click here to view all completed orders</p>
                        </div>
                        <div class="card-body text-danger text-center">
                            <h1 class="huge-text" style="color: orange;">
                                Rs. 5
                                <?php //include 'tot_rev.php' ?>
                            </h1>
                        </div>
                    </div>
                    </a>
                </div>

            <div class="row">
                
                
            </div>
        </div>
    </div>

    
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
</html>
