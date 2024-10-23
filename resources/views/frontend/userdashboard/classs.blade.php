@extends('frontend.userdashboard.user_dashboard')
@section('main')
<div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row">


           @foreach ($module as $modules)
           <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article">
              <div class="article-header">
                <div class="article-image" >
                    <iframe width="100%" height="100%" src="{{ $modules->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
               
              </div>
              <div class="article-details">
                <h6>{{ $modules->module_title }}</h6>
                
              </div>
            </article>
          </div>
           @endforeach 
          
          
        </div>
      </div>
    </section>
   
  </div>
@endsection