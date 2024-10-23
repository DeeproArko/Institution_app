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
                            {{-- <span>Y</span> --}}
                            <h3 style="margin-top: 10px;">All Year Courses</h3>
                            <!-- <p style="margin-top: 10px;">সেরা শিক্ষকদের পরিচর্যায় দেশের যেকোন প্রান্ত থেকে অব্যাহত থাকুক পড়াশুনার অগ্রযাত্রা</p> -->
                        </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">

                                        @foreach ($year as $years)
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="{{ asset($years->image) }}" alt="" width="100%" height="100px">
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4><a href="{{ route('courseDetails', $years->id) }}">{{ $years->title }}</a></h4>
                                                <p style="font-weight: 400; font-size: 16px;">৳ {{ $years->price }} BDT/-
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