@extends('admin.admin_dashboard')
@section('main')




<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Expence Section</h4>
            </div>
            <form action="{{ route('UpdateExpence') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $expence->id }}">
                {{-- <input type="hidden" name="old_image" value="{{ $about->image }}"> --}}
                <div class="card-body">
                
                    
                  <div class="form-group ">
                    <label for="inputEmail4">Enter Expence Title: </label>
                    <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Enter Title"  value="{{ $expence->title }}">
                  </div>
    
    
                  <div class="form-group ">
                    <label for="inputEmail4">Enter Expence Feild: </label>
                    <input type="text" class="form-control" name="feild" id="inputEmail4" placeholder="Enter Feild"  value="{{ $expence->feild }}">
                  </div>
    
                  <div class="form-group ">
                    <label for="inputEmail4">Enter Expence Amount: </label>
                    <input type="number" class="form-control" name="expence" id="inputEmail4" placeholder="Enter amount"  value="{{ $expence->expence }}">
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