@include('website.layout.header')


<!-- section About-us #1  -->
<section class="About">
    <div class="container">
        <div class="About-data">
            <div>
                <h2>الفئات <span>المميزة</span></h2>
            </div>
            <div>
                <a href=""><button>تسوق الان </button></a>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="About-item">
                    <img src="{{ asset('front/images/About1.jpg') }}" alt="">
                    <h5>غسالات الضغط</h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="About-item">
                    <img src="{{ asset('front/images/About2.jpg') }}" alt="">
                    <h5>المسامير</h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="About-item">
                    <img src="{{ asset('front/images/About3.jpg') }}" alt="">
                    <h5>أدوات لاسلكية</h5>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="About-item">
                    <img src="{{ asset('front/images/About4.jpg') }}" alt="">
                    <h5>شفرات</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="About-item">
                    <img src="{{ asset('front/images/About4.jpg') }}" alt="">
                    <h5>شفرات</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="About-item">
                    <img src="{{ asset('front/images/About4.jpg') }}" alt="">
                    <h5>شفرات</h5>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- section services -->

<section class="services">
    <div class="container">
        <div class="services-data">
            <div>
                <h2>قطع <span>الغيار</span></h2>
            </div>
            <div>
                <a href="{{ url('website/shopNowSparePartsItems') }}"><button>تسوق الان </button></a>
            </div>
        </div>

        <div class="row services-item">


            @foreach ( $sparePartsItems as $item )

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item-inner">
                    <i class="fa-solid fa-xmark icon_close"></i>

                    <img src="{{ asset('images/sparePartsItems/'.$item-> path_image)}}" alt="قطعة غيار" />
                    <p>{{ $item-> name }}/ {{ $item-> description }} </p>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>{{ $item-> price }}<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
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




<!-- section services #2    -->

<section class="services">
    <div class="container">
        <div class="services-data">
            <div>
                <h2>منظفات <span>السيارات</span></h2>
            </div>
            <div>
                <a href={{ url('website/shopNowDetergent') }}><button>تسوق الان </button></a>
            </div>
        </div>
        <div class="row services-item">

            @foreach ( $detergent as $detergent )

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item-inner">
                    <i class="fa-solid fa-xmark icon_close"></i>

                    <img src="{{ asset('images/detergent/'.$detergent-> path_image)}}" alt="قطعة غيار" />
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
</section>




<!-- section services #3 -->

<section class="services">
    <div class="container">
        <div class="services-data">
            <div>
                <h2>اكسسوارات <span>السيارات</span></h2>
            </div>
            <div>
                <a href={{ url('website/shopNowAccessorie') }}><button>تسوق الان </button></a>
            </div>
        </div>
        <div class="row services-item">
            @foreach ( $accessorie as $accessorie )

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item-inner">
                    <i class="fa-solid fa-xmark icon_close"></i>

                    <img src="{{ asset('images/accessories/'.$accessorie-> path_image)}}" alt="قطعة غيار" />
                    <p>{{ $accessorie-> name }}/ {{ $accessorie-> description }} </p>
                    <div class="star-icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>{{ $accessorie-> price }}<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                    <span></span>
                    <button>اضافة الى السلة</button>
                </div>
            </div>

            @endforeach


        </div>
    </div>

</section>


<!-- section services #4 -->

<section class="services">
    <div class="container">
        <div class="services-data">
            <div>
                <h2>زيوت <span>السيارات</span></h2>
            </div>
            <div>
                <a href="{{ url('website/shopNowOil') }}"><button>تسوق الان </button></a>
            </div>
        </div>
        <div class="row services-item">

            @foreach ( $oils as $oil )

            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="services-item-inner">
                    <i class="fa-solid fa-xmark icon_close"></i>

                    <img src="{{ asset('images/oils/'.$oil-> path_image)}}" alt="قطعة غيار" />
                    <p>{{ $oil-> name }}/ {{ $oil-> description }} </p>
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



<section class="contact">
    <div class="container">
        <h2>تواصل <span>معنا</span></h2>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
            <form method="post" action="{{ route('contact.index') }}">
                @csrf
                <input type="text" placeholder="الاسم" name="name">
                <input type="tel" placeholder="رقم الجوال" name="phone"> <br>
                <input type="text" placeholder="الموضوع" name="subject">
                <input type="email" placeholder="الايميل الالكتروني" name="email"> <br>
                <input type="text" placeholder="اكتب رسالتك هنا" name="message" class="input-masseage">
                <button type="submit">ارسال الان </button>

            </form>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d867266.9977728397!2d34.8920761!3d31.88589545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1669148982771!5m2!1sar!2s" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>

    <img src="{{ asset('front/images/home.png') }}" alt="" class="contact_build">
    <img src="{{ asset('front/images/car_contact.png') }}" alt="" class="contact_car">
</section>




<section class="info">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img src="{{ asset('front/images/info4.png') }}" alt="">
                <h6>أسعار عادلة ومنافسة</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img src="{{ asset('front/images/info3.png') }}" alt="">
                <h6>نوبة كاملة مضمونة</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img src="{{ asset('front/images/info2.png') }}" alt="">
                <h6>دعم الخبراء في الشراء</h6>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <img src="{{ asset('front/images/info1.png') }}" alt="">
                <h6>خيار إرجاع المنتج</h6>
            </div>
        </div>
        <hr>
    </div>
</section>



@include('website.layout.footer')