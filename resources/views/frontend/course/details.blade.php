@extends('frontend.master')
@section('main')
<style>
    .course-img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    .course-title {
        font-size: 1.8rem;
        font-weight: bold;
    }
    .instructor-info {
        font-weight: bold;
    }
    .enroll-section {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .enroll-section .btn-enroll {
        background-color: #ff2143;
        color: white;
    }
    .accordion-button:not(.collapsed) {
        background-color: white;
        color: black;
    }
</style>
@foreach ($course as $item)
  

<!-- Container -->
<div class="container my-5">
<div class="row">
    <!-- Left Column: Course Details -->
    <div class="col-md-8">
        <div class="course-details">
            <h1 class="course-title">{{ $item->title }}</h1>

            <!-- Instructor Info -->
            <div class="d-flex align-items-center my-3">
                <img src="{{ asset($item->image) }}" class="rounded-circle me-3" alt="Instructor Picture" width="100">
                <div>
                    <p class="instructor-info">Instructor:  {{ $item->user_name }}</p>
                    <p class="text-muted">Course Category: {{ $item->category_name }}</p>
                </div>
            </div>

            <!-- Course Layout -->
            <div class="my-4">
                
                <h2 class="mt-4 mb-4">How the Course is Laid Out</h2>
                <p>{!! $item->short_details !!}</p>
            </div>

            <!-- What You Will Learn -->
            <div class="my-4">
                
                <h2 class="mt-4 mb-4">What You Will Learn</h2>
                <p>{!! $item->learn !!}</p>
            </div>
            
            <!-- Course Details (Accordion) -->
            <h2 class="mt-4 mb-4">Course Module</h2>


            <div class="accordion" id="accordionExample">

              @foreach ($module as $modules)
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $modules->id }}" aria-expanded="true" aria-controls="{{ $modules->id }}">
                      {{ $modules->title }}
                    </button>
                  </h2>
                  <div id="{{ $modules->id }}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      {!! $modules->description !!}
                    </div>
                  </div>
                </div>
            @endforeach



              </div>
        </div>
    </div>
   
    <!-- Right Column: Enrollment Information -->
    <div class="col-md-4">
        <div class="enroll-section">
           
            <h2 class="mt-4 mb-4 text-center">Enroll Now</h2>
            <hr>
            <p><strong>Price:</strong> ৳ {{ $item->price }} BDT/-</p>
            <p><strong>Course Duration:</strong> {{ $item->duration }}</p>
            <p><strong>Start Date:</strong> {{ $item->stratdate }}</p>
            <p><strong>Instructor:</strong> {{ $item->user_name }}</p>

            <!-- Enroll Button -->
            <div class="d-grid">
                <a href="{{ route('chcekout', $item->id) }}" class="btn btn-enroll btn-lg">Enroll Now</a>
            </div>

            <!-- Additional Info -->
            <hr>
            <p><strong>Course Type:</strong> {{ $item->courseType }}</p>
            <p><strong>Language:</strong> {{ $item->language }}</p>
            <p><strong>Certificate:</strong> Yes</p>
            <p><strong>Support:</strong> 24/7 Assistance</p>
        </div>
    </div>
</div>
</div>
@endforeach
@endsection