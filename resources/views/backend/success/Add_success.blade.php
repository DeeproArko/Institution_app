@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Success Story</h4>
            </div>
            <form action="{{ route('StoreSuccess') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              
                <div class="form-group ">
                  <label for="inputEmail4">Enter Name: </label>
                  <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Enter Name">
                </div>


                <div class="form-group ">
                  <label for="inputEmail4">Enter Designation: </label>
                  <input type="text" class="form-control" name="designation" id="inputEmail4" placeholder="Enter designation">
                </div>



                <div class="form-group ">
                  <label class="form-label ">Story Description:</label>
                 
                    <textarea class="summernote form-control" name="description"></textarea>
                  
                </div>

             
                <div class="form-group ">
                  <label for="inputPassword4">Image</label>
                  <input type="file" class="form-control" id="inputPassword4" name="image">
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