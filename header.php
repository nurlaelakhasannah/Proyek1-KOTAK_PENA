<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kotak Pena</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="dist/css/orgchart.css">
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="dist/css/fullcalendar.min.css">
        <link rel="stylesheet" href="plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="plugins/c3/c3.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />  
        <style>
            body {
                margin-top: 50px;                
                font-size: 12px;
                font-family: /*"Lucida Grande", Helvetica, Arial, Verdana, sans-serif, */Comic Sans MS;
            }

            #calendar {
                width: 700px;
                margin: 0 auto;
            }

            .response {
                height: 60px;
            }

            .success {
                background: #cdf3cd;
                padding: 10px 60px;
                border: #c3e6c3 1px solid;
                display: inline-block;
            }
        </style>
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">                        
                         <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand">
                            <div class="logo-img">
                               <img src="img/logo kopen.png" class="header-brand-img" alt="lavalite" width="100%"> 
                            </div>
                            <span class="text">Kotak Pena</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Kotak Menu</div>
                                <div class="nav-item">
                                    <a href="dashboard.php"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item ">
                                    <a href="manageuser.php"><i class="ik ik-user"></i><span>Manage User</span> 
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="manageproker.php"><i class="ik ik-layers"></i><span>Manage Proker</span> 
                                    </a>
                                </div>                                
                                <div class="nav-item ">
                                    <a href="managearsip.php"><i class="ik ik-layers"></i><span>Manage Arsip</span> 
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a href="manage_schedule.php"><i class="ik ik-calendar"></i><span>Schedule</span> 
                                    </a>
                                </div>                                
                                <div class="nav-item">
                                    <a href="proses/proseslogout.php"><i class="ik ik-power"></i><span>Logout</span> 
                                    </a>
                                </div>                                
                            </nav>
                        </div>
                    </div>
                </div>