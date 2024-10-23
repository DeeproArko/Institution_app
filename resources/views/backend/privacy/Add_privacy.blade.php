@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Privacy Section</h4>
            </div>
            <form action="{{ route('StorePrivacy') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              
              <div class="form-group ">
                <label class="form-label "> Description:</label>
               
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