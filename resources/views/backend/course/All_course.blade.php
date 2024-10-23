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
                    <a href="{{ route('AddCourse') }}" class="btn btn-primary float-right">Add Course </a>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col"> Category Name</th>
                          <th scope="col"> Instructor Name</th>
                          
                          <th scope="col"> Name</th>
                          <th scope="col"> Price</th>
                          <th scope="col"> Duration</th>
                          <th scope="col"> Type</th>
                         
                          <th scope="col"> Start Date</th>
                        
                         
                        
                       
                         
                          <th scope="col">  Image</th>
                          
                         
                          <th scope="col">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($course as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td>{{ $item->user_name }}</td>
                           
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->duration }}</td>
                            <td>{{ $item->courseType }}</td>
                         
                            
                           
                            <td>{{ $item->stratdate }}</td>
                          
                            <td>
                                <img src="{{ asset($item->image) }}" style="width: 70%; height:40px; border-radius:5px;">
                            </td>
                                    
                            <td>
                                <a href="{{ route('EditCourse', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('DeleteCourse', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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