<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Instructor Registration</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/bundles/jquery-selectric/selectric.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('backend/assets/img/favicon.ico') }}' />
</head>

<body>
    <div id="app">
        <section class="section">
          <div class="container mt-5">
            <div class="row">
              <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="card card-primary">
                  <div class="card-header">
                    <h4>Instructor Registration</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{ route('EmployeeStore') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="frist_name"> Name</label>
                          <input id="frist_name" type="text" class="form-control" name="name" autofocus>
                        </div>
                        <div class="form-group col-6">
                          <label for="last_name">User Name</label>
                          <input id="last_name" type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group col-6">
                          <label for="last_name">Phone</label>
                          <input id="last_name" type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group col-6">
                          <label for="last_name">Designation</label>
                          <input id="last_name" type="text" class="form-control" name="designation">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email">
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="password" class="d-block">Password</label>
                          <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                            name="password">
                          <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                          </div>
                        </div>
                        <div class="form-group col-6">
                          <label for="password2" class="d-block">Password Confirmation</label>
                          <input id="password2" type="password" class="form-control" name="password-confirm">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                          <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                          Register
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="mb-4 text-muted text-center">
                    Already Registered? <a href="{{ route('employee.login') }}">Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('backend/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('backend/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/assets/js/page/auth-register.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>