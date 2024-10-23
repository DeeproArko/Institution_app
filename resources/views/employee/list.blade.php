@extends('employee.employee_dashboard')
@section('main')

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Your Course Details</h4>
                    
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Serial</th>
                         
                          <th scope="col">Student  Name</th>
                         
                         
                        </tr>
                      </thead>
                      <tbody>
                       
                         
                   @foreach($order as  $key => $item)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            
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