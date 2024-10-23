
@php
$slider = App\Models\Slider::orderBy('id', 'ASC')
   
    ->get();
@endphp
<div class="trending-area fix pt-25 gray-bg">
    <div>
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Trending Top -->
                    <div class="slider-active">
                        <!-- Single -->
                        @foreach ($slider as $sliders)

                        <div class="single-slider">
                            <div class="trending-top" style="position: relative;">
                                <div class="trend-top-img" style="position: relative;">
                                    <!-- Background Image -->
                                    <div class="background-img" style="background-image: url('{{ asset($sliders->image) }}'); width: 100%; height: 400px; background-size: cover; background-position: center;">
                                        <!-- Dark Overlay -->
                                        <div class="dark-overlay " style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
                                        
                                        <!-- Content -->
                                 
                                        <div class="trend-top-cap container" style="position: absolute; top: 30%; left: 5%;  z-index: 2; color: white; text-align: left;">
                                           
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms" style="color: white;">{{ $sliders->title }}</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">{!! $sliders->description !!}</p>

                                            {{-- <a href="#">অনলাইন ব্যাচ সম্পর্কে আরও জানুন > </a> --}}
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                                                    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
