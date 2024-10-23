@extends('employee.employee_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Course Content Upload </h4>
            </div>
            <form action="{{ route('storeContent') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">

<input type="hidden" name="course_id" value="{{ $course_name }}" />

                <div class="form-group ">
                    <label >Module Title</label>
                    <input type="text" class="form-control"  name="title" placeholder="Enter title">
                  </div>


              <div class="form-group ">
                <label class="form-label "> Description:</label>
               
                  <textarea class="summernote form-control" name="description"></textarea>
                
              </div>
             

             
               
                <div class="form-group ">
                  <label >Module URL</label>
                  <input type="text" class="form-control"  name="url" placeholder="Enter URL">
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