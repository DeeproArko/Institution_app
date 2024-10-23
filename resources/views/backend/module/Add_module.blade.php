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
            <form action="{{ route('StoreModule') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">


              <div class="form-group col-md-12">
                <label  class="form-label col-md-12">Select Course Module</label>
                <select class="form-select form-control col-md-12"  name="course_id">
                    <option selected disabled style="display: none">Select Course  Module</option>
                    @foreach ($course as $courses)
                    <option value="{{ $courses->id }}">{{ $courses->title }}
                    </option>
                @endforeach
                </select>
            </div>
              
                <div class="form-group ">
                  <label for="inputEmail4">Enter Title: </label>
                  <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Enter Title">
                </div>


                



                <div class="form-group ">
                  <label class="form-label ">Description:</label>
                 
                    <textarea class="summernote form-control" name="description"></textarea>
                  
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