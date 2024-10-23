@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
              <h4>Course Section</h4>
            </div>
            <form action="{{ route('StoreCourse') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">


              <div class="form-group col-md-12">
                <label  class="form-label col-md-12">Select Category</label>
                <select class="form-select form-control col-md-12"  name="category_id">
                    <option selected disabled style="display: none">Select Course Category</option>
                    @foreach ($category as $categorys)
                    <option value="{{ $categorys->id }}">{{ $categorys->title }}
                    </option>
                @endforeach
                </select>
            </div>



              <div class="form-group col-md-12">
                <label  class="form-label col-md-12">Select Instructor</label>
                <select class="form-select form-control col-md-12"  name="user_name">
                    <option selected disabled style="display: none">Select Course Instructor</option>
                    @foreach ($user as $categorys)
                    <option value="{{ $categorys->name }}">{{ $categorys->name }}
                    </option>
                @endforeach
                </select>
            </div>


                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Enter Course Title: </label>
                    <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Enter Title">
                  </div>
  
  
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Course Price: </label>
                    <input type="number" class="form-control" name="price" id="inputEmail4" placeholder="Enter Price">
                  </div>
                </div>
                <div class="form-group ">
                  <label for="inputEmail4">Course Youtube Link: </label>
                  <input type="text" class="form-control" name="url" id="inputEmail4" placeholder="Enter URL">
                </div>
              <div class="row">
                
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Course Duration: </label>
                  <input type="text" class="form-control" name="duration" id="inputEmail4" placeholder="Enter URL">
                </div>

                <div class="form-group col-md-6">


                  <div class="form-group col-md-12">
                    <label  class="form-label col-md-12">Course Type: (Online/Offline)</label>
                    <select class="form-select form-control col-md-12"  name="courseType">
                        <option selected disabled style="display: none">Select Course Category</option>
                       
                        <option >Online
                        </option>

                        <option >Offline
                        </option>
                  
                    </select>
                </div>



                 
                </div>
              </div>
                
               <div class="row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Course Language: </label>
                  <input type="text" class="form-control" name="language" id="inputEmail4" placeholder="Enter Language">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Course Start Date: </label>
                  <input type="date" class="form-control" name="stratdate" id="inputEmail4" placeholder="Enter Start Date">
                </div>
               </div>



                {{-- <div class="form-group ">
                  <label class="form-label ">Course Details:</label>
                 
                    <textarea class="summernote form-control" name="details"></textarea>
                  
                </div> --}}

               <div class="row">
                  <div class="form-group col-md-6">
                    <label class="form-label ">How the Course is Laid Out:</label>
                  
                      <textarea class="summernote form-control" name="short_details"></textarea>
                    
                  </div>

                  <div class="form-group col-md-6">
                    <label class="form-label ">What You Will Learn:</label>
                  
                      <textarea class="summernote form-control" name="learn"></textarea>
                    
                  </div> 
               </div>

               <div class="form-group row">
               
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" name="new">
                  <label class="form-check-label" for="defaultCheck1">
                    New Course
                  </label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" id="defaultCheck3" name="popular">
                  <label class="form-check-label" for="defaultCheck3">
                    Hot Course
                  </label>
                </div>
                <div class="form-check col-md-4">
                  <input class="form-check-input" type="checkbox" id="defaultCheck4" name="year">
                  <label class="form-check-label" for="defaultCheck4">
                    All Year Course
                  </label>
                </div>
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