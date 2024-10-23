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
            <form action="{{ route('UpdateContact') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $contacts->id }}">
                <input type="hidden" name="old_image" value="{{ $contacts->image }}">
                
              <div class="card-body">
              
                <div class="form-group ">
                  <label for="inputEmail4">Enter Email: </label>
                  <input type="email" value="{{ $contacts->email }}" class="form-control" name="email" id="inputEmail4" placeholder="Enter Email">
                </div>


                <div class="form-group ">
                  <label for="inputEmail4">Enter Phone Number: </label>
                  <input type="text" value="{{ $contacts->phone }}" class="form-control" name="phone" id="inputEmail4" placeholder="Enter NUmber">
                </div>



                <div class="form-group ">
                  <label class="form-label ">Address:</label>
                 
                    <textarea class="summernote form-control" name="address">{{ $contacts->address }}</textarea>
                  
                </div>

             
                <div class="form-group ">
                  <label for="inputPassword4">Image</label>
                  <input type="file" class="form-control" id="inputPassword4" name="image">
                  <img  src="{{ asset($contacts->image) }}" alt="Admin"
                  style="width:100px; height: 100px;">
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