<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Teacher</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('bootstrap/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('bootstrap/images/favicon.png')}}" />
  <title>@yield('tittle_page')</title>
  @yield('mycss')
</head>
<<<<<<< HEAD
=======
<style>
.dropdown-item{
font-size: 150%;
}

.dropdown-item:hover{
background-color:#999999	;
}
</style>
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
<<<<<<< HEAD
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('bootstrap/images/logo.svg')}}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('bootstrap/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
=======
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
<<<<<<< HEAD
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
=======
           <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">  
                    <img src="{{asset('bootstrap/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{asset('bootstrap/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="{{asset('bootstrap/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
<<<<<<< HEAD
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
=======
            </div> -->
          </li>
          <li class="nav-item dropdown">
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
<<<<<<< HEAD
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('bootstrap/images/faces/face28.jpg')}}" alt="profile" style="
              width: 160px;/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="History">
                <i class="ti-settings text-primary"></i>
             Properties
              </a>
=======
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
              <a class="dropdown-item" href="logout">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
        
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
<<<<<<< HEAD
    <div class="container-fluid page-body-wrapper">
=======
     <div class="container-fluid page-body-wrapper">
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
<<<<<<< HEAD
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
=======
              <i class="ti-thumb-up menu-icon"></i>
              <span class="menu-title">Đã duyệt</span>
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
<<<<<<< HEAD
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">UI Elements</span>
=======
              <i class="ti-thumb-down menu-icon"></i>
              <span class="menu-title">Chưa duyệt</span>
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
<<<<<<< HEAD
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/ui-features/buttons.html')}}">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/ui-features/typography.html')}}">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('bootstrap/pages/forms/basic_elements.html')}}">
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('bootstrap/pages/charts/chartjs.html')}}">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('bootstrap/pages/tables/basic-table.html')}}">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('bootstrap/pages/icons/themify.html')}}">
              <i class="ti-star menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/samples/login.html')}}"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/samples/login-2.html')}}"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/samples/register.html')}}"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/samples/register-2.html')}}"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/samples/lock-screen.html')}}"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('bootstrap/documentation/documentation.html')}}">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
=======
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/ui-features/buttons.html')}}">Đang xử lý</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('bootstrap/pages/ui-features/typography.html')}}">Không được duyệt</a></li>
              </ul>
            </div>
          </li>
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
          <section>
            @yield('body_content')
          </section>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
                </div>
                <div>
<<<<<<< HEAD
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button>
=======
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
                </div>
              </div>
            </div>
            
          </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
<<<<<<< HEAD
    </div>
=======
    </div> 
>>>>>>> 0ff4bc926c3240709fa33b681d80926d1c4a75a0
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('bootstrap/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('bootstrap/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('bootstrap/js/off-canvas.js')}}"></script>
  <script src="{{asset('bootstrap/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('bootstrap/js/template.js')}}"></script>
  <script src="{{asset('bootstrap/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('bootstrap/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  @yield('myscript')
</body>

</html>

