@extends('admin.admin_dashboard')
@section('main')
<div class="main-content">
    <section class="section">
      <div class="row ">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15">Online Earning</h5>
                      <h2 class="mb-3 font-18">৳ {{ $incomeonline }}</h2>
                     
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
        <div class="col-xl-44 col-lg-4 col-md-44 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-statistic-4">
              <div class="align-items-center justify-content-between">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                    <div class="card-content">
                      <h5 class="font-15"> Offline Earning</h5>
                      <h2 class="mb-3 font-18">৳ {{ $incomeOffilne }}</h2>
                     
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

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card">
              <div class="card-statistic-4">
                <div class="align-items-center justify-content-between">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                      <div class="card-content">
                        <h5 class="font-15"> Total Earning</h5>
                        <h2 class="mb-3 font-18">৳ {{ $totalEarining }}</h2>
                       
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 pl-0">
                      <div class="banner-img">
                        <img src="{{ asset('backend/assets/img/banner/2.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        
      </div>
     
    </section>
    


    <section>
        <div class="col-12 col-md-12 col-lg-12">
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
                    @foreach ($inperson as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                       
                        <td>{{ $item->couse_title }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>-</td>
                        <td>{{ $item->course_price }}</td>
                    </tr>
              @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          
          </div>
    

    </section>
  </div>
  
@endsection