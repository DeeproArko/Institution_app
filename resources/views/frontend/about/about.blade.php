@extends('frontend.master')
@section('main')
<style>
    .whitespace-pre {
        white-space: pre-line;
        text-align: left;
        line-height: 2;
    }
</style>
<div class="about-details ">
    <div class="container">
        <div class="row">
            <div class=" col-lg-8">
                <div class="about-details-cap mb-50 whitespace-pre" style="text-align: justify;">
                    <h4>Our Services</h4>
                    @foreach ($about as $key => $item)
                    {!! $item->description !!}
                    @endforeach
                    
                </div>
               
            </div>
            <div class=" col-lg-4">
                @foreach ($about as $key => $item)
                <div class="about-details-cap mb-50 mt-50">
                    <img src="{{ asset($item->image) }}" alt="" width="100%" height="200px"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection