<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
   <head>
      <!-- Meta Data -->
      <meta charset="UTF-8">
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title> Invest Admin  </title>
      <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
      <meta name="Author" content="Spruko Technologies Private Limited">
      <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{asset('userpanel/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">
      <link rel="stylesheet" href="{{asset('userpanel/assets/libs/swiper/swiper-bundle.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
   </head>
   <style>
      body {
      font-family: "Rubik", sans-serif !important;
      }
   </style>
   <!--
      `body` tag options:
      
        Apply one or more of the following classes to to the body tag
        to get the desired effect
      
        * sidebar-collapse
        * sidebar-mini
      -->
   <body>
      <!-- Start Switcher -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
               <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                  <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                     type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                  <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                     type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
               </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                  tabindex="0">
                  <div class="">
                     <p class="switcher-style-head">Theme Color Mode:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-light-theme">
                              Light
                              </label>
                              <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                 checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-dark-theme">
                              Dark
                              </label>
                              <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Directions:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-ltr">
                              LTR
                              </label>
                              <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-rtl">
                              RTL
                              </label>
                              <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Navigation Styles:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-vertical">
                              Vertical
                              </label>
                              <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                 checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-horizontal">
                              Horizontal
                              </label>
                              <input class="form-check-input" type="radio" name="navigation-style"
                                 id="switcher-horizontal">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="navigation-menu-styles">
                     <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                     <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-menu-click">
                              Menu Click
                              </label>
                              <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                 id="switcher-menu-click">
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-menu-hover">
                              Menu Hover
                              </label>
                              <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                 id="switcher-menu-hover">
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-icon-click">
                              Icon Click
                              </label>
                              <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                 id="switcher-icon-click">
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-icon-hover">
                              Icon Hover
                              </label>
                              <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                 id="switcher-icon-hover">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidemenu-layout-styles">
                     <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                     <div class="row switcher-style gx-0 pb-2 gy-2">
                        <div class="col-sm-6">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-default-menu">
                              Default Menu
                              </label>
                              <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                 id="switcher-default-menu" checked>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-closed-menu">
                              Closed Menu
                              </label>
                              <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                 id="switcher-closed-menu">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-icontext-menu">
                              Icon Text
                              </label>
                              <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                 id="switcher-icontext-menu">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-icon-overlay">
                              Icon Overlay
                              </label>
                              <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                 id="switcher-icon-overlay">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-detached">
                              Detached
                              </label>
                              <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                 id="switcher-detached">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-double-menu">
                              Double Menu
                              </label>
                              <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                 id="switcher-double-menu">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Page Styles:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-regular">
                              Regular
                              </label>
                              <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                 checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-classic">
                              Classic
                              </label>
                              <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-modern">
                              Modern
                              </label>
                              <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Layout Width Styles:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-full-width">
                              Full Width
                              </label>
                              <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                 checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-boxed">
                              Boxed
                              </label>
                              <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Menu Positions:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-menu-fixed">
                              Fixed
                              </label>
                              <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                 checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-menu-scroll">
                              Scrollable
                              </label>
                              <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Header Positions:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-header-fixed">
                              Fixed
                              </label>
                              <input class="form-check-input" type="radio" name="header-positions"
                                 id="switcher-header-fixed" checked>
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-header-scroll">
                              Scrollable
                              </label>
                              <input class="form-check-input" type="radio" name="header-positions"
                                 id="switcher-header-scroll">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="">
                     <p class="switcher-style-head">Loader:</p>
                     <div class="row switcher-style gx-0">
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-loader-enable">
                              Enable
                              </label>
                              <input class="form-check-input" type="radio" name="page-loader"
                                 id="switcher-loader-enable">
                           </div>
                        </div>
                        <div class="col-4">
                           <div class="form-check switch-select">
                              <label class="form-check-label" for="switcher-loader-disable">
                              Disable
                              </label>
                              <input class="form-check-input" type="radio" name="page-loader"
                                 id="switcher-loader-disable" checked>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                  <div>
                     <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                 id="switcher-menu-light">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                 id="switcher-menu-dark" checked>
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                 id="switcher-menu-primary">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                 id="switcher-menu-gradient">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-transparent"
                                 data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                 type="radio" name="menu-colors" id="switcher-menu-transparent">
                           </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                     </div>
                     <div class="theme-colors">
                        <p class="switcher-style-head">Header Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                 id="switcher-header-light" checked>
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                 id="switcher-header-dark">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                 id="switcher-header-primary">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                 id="switcher-header-gradient">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                 data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                 id="switcher-header-transparent">
                           </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                     </div>
                     <div class="theme-colors">
                        <p class="switcher-style-head">Theme Primary:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary-1" type="radio"
                                 name="theme-primary" id="switcher-primary">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary-2" type="radio"
                                 name="theme-primary" id="switcher-primary1">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                 id="switcher-primary2">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                 id="switcher-primary3">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                 id="switcher-primary4">
                           </div>
                           <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                              <div class="theme-container-primary"></div>
                              <div class="pickr-container-primary"></div>
                           </div>
                        </div>
                     </div>
                     <div class="theme-colors">
                        <p class="switcher-style-head">Theme Background:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-bg-1" type="radio"
                                 name="theme-background" id="switcher-background">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-bg-2" type="radio"
                                 name="theme-background" id="switcher-background1">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                 id="switcher-background2">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-bg-4" type="radio"
                                 name="theme-background" id="switcher-background3">
                           </div>
                           <div class="form-check switch-select me-3">
                              <input class="form-check-input color-input color-bg-5" type="radio"
                                 name="theme-background" id="switcher-background4">
                           </div>
                           <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                              <div class="theme-container-background"></div>
                              <div class="pickr-container-background"></div>
                           </div>
                        </div>
                     </div>
                     <div class="menu-image mb-3">
                        <p class="switcher-style-head">Menu With Background Image:</p>
                        <div class="d-flex flex-wrap align-items-center switcher-style">
                           <div class="form-check switch-select m-2">
                              <input class="form-check-input bgimage-input bg-img1" type="radio"
                                 name="theme-background" id="switcher-bg-img">
                           </div>
                           <div class="form-check switch-select m-2">
                              <input class="form-check-input bgimage-input bg-img2" type="radio"
                                 name="theme-background" id="switcher-bg-img1">
                           </div>
                           <div class="form-check switch-select m-2">
                              <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                 id="switcher-bg-img2">
                           </div>
                           <div class="form-check switch-select m-2">
                              <input class="form-check-input bgimage-input bg-img4" type="radio"
                                 name="theme-background" id="switcher-bg-img3">
                           </div>
                           <div class="form-check switch-select m-2">
                              <input class="form-check-input bgimage-input bg-img5" type="radio"
                                 name="theme-background" id="switcher-bg-img4">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="d-grid canvas-footer"> 
                  <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a> 
               </div>
            </div>
         </div>
      </div>
      <!-- End Switcher -->
      <!-- Loader -->
      <div id="loader" >
         <img src="{{asset('userpanel/assets/images/media/loader.svg')}}" alt="">
      </div>
      <!-- Loader -->
      <div class="page">
      <!-- app-header -->
      <header class="app-header">
         <!-- Start::main-header-container -->
         <div class="main-header-container container-fluid">
            <!-- Start::header-content-left -->
            <div class="header-content-left">
               <!-- Start::header-element -->
               <div class="header-element">
                  <div class="horizontal-logo">
                     <a href="index.html" class="header-logo">
                     <img src="{{asset('pollux.png')}}" alt="logo" class="desktop-logo">
                     <img src="{{asset('pollux.png')}}" alt="logo" class="toggle-logo">
                     <img src="{{asset('pollux.png')}}" alt="logo" class="desktop-dark">
                     <img src="{{asset('pollux.png')}}" alt="logo" class="toggle-dark">
                     <img src="{{asset('pollux.png')}}" alt="logo" class="desktop-white">
                     <img src="{{asset('pollux.png')}}" alt="logo" class="toggle-white">
                     </a>
                  </div>
               </div>
               <script>
                  function toggleclick(){
                     const openview=document.getElementById('openview');
                     const iconview=document.getElementById('iconview');
                     openview.classList.toggle("open");
                     iconview.classList.toggle("open");
                     
                  }
                  </script>
               <!-- End::header-element -->
               <!-- Start::header-element -->
               <div class="header-element">
                  <!-- Start::header-link -->
                  <a aria-label="Hide Sidebar" onclick="toggleclick()" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                  <!-- End::header-link -->
               </div>
               <!-- End::header-element -->
            </div>
            <!-- End::header-content-left -->
            <!-- Start::header-content-right -->
            <div class="header-content-right">
               <!-- Start::header-element -->
               <div class="header-element header-search">
                  <!-- <a class="header-link">
                     @if(auth()->user()->is_active== 1 && auth()->user()->is_banned==1)
                     <i class="fas fa-solid fa-wallet"></i> &nbsp;<span class="op-10 fs-13">WithDraw Amount:&nbsp;</span> <strong>${{auth()->user()->withdraw_amount}}</strong>
                     @else
                     <i class="text-danger fas fa-solid fa-wallet"></i> &nbsp;<strong class="text-danger">$0</strong>
                     @endif
                     </a> -->
                  <!--           
                     <a class="header-link">  
                       
                       @if(auth()->user()->is_active== 1 && auth()->user()->is_banned==1)
                       <i class="fas fa-solid fa-wallet"></i> &nbsp;<span class="op-10 fs-13">Wallet Amount:&nbsp;</span> <strong>${{\App\Models\User::walletamount()}}</strong>
                       @else
                       <i class="text-danger fas fa-solid fa-wallet"></i> &nbsp;<strong class="text-danger">$0</strong>
                       @endif
                     </a> -->
               </div>
               <!-- End::header-element -->
               <!-- Start::header-element -->
               <!-- End::header-element -->
               <!-- Start::header-element -->
               <div class="header-element header-theme-mode">
                  <!-- Start::header-link|layout-setting -->
                  <a href="javascript:void(0);" class="header-link layout-setting">
                     <span class="light-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bx bx-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                     </span>
                     <span class="dark-layout">
                        <!-- Start::header-link-icon -->
                        <i class="bx bx-sun header-link-icon"></i>
                        <!-- End::header-link-icon -->
                     </span>
                  </a>
                  <!-- End::header-link|layout-setting -->
               </div>
               <div class="header-element header-fullscreen">
                  <!-- Start::header-link -->
                  <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                  </a>
                  <!-- End::header-link -->
               </div>
               <!-- End::header-element -->
               <!-- Start::header-element -->
               <div class="header-element">
                  <!-- Start::header-link|dropdown-toggle -->
                  <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                     <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0">
                           <img src="{{asset('userpanel/assets/images/faces/9.jpg')}}" alt="img" width="32" height="32" class="rounded-circle">
                        </div>
                        <div class="d-sm-block d-none">
                           <p class="fw-semibold mb-0 lh-1">{{auth()->user()->first_name}}</p>
                           <span class="op-7 fw-normal d-block fs-11">User</span>
                        </div>
                     </div>
                  </a>
                  <!-- End::header-link|dropdown-toggle -->
                  <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                     <li><a class="dropdown-item d-flex" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                     <li><a class="dropdown-item d-flex" href="mail.html"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success-transparent ms-auto">25</span></a></li>
                     <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                     <li><a class="dropdown-item d-flex" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                     <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                     <li><a class="dropdown-item d-flex" href="chat.html"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                     <li><a class="dropdown-item d-flex" href="sign-in-cover.html"><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                  </ul>
               </div>
               <!-- End::header-element -->
               <!-- Start::header-element -->
               <div class="header-element">
                  <!-- Start::header-link|switcher-icon -->
                  <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                  <i class="bx bx-cog header-link-icon"></i>
                  </a>
                  <!-- End::header-link|switcher-icon -->
               </div>
               <!-- End::header-element -->
            </div>
            <!-- End::header-content-right -->
         </div>
         <!-- End::main-header-container -->
      </header>
      <!-- /app-header -->
      <!-- Start::app-sidebar -->
      <aside class="app-sidebar sticky"   id="sidebar">
         <!-- Start::main-sidebar-header -->
         <div class="main-sidebar-header" style="background:whitesmoke">
            <a href="#" class="header-logo">
            <img src="{{asset('pollux.png')}}" alt="logo" class="desktop-logo">
            <img src="{{asset('pollux.png')}}" alt="logo" class="toggle-logo">
            <img src="{{asset('pollux.png')}}" alt="logo" class="desktop-dark">
            <img src="{{asset('pollux.png')}}" alt="logo" class="toggle-dark">
            <img src="{{asset('pollux.png')}}" alt="logo" class="desktop-white">
            <img src="{{asset('pollux.png')}}" alt="logo" class="toggle-white">
            </a>
         </div>
         <!-- End::main-sidebar-header -->
         <style>
            .app-sidebar .slide-menu.child1 .side-menu__item:before{
            visibility:hidden;
            }
            ul.menutoglle{
               display: none;
            }
            ul.open{
               display: block !important;
            }
         </style>
         <!-- Start::main-sidebar -->
         <div class="main-sidebar" id="sidebar-scroll">
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
               <div class="slide-left" id="slide-left">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                     <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                  </svg>
               </div>
               <ul class="main-menu menutoglle open" id="openview">
                  <!-- Start::slide__category -->
                  <li class="slide__category"><span class="category-name">Main</span></li>
                  <!-- End::slide__category -->
                  <!-- Start::slide -->
                  <li class="slide has-sub {{\Request::segment(1)=='user-dashboard'  ? 'open active' : ''}} {{\Request::segment(1)=='user-profile'  ? 'open active' : ''}} {{\Request::segment(1)=='user-wallet-history'  ? 'open active' : ''}} {{\Request::segment(1)=='user-withdraw'  ? 'open active' : ''}} {{\Request::segment(1)=='user-deposit'  ? 'open active' : ''}} {{\Request::segment(1)=='user-subscription'  ? 'open active' : ''}}">
                     <!-- <a href="javascript:void(0);" class="side-menu__item {{\Request::segment(1)=='user-dashboard'  ? 'active' : ''}} {{\Request::segment(1)=='user-profile'  ? 'active' : ''}} {{\Request::segment(1)=='user-wallet-history'  ? 'active' : ''}} {{\Request::segment(1)=='user-withdraw'  ? 'active' : ''}} {{\Request::segment(1)=='deposit'  ? 'active' : ''}} {{\Request::segment(1)=='user-subscription'  ? 'active' : ''}}">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">7</span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a> -->
                     <ul class="slide-menu child1" style="list-style:none">
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-wallet"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;"  class="side-menu__item">@if(auth()->user()->is_active== 1 && auth()->user()->is_banned==1)
                           WITHDRAW BALANCE (${{auth()->user()->withdraw_amount}})
                           @else
                           $0
                           @endif</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-wallet"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;"  class="side-menu__item">@if(auth()->user()->is_active== 1 && auth()->user()->is_banned==1)
                           WALLET BALANCE (${{\App\Models\User::walletamount()}})
                           @else
                           $0
                           @endif</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                            
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-gauge"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user-dashboard')}}"  class="side-menu__item {{\Request::segment(1)=='user-dashboard'  ? 'active' : ''}}">Dashboard</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-dollar-sign"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.subscription')}}"  class="side-menu__item {{\Request::segment(1)=='user-subscription'  ? 'active' : ''}}">Subscription</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-money-bill-transfer"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.deposit')}}"  class="side-menu__item {{\Request::segment(1)=='deposit'  ? 'active' : ''}}">Deposit</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-money-bill-transfer"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.withdraw')}}"  class="side-menu__item {{\Request::segment(1)=='user-withdraw'  ? 'active' : ''}}">Withdraw</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-landmark"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;"  href="{{route('user.wallet-history')}}"  class="side-menu__item {{\Request::segment(1)=='user-wallet-history'  ? 'active' : ''}}"> Wallet History</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-user"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user-profile')}}"  class="side-menu__item {{\Request::segment(1)=='user-profile'  ? 'active' : ''}}">Profile</a>
                        </li>
                        <li class="slide d-flex align-items-center">
                           <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-right-from-bracket"></i><a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.logout')}}"  class="side-menu__item">Logout</a>
                        </li>
                     </ul>
                  </li>
                  <!-- End::slide -->
               </ul>
               <ul class="main-menu menutoglle" id="iconview">
               <li class="slide d-flex align-items-center">
                            
                            <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user-dashboard')}}"  class="side-menu__item {{\Request::segment(1)=='user-dashboard'  ? 'active' : ''}}"><i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-gauge"></i></a>
                         </li>
                         <li class="slide d-flex align-items-center">
                            <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.subscription')}}"  class="side-menu__item {{\Request::segment(1)=='user-subscription'  ? 'active' : ''}}"><i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-dollar-sign"></i></a>
                         </li>
                         <li class="slide d-flex align-items-center">
                            <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.deposit')}}"  class="side-menu__item {{\Request::segment(1)=='deposit'  ? 'active' : ''}}"><i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-money-bill-transfer"></i></a>
                         </li>
                         <li class="slide d-flex align-items-center">
                           <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.withdraw')}}"  class="side-menu__item {{\Request::segment(1)=='user-withdraw'  ? 'active' : ''}}"> <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-money-bill-transfer"></i></a>
                         </li>
                         <li class="slide d-flex align-items-center">
                           <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;"  href="{{route('user.wallet-history')}}"  class="side-menu__item {{\Request::segment(1)=='user-wallet-history'  ? 'active' : ''}}"> <i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-landmark"></i></a>
                         </li>
                         <li class="slide d-flex align-items-center">
                            <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user-profile')}}"  class="side-menu__item {{\Request::segment(1)=='user-profile'  ? 'active' : ''}}"><i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-user"></i></a>
                         </li>
                         <li class="slide d-flex align-items-center">
                            <a style="padding-left: 10px;font-family: 'Rubik', sans-serif !important;" href="{{route('user.logout')}}"  class="side-menu__item"><i style="font-size:15px;color:var(--menu-prime-color);" class="fa-solid fa-right-from-bracket"></i></a>
                         </li>
               </ul>
               <div class="slide-right" id="slide-right">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                     <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                  </svg>
               </div>
            </nav>
            <!-- End::nav -->
         </div>
         <!-- End::main-sidebar -->
      </aside>