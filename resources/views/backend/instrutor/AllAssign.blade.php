@extends('admin.admin_dashboard')
@section('main')
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Course Assign List</h4>
                    {{-- <a href="{{ route('AddCourse') }}" class="btn btn-primary float-right">Add Course </a> --}}
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                        
                          {{-- <th scope="col"> Course Name</th> --}}
                          <th scope="col"> Course Name</th>
                          <th scope="col"> Instructor Name</th>
                          <th scope="col"> Action</th>
                         
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($instructor as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            
                            <td>{{ $item['course']['title'] }}</td>
                            <td>{{ $item['user']['name'] }}</td>
                            <td>
                              <a href="{{ route('editAssign', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                              <a href="{{ route('deleteAssign', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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