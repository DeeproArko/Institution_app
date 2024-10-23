@extends('admin.admin_dashboard')
@section('main')




<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>About Section</h4>
            </div>
            <form action="{{ route('UpdateAbout') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $about->id }}">
                <input type="hidden" name="old_image" value="{{ $about->image }}">
                <div class="card-body">
                
                    
                    <div class="form-group ">
                      <label class="form-label "> Description:</label>
                     
                        <textarea class="summernote form-control" name="description">{{ $about->description }}</textarea>
                      
                    </div>

                
                    <div class="form-group ">
                        <label for="inputPassword4">Image</label>
                        <input type="file" class="form-control" id="inputPassword4" name="image">
                        <img  src="{{ asset($about->image) }}" alt="Admin"
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