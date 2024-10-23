@extends('admin.admin_dashboard')
@section('main')
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Video Section</h4>
                    <a href="{{ route('AddVideo') }}" class="btn btn-primary float-right">Add Video</a>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Course Name</th>
                          <th scope="col">Module title</th>
                          <th scope="col">URL</th>
                  
                          
                         
                          <th scope="col">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($video as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item['course']['title'] }}</td>
                            <td>{{ $item->module_title }}</td>
                            <td>{{ $item->url }}</td>
                            
                                    
                            <td>
                                <a href="{{ route('EditVideo', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('DeleteVideo', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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