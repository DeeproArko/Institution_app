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
                           
                            <h3 style="margin-top: 10px;">{{ $skip_category_0->title }}</h3>
                            {{-- <p style="margin-top: 10px;">ইঞ্জিনিয়ারিং-মেডিকেল কিংবা ভার্সিটি-গুচ্ছ - লক্ষ্য যাই হোক, অর্জনের পথ এখানেই।</p> --}}
                        </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">

                                        @foreach ($skip_product_0 as $item)
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="{{ asset($item->image) }}" alt="" width="100%" height="150px">
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4><a href="{{ route('courseDetails', $item->id) }}">{{ $item->title }}</a></h4>
                                                
                                                <a style="color:#FABC3F" href="{{ route('courseDetails', $item->id) }}">See Details</a>
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
      </div>   --}}
</section>