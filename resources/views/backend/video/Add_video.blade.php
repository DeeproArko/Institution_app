@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Video Section</h4>
            </div>
            <form action="{{ route('StoreVideo') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              
              <div class="row">
               
             
              <div class="form-group col-md-12">
                <label  class="form-label col-md-12">Select Course</label>
                <select class="form-select form-control col-md-12"  name="course_id">
                    <option selected disabled style="display: none">Select Course </option>
                    @foreach ($course as $courses)
                    <option value="{{ $courses->id }}">{{ $courses->title }}
                    </option>
                @endforeach
                </select>
            </div>
             
              <div class="form-group col-md-12">
                <label  class="form-label col-md-12">Select Module</label>
                <select class="form-select form-control col-md-12"  name="module_id">
                    <option selected disabled style="display: none">Select Module </option>
                    @foreach ($module as $modules)
                    <option value="{{ $modules->id }}">{{ $modules->title }}
                    </option>
                @endforeach
                </select>
            </div>
             
            <div class="form-group col-md-12">
              <label for="inputEmail4">Enter URL: </label>
              <input type="text" class="form-control" name="url" id="inputEmail4" placeholder="Enter URL">
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