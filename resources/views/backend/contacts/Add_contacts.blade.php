@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Contact Section</h4>
            </div>
            <form action="{{ route('StoreContact') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              
                <div class="form-group ">
                  <label for="inputEmail4">Enter Email: </label>
                  <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Enter Email">
                </div>


                <div class="form-group ">
                  <label for="inputEmail4">Enter Phone Number: </label>
                  <input type="text" class="form-control" name="phone" id="inputEmail4" placeholder="Enter NUmber">
                </div>



                <div class="form-group ">
                  <label class="form-label ">Address:</label>
                 
                    <textarea class="summernote form-control" name="address"></textarea>
                  
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