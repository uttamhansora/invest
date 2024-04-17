<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> YNEX - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    
    <!-- Favicon -->
    <link rel="icon" href="{{asset('userpanel/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="{{asset('userpanel/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <!-- Main Theme Js -->
    <script src="{{asset('userpanel/assets/js/main.js')}}"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="{{asset('userpanel/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{asset('userpanel/assets/css/styles.min.css')}}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{asset('userpanel/assets/css/icons.css')}}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{asset('userpanel/assets/libs/node-waves/waves.min.css')}}" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="{{asset('userpanel/assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{asset('userpanel/assets/libs/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('userpanel/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{asset('userpanel/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">


<link rel="stylesheet" href="{{asset('userpanel/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">

<link rel="stylesheet" href="{{asset('userpanel/assets/libs/swiper/swiper-bundle.min.css')}}">

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <li class="nav-item">

          <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
          <!-- <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div> -->
        </li>

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
        <a class="nav-link">
            
            @if(auth()->user()->is_active== 1 && auth()->user()->is_banned==1)
            <i class="fas fa-solid fa-wallet"></i> &nbsp;<strong>WithDraw Amount ${{auth()->user()->withdraw_amount}}</strong>
            @else
            <i class="text-danger fas fa-solid fa-wallet"></i> &nbsp;<strong class="text-danger">$0</strong>
            @endif
          </a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link">
            
            @if(auth()->user()->is_active== 1 && auth()->user()->is_banned==1)
            <i class="fas fa-solid fa-wallet"></i> &nbsp;<strong>Wallet Amount ${{\App\Models\User::walletamount()}}</strong>
            @else
            <i class="text-danger fas fa-solid fa-wallet"></i> &nbsp;<strong class="text-danger">$0</strong>
            @endif
          </a>
        </li>
        <li class="nav-item dropdown">

          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      </ul>
    </nav>
    <!-- /.navbar -->