<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="assets/css/svg-weather.css" rel="stylesheet">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        @include("template.navbar",[$data,$activeElement])
        <!-- Side-Nav-->
        @extends("template.Side-Nav")

        <div class="content-wrapper">
            <!-- Container-fluid starts -->
            <!-- Main content starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <!-- 4-blocks row start -->
                <div class="row dashboard-header">

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Barrios</span>
                            <h2 class="dashboard-total-products">{{ $totales['barrios'] }}</h2>
                            Cantidad de barrios
                            <div class="side-box">
                                <i class="ti-signal text-warning-color"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Comunas</span>
                            <h2 class="dashboard-total-products">{{ $totales['comunas'] }}</h2>
                            Cantidad de comunas
                            <div class="side-box ">
                                <i class="ti-gift text-primary-color"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Bancos</span>
                            <h2 class="dashboard-total-products"><span>{{ $totales['bancos'] }}</span></h2>
                            Cantidad de bancos
                            <div class="side-box">
                                <i class="ti-direction-alt text-success-color"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Colegios</span>
                            <h2 class="dashboard-total-products"><span>{{ $totales['colegios'] }}</span></h2>
                            Cantidad de colegios
                            <div class="side-box">
                                <i class="ti-rocket text-danger-color"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Universidades</span>
                            <h2 class="dashboard-total-products"><span>{{ $totales['universidades'] }}</span></h2>
                            Cantidad de univesidades
                            <div class="side-box">
                                <i class="ti-direction-alt text-success-color"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Hospitales</span>
                            <h2 class="dashboard-total-products"><span>{{ $totales['hospitales'] }}</span></h2>
                            Cantidad de hospitales
                            <div class="side-box">
                                <i class="ti-rocket text-danger-color"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Mensajerias</span>
                            <h2 class="dashboard-total-products"><span>{{ $totales['mensajerias'] }}</span></h2>
                            Cantidad de mensajerias
                            <div class="side-box">
                                <i class="ti-rocket text-danger-color"></i>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- 4-blocks row end -->

                <!-- 1-3-block row start -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="user-block-2">
                                <img class="img-fluid" src="assets/images/widget/user-1.png" alt="user-header">
                                <h5>{{ $data->nombre }}</h5>
                                <h6>{{ $data->email }}</h6>
                            </div>
                            <div class="card-block">
                                <div class="user-block-2-activities">
                                    <div class="user-block-2-active">
                                        <i class="icofont icofont-clock-time"></i>Cedula
                                        <label class="label label-primary">{{ $data->cedula }}</label>
                                    </div>
                                </div>
                                <div class="user-block-2-activities">
                                    <div class="user-block-2-active">
                                        <i class="icofont icofont-users"></i> Celular
                                        <label class="label label-primary">{{ $data->celular }}</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button"
                                        class="btn btn-warning waves-effect waves-light text-uppercase m-r-30">
                                        Follows
                                    </button>
                                    <button type="button"
                                        class="btn btn-primary waves-effect waves-light text-uppercase">
                                        Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Bar chart</h5>
                            </div>
                            <div class="card-block">
                                <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 grid-item">
                        <div class="card">
                            <div class="card-block horizontal-card-img d-flex">
                                <img class="media-object img-circle" src="assets/images/avatar-3.png"
                                    alt="Generic placeholder image">
                                <div class="d-inlineblock  p-l-20">
                                    <h6>Josephin Doe</h6>
                                    <a href="#">contact@admin.com</a>
                                </div>
                                <h6 class="txt-warning rotate-txt">Designer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 grid-item">
                        <div class="card">
                            <div class="card-block horizontal-card-img d-flex">
                                <img class="media-object img-circle" src="assets/images/lockscreen.png"
                                    alt="Generic placeholder image">
                                <div class="d-inlineblock  p-l-20">
                                    <h6>Josephin Doe</h6>
                                    <a href="#">contact@admin.com</a>
                                </div>
                                <h6 class="txt-danger rotate-txt">Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 1-3-block row end -->

                <!-- 2-1 block start -->
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table m-b-0 photo-table">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th>Photo</th>
                                                <th>Project</th>
                                                <th>Completed</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <img class="img-fluid img-circle" src="assets/images/avatar-2.png"
                                                        alt="User">
                                                </th>
                                                <td>Appestia Project
                                                    <p><i class="icofont icofont-clock-time"></i>Created 14.9.2016</p>
                                                </td>
                                                <td>
                                                    <span class="pie" style="display: none;">226,134</span><svg
                                                        class="peity" height="30" width="30">
                                                        <path
                                                            d="M 15.000000000000002 0 A 15 15 0 1 1 4.209902994920235 25.41987555688496 L 15 15"
                                                            fill="#2196F3"></path>
                                                        <path
                                                            d="M 4.209902994920235 25.41987555688496 A 15 15 0 0 1 14.999999999999996 0 L 15 15"
                                                            fill="#ccc"></path>
                                                    </svg>
                                                </td>
                                                <td>50%</td>
                                                <td>October 21, 2015</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img class="img-fluid img-circle" src="assets/images/avatar-4.png"
                                                        alt="User">
                                                </th>
                                                <td>Contract with belife Company
                                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                </td>
                                                <td>
                                                    <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                        class="peity" height="30" width="30">
                                                        <path
                                                            d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                            fill="#2196F3"></path>
                                                        <path
                                                            d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                            fill="#ccc"></path>
                                                    </svg>
                                                </td>
                                                <td>70%</td>
                                                <td>November 21, 2015</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img class="img-fluid img-circle" src="assets/images/avatar-1.png"
                                                        alt="User">
                                                </th>
                                                <td>Web Consultancy project
                                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                </td>
                                                <td>
                                                    <span class="pie" style="display: none;">1,4</span><svg
                                                        class="peity" height="30" width="30">
                                                        <path
                                                            d="M 15.000000000000002 0 A 15 15 0 0 1 29.265847744427305 10.36474508437579 L 15 15"
                                                            fill="#2196F3"></path>
                                                        <path
                                                            d="M 29.265847744427305 10.36474508437579 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                            fill="#ccc"></path>
                                                    </svg>
                                                </td>
                                                <td>40%</td>
                                                <td>September 21, 2015</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img class="img-fluid img-circle" src="assets/images/avatar-3.png"
                                                        alt="User">
                                                </th>
                                                <td>Contract with belife Company
                                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                </td>
                                                <td>
                                                    <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                        class="peity" height="30" width="30">
                                                        <path
                                                            d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                            fill="#2196F3"></path>
                                                        <path
                                                            d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                            fill="#ccc"></path>
                                                    </svg>
                                                </td>
                                                <td>70%</td>
                                                <td>November 21, 2015</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img class="img-fluid img-circle" src="assets/images/avatar-1.png"
                                                        alt="User">
                                                </th>
                                                <td>Contract with belife Company
                                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                </td>
                                                <td>
                                                    <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                        class="peity" height="30" width="30">
                                                        <path
                                                            d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                            fill="#2196F3"></path>
                                                        <path
                                                            d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                            fill="#ccc"></path>
                                                    </svg>
                                                </td>
                                                <td>70%</td>
                                                <td>November 21, 2015</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <img class="img-fluid img-circle" src="assets/images/avatar-2.png"
                                                        alt="User">
                                                </th>
                                                <td>Contract with belife Company
                                                    <p><i class="icofont icofont-clock-time"></i>Created 20.10.2016</p>
                                                </td>
                                                <td>
                                                    <span class="pie" style="display: none;">0.52/1.561</span><svg
                                                        class="peity" height="30" width="30">
                                                        <path
                                                            d="M 15.000000000000002 0 A 15 15 0 0 1 28.00043211809656 22.482564048691025 L 15 15"
                                                            fill="#2196F3"></path>
                                                        <path
                                                            d="M 28.00043211809656 22.482564048691025 A 15 15 0 1 1 14.999999999999996 0 L 15 15"
                                                            fill="#ccc"></path>
                                                    </svg>
                                                </td>
                                                <td>70%</td>
                                                <td>November 21, 2015</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Bar chart</h5>
                            </div>
                            <div class="card-block">
                                <div id="piechart" style="min-width: 250px; height: 460px; margin: 0 auto"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2-1 block end -->
            </div>
            <!-- Main content ends -->
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jqurey -->
    <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

    <!-- Required Fremwork -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Scrollbar JS-->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

    <!--classic JS-->
    <script src="assets/plugins/classie/classie.js"></script>

    <!-- notification -->
    <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

    <!-- Sparkline charts -->
    <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

    <!-- Counter js  -->
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

    <!-- Echart js -->
    <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.min.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard.js"></script>
    <script type="text/javascript" src="assets/pages/elements.js"></script>
    <script src="assets/js/menu.min.js"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>

</body>

</html>
