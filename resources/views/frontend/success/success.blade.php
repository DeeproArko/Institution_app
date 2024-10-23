@extends('frontend.master')
@section('main')



<div class="container">
    <div class="row">
        @foreach ($success as $item)
      
        <div class="card" style="width: 18rem; margin-top: 20px; margin-bottom: 20px;  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 15px; /* Adjust the radius here */
            transition: transform 0.2s;">
            <img class="card-img-top" src="{{ asset($item->image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <h6 class="card-title">{{ $item->designation }}</h6>
              <p class="card-text">{!! $item->description !!}</p>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
              
        @endforeach
    </div>
</div>

@endsection