@extends('admin.admin_dashboard')
@section('main')




<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Course Section</h4>
            </div>
            <form action="{{ route('UpdateCourse') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $course->id }}">
                <input type="hidden" name="old_image" value="{{ $course->image }}">
                
              <div class="card-body">
              

                  <div class="form-group col-md-12">
                  <label  class="form-label">Select Category</label>
                  <select class="form-select form-control col-md-12"  name="category_id">
                      <option selected disabled>Select Course Category</option>
                      @foreach ($category as $categorys)
                      <option value="{{ $categorys->id }}"
                        {{ $categorys->id == $course->category_id ? 'selected' : '' }}>
                        {{ $categorys->title }}</option>
                  @endforeach
                  </select>
              </div>
  
                  <div class="form-group col-md-12">
                  <label  class="form-label">Select Instructor</label>
                  <select class="form-select form-control col-md-12"  name="user_name">
                      <option selected disabled>Select Course Instructor</option>
                      @foreach ($user as $categorys)
                      <option value="{{ $categorys->name }}"
                        {{ $categorys->name == $course->user_name ? 'selected' : '' }}>
                        {{ $categorys->name }}</option>
                  @endforeach
                  </select>
              </div>
  

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Enter Course Title: </label>
                  <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Enter Title" value="{{ $course->title }}">
                </div>


                <div class="form-group col-md-6">
                  <label for="inputEmail4">Course Price: </label>
                  <input type="text" class="form-control" name="price" id="inputEmail4" placeholder="Enter Price" value="{{ $course->price }}">
                </div>
              </div>
              <div class="form-group ">
                <label for="inputEmail4">Course Youtube Link: </label>
                <input type="text" class="form-control" name="url" id="inputEmail4" placeholder="Enter URL" value="{{ $course->url }}">
              </div>
            <div class="row">
              
              <div class="form-group col-md-6">
                <label for="inputEmail4">Course Duration: </label>
                <input type="text" class="form-control" name="duration" id="inputEmail4" placeholder="Enter duration" value="{{ $course->duration }}">
              </div>

              <div class="form-group col-md-6">
                <label for="inputEmail4">Course Type: (Online/Offline)</label>
                <input type="text" class="form-control" name="courseType" id="inputEmail4" placeholder="Enter TYpe" value="{{ $course->courseType }}">
              </div>
            </div>
              
             <div class="row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Course Language: </label>
                <input type="text" class="form-control" name="language" id="inputEmail4" placeholder="Enter Language" value="{{ $course->language }}">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Course Start Date: </label>
                <input type="date" class="form-control" name="stratdate" id="inputEmail4" placeholder="Enter Start Date" value="{{ $course->stratdate }}">
              </div>
             </div>



             

             <div class="row">
                <div class="form-group col-md-6">
                  <label class="form-label ">How the Course is Laid Out:</label>
                
                    <textarea class="summernote form-control" name="short_details">{{ $course->short_details }}</textarea>
                  
                </div>

                <div class="form-group col-md-6">
                  <label class="form-label ">What You Will Learn:</label>
                
                    <textarea class="summernote form-control" name="learn">{{ $course->short_details }}</textarea>
                  
                </div> 
             </div>
                <div class="form-group ">
                  <label for="inputPassword4">Image</label>
                  <input type="file" class="form-control" id="inputPassword4" name="image">
                  <img  src="{{ asset($course->image) }}" alt="Admin"
                  style="width:100px; height: 100px;">
                </div>
              
            
          


            <div class="form-group row">
               
              <div class="form-check col-md-4">
                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="new" value="{{ $course->new }}" checked>
                <label class="form-check-label" for="defaultCheck1">
                  New Course
                </label>
              </div>
              <div class="form-check col-md-4">
                <input class="form-check-input" type="checkbox" id="defaultCheck3" name="popular" value="{{ $course->popular }}" checked>
                <label class="form-check-label" for="defaultCheck3">
                  Popular Course
                </label>
              </div>
              <div class="form-check col-md-4">
                <input class="form-check-input" type="checkbox" id="defaultCheck4" name="year" value="{{ $course->year }}" checked>
                <label class="form-check-label" for="defaultCheck4">
                  All Year Course
                </label>
              </div>
            </div>
          </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection