@extends('admin.admin_dashboard')
@section('main')




<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Course Module Section</h4>
            </div>
            <form action="{{ route('UpdateModule') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $module->id }}">
                
                
              <div class="card-body">


                <div class="mb-3">
                  <label  class="form-label">Select Course Module</label>
                  <select class="form-select"  name="course_id">
                      <option selected disabled>Select Course Module</option>
                      @foreach ($course as $courses)
                      <option value="{{ $courses->id }}"
                        {{ $courses->id == $module->course_id ? 'selected' : '' }}>
                        {{ $courses->title }}</option>
                  @endforeach
                  </select>
              </div>



                <div class="form-group ">
                  <label for="inputEmail4">Enter Title: </label>
                  <input type="text" value="{{ $module->title }}" class="form-control" name="title" id="inputEmail4" placeholder="Enter title">
                </div>


                



                <div class="form-group ">
                  <label class="form-label ">Description:</label>
                 
                    <textarea class="summernote form-control" name="description">{{ $module->description }}</textarea>
                  
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