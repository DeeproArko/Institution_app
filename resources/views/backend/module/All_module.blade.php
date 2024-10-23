@extends('admin.admin_dashboard')
@section('main')
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Course Module Section</h4>
                    <a href="{{ route('AddModule') }}" class="btn btn-primary float-right">Add Course Module </a>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Course Name</th>
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          
                          
                         
                          <th scope="col">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($module as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item['course']['title'] }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            
                                    
                            <td>
                                <a href="{{ route('EditModule', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('DeleteModule', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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