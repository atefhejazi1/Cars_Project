@include('website.layout.header')
  
  <section class="services">
        <div class="container">
            <div class="services-data">
                <div>
                    <h2>منظفات <span>السيارات</span></h2>
                </div>
               
            </div>
           
            <div class="row services-item">


                @foreach ( $detergent as $detergent )
                    
                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        
         <img src="{{ asset('images/detergent/'.$detergent-> path_image)}}" alt="قطعة غيار"/>
                        <p>{{ $detergent-> name }}/ {{ $detergent-> description }} </p>
                        <div class="star-icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>{{ $detergent-> price }}<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                        <span></span>
                        <button>اضافة الى السلة</button>
                    </div>
                </div>
                
                @endforeach
        </div>


        </div>
    </section>
    <div class="select">

    </div>  


    @include('website.layout.footer')
