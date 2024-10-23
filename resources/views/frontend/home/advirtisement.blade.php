
<section style="background-color: #070b11;">

    <div class="container">
    <div class="weekly2-news-area pt-50 pb-30 ">
            <div class="container">
                <div class="weekly2-wrapper" >
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="slider-wrapper" style="background-color: #070b11;">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4 style="font-size: 25px; color: #fff">New Courses</h4>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex" >



                                            @foreach ($new as $news)
                                            
                                            <!-- Single -->
                                            <div class="weekly2-single" style="width: 100% !important;">
                                                <div class="weekly2-img">
                                                    <img style="width: 100%; height: 300px;" src="{{ asset($news->image) }}" alt="">
                                                </div>
                                                <div class="weekly2-caption" style="color: #fff">
                                                    <h4 style="color: #fff"><a href="{{ route('courseDetails', $news->id) }}">{{ $news->title }}</a></h4>
                                                    <a href="{{ route('courseDetails', $news->id) }}" style="color: #fff" class="btn btn-primary">See Details</a>
                                                </div>
                                            </div> 
                                            
                                                
                                            @endforeach
                                            




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    
    </section>