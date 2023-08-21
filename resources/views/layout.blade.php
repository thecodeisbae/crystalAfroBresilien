<!DOCTYPE html>
<html lang="en">
<head>

  <title>Crystal Afro Brésilien</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
  <link rel="stylesheet" href="dist/libs/prismjs/themes/prism-okaidia.min.css">
  <link id="themeColors" rel="stylesheet" href="dist/css/style.min.css" />
  <link id="themeColors" rel="stylesheet" href="dist/libs/sweetalert2/dist/sweetalert2.min.css" />
  <style>
       .b-radius{
            border: 1px solid gainsboro;
            padding: 1rem;
            border-radius: 0.5rem;
       }
  </style>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
      alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.html" class="text-nowrap logo-img">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg"
              class="dark-logo" width="180" alt="" />
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg"
              class="light-logo" width="180" alt="" />
          </a>
          <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8 text-muted"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Menu</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                  <i class="ti ti-chart-pie"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Fiches</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="/addPaper" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Créer</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Liste</span>
                  </a>
                </li>
              </ul>
            </li>


        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
          <div class="hstack gap-3">
            <div class="john-img">
              <img src="dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
            </div>
            <div class="john-title">
              <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
              <span class="fs-2 text-dark">Designer</span>
            </div>
            <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout"
              data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
              <i class="ti ti-power fs-6"></i>
            </button>
          </div>
        </div>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="ti ti-search"></i>
              </a>
            </li>
          </ul>
          <div class="d-block d-lg-none">
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
          </div>
          <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="p-2">
              <i class="ti ti-dots fs-7"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
              <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                <i class="ti ti-align-justified fs-7"></i>
              </a>
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                <li class="nav-item dropdown">
                  <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="user-profile-img">
                        <img src="dist/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="" />
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="profile-dropdown position-relative" data-simplebar>
                      <div class="py-3 px-7 pb-0">
                        <h5 class="mb-0 fs-5 fw-semibold">Profil</h5>
                      </div>
                      <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                        <img src="dist/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="" />
                        <div class="ms-3">
                          <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                          <span class="mb-1 d-block text-dark">Designer</span>
                          <p class="mb-0 d-flex text-dark align-items-center gap-2">
                            <i class="ti ti-mail fs-4"></i> info@modernize.com
                          </p>
                        </div>
                      </div>
                      <div class="message-body">
                        <a href="page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                          <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-account.svg" alt="" width="24" height="24">
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h6 class="mb-1 bg-hover-primary fw-semibold"> Mon Profil </h6>
                            <span class="d-block text-dark">Paramètres du compte</span>
                          </div>
                        </a>
                      </div>
                      <div class="d-grid py-4 px-7 pt-8">
                        <a href="/" class="btn btn-outline-primary">Déconnexion</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      @yield('content')
    </div>
</div>

<!--  Mobilenavbar -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
  aria-labelledby="offcanvasWithBothOptionsLabel">
  <nav class="sidebar-nav scroll-sidebar">
    <div class="offcanvas-header justify-content-between">
      <img
        src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
        alt="" class="img-fluid">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
      <ul id="sidebarnav">
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <span>
              <i class="ti ti-apps"></i>
            </span>
            <span class="hide-menu">Apps</span>
          </a>
          <ul aria-expanded="false" class="collapse first-level my-3">
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Email App</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                  <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                  <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item py-2">
              <a href="#" class="d-flex align-items-center">
                <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                  <img
                    src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg"
                    alt="" class="img-fluid" width="24" height="24">
                </div>
                <div class="d-inline-block">
                  <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                  <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                </div>
              </a>
            </li>
            <ul class="px-8 mt-7 mb-4">
              <li class="sidebar-item mb-3">
                <h5 class="fs-5 fw-semibold">Quick Links</h5>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Pricing Page</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Authentication Design</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Register Now</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">404 Error Page</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Notes App</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">User Application</a>
              </li>
              <li class="sidebar-item py-2">
                <a class="fw-semibold text-dark" href="#">Account Settings</a>
              </li>
            </ul>
          </ul>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
            <span>
              <i class="ti ti-message-dots"></i>
            </span>
            <span class="hide-menu">Chat</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
            <span>
              <i class="ti ti-calendar"></i>
            </span>
            <span class="hide-menu">Calendar</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="app-email.html" aria-expanded="false">
            <span>
              <i class="ti ti-mail"></i>
            </span>
            <span class="hide-menu">Email</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!--  Search Bar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content rounded-1">
      <div class="modal-header border-bottom">
        <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
        <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
          <i class="ti ti-x fs-5 ms-3"></i>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- ---------------------------------------------- -->
<!-- ---------------------------------------------- -->
<!-- Import Js Files -->
<!-- ---------------------------------------------- -->
<script src="dist/libs/jquery/dist/jquery.min.js"></script>
<script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
<script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- ---------------------------------------------- -->
<!-- core files -->
<!-- ---------------------------------------------- -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/app.init.js"></script>
<script src="dist/js/app-style-switcher.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<script src="dist/js/custom.js"></script>
<script src="dist/libs/prismjs/prism.js"></script>
<script src="dist/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- ---------------------------------------------- -->
<!-- current page js files -->
<!-- ---------------------------------------------- -->
<script src="dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_fr.js"></script>

<script src="dist/js/forms/form-wizard.js"></script>
<script>
    $(function (){
      var objToday = new Date(),
        weekday = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'),
        dayOfWeek = weekday[objToday.getDay()],
        domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return ""; a = parseInt((a + "").charAt(1)); return 1 == a ? "" : 2 == a ? "" : 3 == a ? "" : "" }(),
        dayOfMonth = today + ( objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() + domEnder,
        months = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"),
        curMonth = months[objToday.getMonth()],
        curYear = objToday.getFullYear(),
        curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
        curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
        curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
        curMeridiem = objToday.getHours() > 12 ? " PM" : " AM";

      var today = curHour + ":" + curMinute + "." + curSeconds + curMeridiem + " " + dayOfWeek + " " + dayOfMonth + " " + curMonth + " " + curYear;
      $('#showCurrentDate').html(today);
    });
  </script>
  @yield('script')
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2023 11:17:31 GMT -->
</html>
