@extends('frontend.master')
@section('main')
<style>
  
    .card {
        text-align: center;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-home {
        margin-top: 50px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="card mt-5 mb-5">
            <h1 class="text-success">Congratulations!</h1>
            <p>You are successfully enrolled.</p>
            <a href="{{ route('index') }}" class="btn btn-primary btn-home">Go to Home</a>
        </div> 
    </div>
</div>
@endsection