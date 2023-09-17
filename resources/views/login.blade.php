<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Crystal Afro Brésilien</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Core Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link  id="themeColors"  rel="stylesheet" href="dist/css/style.min.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="/" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                    <span class="h4">Crystal Afro Brésilien</span>
                    {{-- <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt=""> --}}
                  </a>

                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Identifiant</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">

                      <a class="text-primary fw-medium" href="/forget">Mot de passe oublié ?</a>
                    </div>
                    <a href="javascript:void(0);" id="loginBtn" onclick="login()" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Connexion</a>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  Import Js Files -->
    <script src="dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>

    <script src="dist/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function login()
        {
            var email = $('#email').val();
            var password = $('#password').val();
            if(email != '' && password != '')
            {
                $('#loginBtn').html('Patienter <i class="fa fa-spinner fa-spin"></i>');
                $.ajax({
                    type: "POST",
                    url: "/loginAjax",
                    data: {email:email,password:password},
                    success: function (response) {
                        var val = response.split('||');
                        console.log(val[0])
                        if(val[0] == 'false')
                        {
                            $('#loginBtn').html('Connexion');
                            toastr.error(val[1]);
                        }else{
                            toastr.success(val[1]);
                            setTimeout(() => {
                                location.href = '/dashboard';
                            }, 1000);
                        }
                    }
                });
            }else{
                toastr.error('Tous les champs sont requis');
            }
        }
    </script>
  </body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jul 2023 11:17:59 GMT -->
</html>
