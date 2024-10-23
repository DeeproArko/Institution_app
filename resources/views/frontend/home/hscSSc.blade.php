<style>
    .customs-button {
        background-color: #ff2143;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    .customs-button a {
        color: #fff;
        text-decoration: none;
    }

    .customs-button:hover {
        background-color: #FABC3F;
    }
</style>

<section class="container">
<div class="weekly3-news-area pt-70 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">

            <div class="section-tittle mb-30 text-center">
                            {{-- <span></span> --}}
                            <h3 style="margin-top: 10px;">Hot Courses</h3>
                            <!-- <p style="margin-top: 10px;">সেরা শিক্ষকদের পরিচর্যায় দেশের যেকোন প্রান্ত থেকে অব্যাহত থাকুক পড়াশুনার অগ্রযাত্রা</p> -->
                        </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">
                                        @foreach ($popular as $item)
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="{{ asset($item->image) }}" alt="">
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4><a href="{{ route('courseDetails', $item->id) }}">{{ $item->title }}</a></h4>
                                                <p>৳ {{ $item->price }} BDT/-
                                                </p>
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
     <!-- button -->
     {{-- <div class="text-center">
      <button class="customs-button">সকল কোর্স > </button> 
      </div>          --}}
</section>