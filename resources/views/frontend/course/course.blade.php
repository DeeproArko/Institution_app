@extends('frontend.master')
@section('main')
<style>
 
    .card-price {
        font-weight: bold;
        color: #FABC3F; /* Green color for price */
    }
    .card-button {
        margin-top: 10px;
        background-color:  #ff2143; /* Green button */
        border-color:  #ff2143; 
    }
    .card-button:hover {
        background-color: #FABC3F; /* Darker green on hover */
        border-color: #FABC3F;
    }
</style>

<div class="container my-5">
<div class="text-center mb-5">
    <h2>{{ $courseName }} Courses</h2>
</div> 
<div class="row row-cols-1 row-cols-md-4 g-4">


    @foreach ($course as $item)
    <!-- Card 1 -->
    <div class="card" style="width: 18rem; margin-top: 20px; margin-bottom: 20px;  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 15px; /* Adjust the radius here */
    transition: transform 0.2s;">
    <img src="{{ asset($item->image) }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> {{ $item->title }}</h5>
      <h6 class="card-price">Course Price: ৳{{ $item->price }} BDT/-</h6>
      {{-- <p class="card-text">{!! $item->description !!}</p> --}}
      <a href="{{ route('courseDetails', $item->id) }}" class="btn btn-primary card-button">See Details</a>
    </div>
  </div>

   @endforeach
</div>

 <!-- button -->
 <div class="text-center mt-5">
  <!--<button style="border: none; background: #ff2143; padding: 10px  20px;">সব দেখুন ➝ </button> -->
  </div>  
</div>
@endsection