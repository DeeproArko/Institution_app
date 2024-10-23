@extends('admin.admin_dashboard')
@section('main')


<div class="main-content">


<section class="section">
    <div class="section-body">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
          
          <div class="card">
            <div class="card-header">
                <h4>Edit Course Assign Section</h4>
            </div>
            <form action="{{ route('updateAssign') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $instructor->id }}">
            <div class="card-body">



                <div class="form-group col-md-12">
                    <label  class="form-label col-md-12">Select Instructor</label>
                    <select class="form-select form-control col-md-12"  name="instructor_id">
                        <option selected disabled style="display: none">Select Instructor </option>
                        @foreach ($user as $instructors)
                        <option value="{{ $instructors->id }}"
                            {{ $instructors->name == $instructor->user_id ? 'selected' : '' }}>
                            {{ $instructors->name }}</option>
                    @endforeach
                    </select>
                </div>



              <div class="form-group col-md-12">
                <label  class="form-label col-md-12">Select Course</label>
                <select class="form-select form-control col-md-12"  name="course_id">
                    <option selected disabled style="display: none">Select Course </option>
                    @foreach ($course as $courses)
                    <option value="{{ $courses->id }}"
                        {{ $courses->title == $instructor->course_id ? 'selected' : '' }}>
                        {{ $courses->title }}</option>
                @endforeach
                </select>
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