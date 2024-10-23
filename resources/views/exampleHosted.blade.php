
@extends('frontend.master')
@section('main')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

<div class="container">
    <div class="py-5 text-center">
        <h2>{{ $course_category }}</h2>

        {{-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. We have provided this
            sample form for understanding EasyCheckout (Popup) Payment integration with SSLCommerz.</p> --}}
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Course Details: </span>
                {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
            </h4>
            {{-- <h6></h6> --}}
            <img src="{{ asset($course_image) }}" alt="" width="100%" height="200px"/>
            <ul class="list-group mb-3 mt-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Course Category</h6>
                        {{-- <small class="text-muted">Brief description</small> --}}
                    </div>
                    <span class="text-muted">{{ $course_category }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Course Name</h6>
                        {{-- <small class="text-muted">Brief description</small> --}}
                    </div>
                    <span class="text-muted">{{ $course_title }}</span>
                </li>
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (BDT)</span>
                    <strong>{{ $course_price }} TK</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form method="POST" action="{{ route('pay') }}" class="needs-validation" novalidate>
@csrf
                <input type="hidden"  name="course_title" value="{{ $course_title }}"/>
                <input type="hidden"  name="course_category" value="{{ $course_category }}"/>
                <input type="hidden"  name="course_price" value="{{ $course_price }}"/>
                <input type="hidden"  name="course_instructorID" value="{{ $instructor_id }}"/>
                <input type="hidden"  name="user_id" value="{{ $user_id }}"/>
                <input type="hidden"  name="course_id" value="{{ $course_id }}"/>
                
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full name</label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder=""
                                required>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Mobile</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile"
                               required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" name="customer_email" class="form-control" id="email"
                           placeholder="you@example.com"  required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control" name="address" id="address" placeholder="1234 Main St"
                           required></textarea>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

               

               
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <input type="hidden" value="1200" name="amount" id="total_amount" required/>
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                        address</label>
                </div>
                
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                        token="if you have any token validation"
                        postdata="your javascript arrays or objects which requires in backend"
                        order="If you already have the transaction generated for current order"
                        endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                </button>
            </form>
        </div>
    </div>

   
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

@endsection