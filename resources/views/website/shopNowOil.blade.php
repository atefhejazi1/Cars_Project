@include('website.layout.header')
  
  
  <section class="services">
        <div class="container">
            <div class="services-data">
                <div>
                    <h2>زيوت <span>السيارات</span></h2>
                </div>
               
            </div>
           
            <div class="row services-item">


                @foreach ( $oils as $oil )
                    
                <div class="col-sm-12 col-md-6 col-lg-3 p-lg-0">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        
                        <img src="{{ asset('images/oils/'.$oil-> path_image)}}"  height="200px" alt="قطعة غيار"/>
                                 <h5 class="fw-bolder pt-4 pe-4">{{ $oil-> name }}</h5>

                        {{-- <p style="height: 200px ; overflow-y: scroll;" >{{ $oil-> description }} </p> --}}
                        <div class="star-icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h6>{{ $oil-> price }}<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
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
