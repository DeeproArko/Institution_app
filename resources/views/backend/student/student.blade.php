@extends('admin.admin_dashboard')
@section('main')
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4> All Student </h4>
                    {{-- <a href="{{ route('AddCategory') }}" class="btn btn-primary float-right">Add Category</a> --}}
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Course Category </th>
                          <th scope="col">Course Title </th>
                          <th scope="col">Student Name </th>
                          <th scope="col">Student Phone </th>
                          <th scope="col">Student email </th>
                          <th scope="col">Course Price  </th>
                          <th scope="col">Action</th>
                          {{-- <th scope="col">Enter Student ID </th> --}}
                        
                         
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($student as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->course_category }}</td>
                            <td>{{ $item->course_title }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->amount }} BDT/-</td>
                            <td>
                              <a href="{{ route('invoice', $item->id ) }}" target="_blank">Download PDF</a>
                            </td>
                            {{-- <td><form method="post" action="{{ route('UpdateUser',$item->id) }}" class="form-horizontal">
                              @csrf
                             
                              <div class="form-group col-md-12 mt-2">
                               
                                <input type="text" class="form-control mb-2" name="userId"  id="inputEmail4" placeholder="Enter userId">
                                <button class="btn btn-primary mt-2" type="submit">Submit</button>
                              </div>
                           
                               
                            
                          </form>
                            </td> --}}
                      
                            
                            
                           
                                    
                           
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