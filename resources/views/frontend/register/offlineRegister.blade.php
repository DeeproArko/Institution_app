<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/logo.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <style>
    .custom-button {
        background-color: #ff2143;
        margin-left: 100px;
        padding: 7px;
        border-radius: 10px;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .custom-button a {
        color: #fff;
        text-decoration: none;
    }

    .custom-button:hover {
        background-color: #FABC3F;
    }
</style>
</head>
<style>
    /* styles.css */
/* styles.css */
body {
  background-color: #f4f6f9;
}

.card {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
  padding: 30px;
}

h5 {
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.btn-block {
  padding: 10px;
  font-size: 16px;
}

</style>
@include('frontend.body.header')
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Create a New Account</h5>
            <form action="{{ route('store_user') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="registerName">Full Name</label>
                <input type="text" class="form-control" name="name" id="registerName" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="registerEmail">Email address</label>
                <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="registerPassword">Password</label>
                <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Create password">
              </div>
              <div class="form-group">
                <label for="registerConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="registerConfirmPassword" name="password" placeholder="Confirm password">
              </div>

              <div class="form-group">
                <label for="cars">Choose a car:</label>
                <select name="courses" id="cars">
                  <optgroup label="Swedish Cars">
                    @foreach ($courses as $item)
                    <option VALUE="{{ $item->id }}">{{ $item->title }}</option>
                  @endforeach
                  </optgroup>
                  
                </select>
              </div>

              
              <div class="text-center">
              <button type="submit" style="background: green; padding: 10px 40px; border: none; border-radius: 5px; cursor: pointer">Register</button>
              </div>
            </form>
            <div class="text-center mt-3">
              <p>Already have an account? <a style="color: blue" href="{{ route('login') }}">Please Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('frontend.body.footer')
</body>
<!-- JS here -->

<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('frontend/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('frontend/assets/js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('frontend/assets/js/contact.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/mail-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>