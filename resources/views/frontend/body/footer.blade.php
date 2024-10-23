@php
                            $contact = App\Models\Contact::orderBy('id', 'ASC')
                               
                                ->get();
                            @endphp
<!-- Footer -->
<style>
    .footer {
        background-color: #f8f9fa;
        padding: 40px 0;
        color: #000;
    }
    .footer .footer-heading {
        font-weight: bold;
    }
    .footer .social-icons a {
        margin-right: 10px;
        font-size: 24px;
        color: #000;
    }
    .footer .contact-info {
        margin-bottom: 20px;
    }
    .footer .footer-bottom {
        text-align: center;
        padding-top: 20px;
        border-top: 1px solid #ddd;
    }
</style>
<footer class="footer">
<div class="container">
    <div class="row mb-3">
        <!-- Instructor Section -->
        <div class="col-md-3">
            @foreach ($contact as $item)
           <img style="width: 100px; margin-left: -3px; margin-top: -5px;" src="{{ asset($item->image) }}" alt="">
                
            @endforeach
            
        </div>
        
        <!-- Company Section -->
        <div class="col-md-3">
            <h5 class="footer-heading">Company</h5>
            <ul class="list-unstyled">
                
                <li><a style="color: #000"  href="{{ route('EmployeeRegister') }}">Join as a Teacher</a></li>
               
                <li><a style="color: #000"  href="#">Privacy policy</a></li>
                <li><a style="color: #000"  href="#">Refund policy</a></li>
         
            </ul>
        </div>

        <!-- Others Section -->
        <div class="col-md-3">
            <h5 class="footer-heading">Quick Links</h5>
            <ul class="list-unstyled">
                <li><a style="color: #000"  href="{{ route('contact') }}">Contact</a></li>
                <li><a style="color: #000"  href="{{ route('success') }}">Success Story</a></li>
                <li><a style="color: #000"  href="{{ route('about') }}">About Us</a></li>
               
            </ul>
        </div>
        @foreach ($contact as $item)
        <div class="col-md-3">
            <p><strong>Call Us:</strong> {{ $item->phone }} (24x7)</p>
            <p><strong>Whatsapp:</strong> {{ $item->phone }} (24x7)</p>
          
            <p><strong>Email Us:</strong> {{ $item->email }}</p>
        </div>
        @endforeach
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom row" >
        <p class="col-md-6">&copy;  2024 Copyright © Creative Zone IT. All rights reserved. </p>
        <p class="col-md-6">&copy; Developed By: <a style="color: #000" href="https://softsparksolution.com/" target="_blank">Soft Spark Solutions</a>  </p>
    </div>
</div>
</footer>
<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
    </div>
    <!-- Search model end -->