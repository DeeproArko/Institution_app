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
                          <th scope="col">Course Paid  </th>
                          
                          <th scope="col">Action</th>
                          {{-- <th scope="col">Enter Student ID </th> --}}
                        
                         
                          
                         
                        </tr>

                        @foreach ($students as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->course_category }}</td>
                            <td>{{ $item->couse_title }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->course_price }} BDT/-</td>
                            <td>
                                <form method="post" action="{{ route('offlinePayment') }}">
                                    @csrf
                                    <div class="form-group ">
                                        <input type="hidden" class="form-control" name="userId" id="inputEmail4" value="{{ $item->id }}">
                                        <input type="text" class="form-control" name="paid" id="inputEmail4" placeholder="Enter amount">
                                      </div>
                                    <div class="form-group ">
                                       
                                        <button type="submit" class="btn btn-primary">Save</button>
                                      </div>
                                </form>
                            </td>
                            <td>
                              <a href="{{ route('invoiceforUser', $item->id ) }}" target="_blank">Download PDF</a>
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
                      </thead>
                      <tbody>
                       
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