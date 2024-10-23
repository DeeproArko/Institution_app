@extends('admin.admin_dashboard')
@section('main')
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Slider Section</h4>
                    {{-- <a href="{{ route('AddSlider') }}" class="btn btn-primary float-right">Add New Slider</a> --}}
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Slider Image</th>
                          
                         
                          <th scope="col">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sliders as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" style="width: 70%; height:40px; border-radius:5px;">
                            </td>
                                    
                            <td>
                                <a href="{{ route('EditSlider', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                {{-- <a href="{{ route('DeleteSlider', $item->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}
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