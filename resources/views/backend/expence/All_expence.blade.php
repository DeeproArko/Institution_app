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
                          <h5 class="font-15">Total Earning</h5>
                          <h2 class="mb-3 font-18">৳ {{ $totalEarining }}</h2>
                         
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="{{ asset('backend/assets/img/banner/1.png') }}" alt="">
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
                          <h5 class="font-15"> Total Expense</h5>
                          <h2 class="mb-3 font-18">৳ {{ $totalExpense }}</h2>
                         
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
                          <h5 class="font-15"> Revenue</h5>
                          <h2 class="mb-3 font-18">৳ {{ $revenue }}</h2>
                         
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
    
         
         
        </section>
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Expence Section</h4>
                    <a href="{{ route('AddExpence') }}" class="btn btn-primary float-right">Add Expences</a>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Expence Title</th>
                          <th scope="col">Expence Feild</th>
                          <th scope="col">Expence Amount</th>
                          
                          
                         
                          <th scope="col">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($expence as $key => $item)
                         
                   
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->feild }}</td>
                            <td>{{ $item->expence }}</td>
                               
                            <td>
                                <a href="{{ route('EditExpence', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('DeleteExpence', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
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