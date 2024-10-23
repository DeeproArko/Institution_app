@extends('admin.admin_dashboard')
@section('main')

<div class="main-content">
  <section class="section">
    <div class="row ">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total Student</h5>
                    <h2 class="mb-3 font-18">{{ $user }}</h2>
                   
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{ asset('backend/assets/img/banner/1.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15"> Total Course</h5>
                    <h2 class="mb-3 font-18">{{ $course }}</h2>
                   
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{ asset('backend/assets/img/banner/2.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total Instructor</h5>
                    <h2 class="mb-3 font-18">{{ $instructor }}</h2>
              
                     
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{ asset('backend/assets/img/banner/3.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-statistic-4">
            <div class="align-items-center justify-content-between">
              <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                  <div class="card-content">
                    <h5 class="font-15">Total Enrollment</h5>
                    <h2 class="mb-3 font-18">{{ $order }}</h2>
                  
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                  <div class="banner-img">
                    <img src="{{ asset('backend/assets/img/banner/4.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-12 col-md-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Online Registered</h4>
            
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Serial</th>
                 
                 
                  <th scope="col">Course Title</th>
                  <th scope="col">Name</th>
                  <th scope="col">email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Amount</th>
                
                  
                 
                 
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                           
                            <td>{{ $item->course_title }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->amount }}</td>
                            
                                    
                           
                        </tr>
                        @endforeach
              </tbody>
            </table>
          </div>
        </div>
      
      </div>





      <div class="col-12 col-md-12 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>In Person Registered</h4>
            
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Serial</th>
                  <th scope="col">Course Title</th>
                  <th scope="col">Name</th>
                  <th scope="col">email</th>
                  
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($inperson as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                           
                            <td>{{ $item->couse_title }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            
                            <td>{{ $item->course_price }}</td>
                        </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      
      </div>
    </div>
   
  </section>
  
</div>

  @endsection