@extends('employee.employee_dashboard')
@section('main')
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Your Course Details</h4>
                    
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Course Name</th>
                          <th scope="col"> Image</th>
                         
                          <th scope="col">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                       
                         
                   @foreach($course_list as  $key => $item)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                            <td>{{ $item->course_title }}</td>
                            <td>  <img src="{{ asset($item->course_image) }}" style="width: 70%; height:40px; border-radius:5px;"></td>
                           <td>
                            <a class="btn btn-primary" href="{{ route('studentList',$item->course_id) }}">Student List</a>
                            <a class="btn btn-success" href="{{ route('courseContent',$item->course_id) }}">Add Module</a>
                           </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              
              </div>
              
            </div>
          </div>
        </section>
      </div>
@endsection