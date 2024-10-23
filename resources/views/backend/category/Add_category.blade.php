@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Category Section</h4>
            </div>
            <form action="{{ route('StoreCategory') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              
              <div class="form-group ">
                <label for="inputEmail4">Enter Category: </label>
                <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Enter Category">
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