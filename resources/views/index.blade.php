<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    	  <link rel="icon" type="image/x-icon" href="{{asset('assets/auth/media/logos/logo_navbar.jpeg')}}">

    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>


    <div class="logo_start">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-lg-3">
                    <a href=""><img src="{{ asset('front/images/logo_navbar.jpeg') }}" alt=""></a>
                </div>
                <div class="col-lg-6">
                    <form>
                        <input type="text" placeholder="ابحث عن كلمة رئيسية او رقم الجزء" class="search">
                        <i class="fa-solid fa-magnifying-glass icon-search"></i>
                    </form>
                </div>
                <div class="col-lg-3">

                    <form class="form-group">
                        <select name="" id="select_data">
                            <option value="">المساحة الشخصية</option>
                            <option value="">اعدادات المستخدم</option>
                            <option value="">الاتصال</option>
                        </select>
                        <!-- <a href="/website/soon"><i class="fa-solid fa-cart-shopping icon_shopping"></i>
                            <div><span class="num"></span></div>
                        </a> -->

                        <h1><i class="fa fa-shopping-cart"></i></h1>

                    </form>

                </div>

            </div>
        </div>
    </div>









    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('front/images/logo_navbar.jpeg') }}" alt=""></a>
            <a class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">

                    <!-- ########################## -->

                    <li class="nav-item">
                        <a class="nav-link" href="/website/spareParts">قطع الغيار</a>
                    </li>


                    <!-- ########################## -->


                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#">الزيوت</a>
                            <div class="dropdown-content">
                                <a href="/website/soon">المرشحات</a>
                                <a href="/website/soon">مرشحات الهواء</a>
                                <a href="/website/soon">فلاتر مكيفات الهواء</a>
                                <a href="/website/soon">فلاتر الزيت</a>
                                <a href="/website/soon">مرشحات الطباشير</a>
                            </div>
                        </div>
                    </li>


                    <!-- ########################## -->


                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#">اضافات</a>
                            <div class="dropdown-content">
                                <a href="/website/soon">المرشحات</a>
                                <a href="/website/soon">مرشحات الهواء</a>
                                <a href="/website/soon">فلاتر مكيفات الهواء</a>
                                <a href="/website/soon">فلاتر الزيت</a>
                                <a href="/website/soon">مرشحات الطباشير</a>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#">منظفات</a>
                            <div class="dropdown-content">
                                <a href="/website/soon">المرشحات</a>
                                <a href="/website/soon">مرشحات الهواء</a>
                                <a href="/website/soon">فلاتر مكيفات الهواء</a>
                                <a href="/website/soon">فلاتر الزيت</a>
                                <a href="/website/soon">مرشحات الطباشير</a>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#">اكسسوارات</a>
                            <div class="dropdown-content">
                                <a href="/website/soon">المرشحات</a>
                                <a href="/website/soon">مرشحات الهواء</a>
                                <a href="/website/soon">فلاتر مكيفات الهواء</a>
                                <a href="/website/soon">فلاتر الزيت</a>
                                <a href="/website/soon">مرشحات الطباشير</a>
                            </div>
                        </div>
                    </li>

                     @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">لوحة التحكم</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">دخول</a>
                    </li>

                    @if (Route::has('register'))
                   <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">مستخدم جديد</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/website/serviceRequest">اخرى</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="watsapp-icon">
        <a href="/website/soon"><i class="fa-brands fa-whatsapp"></i></a>
    </div>

    <div class="hero_icon">
        <i class="fa-sharp fa-solid fa-arrow-up"></i>

    </div>


    <section class="hero-section">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('front/images/slide1.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="hero-data">
                        <h3> اجعل سيارتك الأفضل.</h3>
                        <h1>اعتني استثمارك.</h1>
                        <h2>البحث عن قطع غيار لسيارتك.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/images/slide2.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="hero-data">
                        <h3> اجعل سيارتك الأفضل.</h3>
                        <h1>اعتني استثمارك.</h1>
                        <h2>البحث عن قطع غيار لسيارتك.</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front/images/slide3.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="hero-data">
                        <h3> اجعل سيارتك الأفضل.</h3>
                        <h1>اعتني استثمارك.</h1>
                        <h2>البحث عن قطع غيار لسيارتك.</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>


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
                    <a href="{{ url('website/ShopNowSparePartsItems') }}"><button>تسوق الان </button></a>
                </div>
            </div>
           
            <div class="row services-item">


                @foreach ( $sparePartsItems as $item )
                    
                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        
         <img src="{{ asset('images/sparePartsItems/'.$item-> path_image)}}" alt="قطعة غيار"/>
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

                {{-- <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>

                        <img src="{{ asset('front/images/services-item4.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item2.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item1.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item5.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
            </div> --}}

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
                    <a href="/website/soon"><button>تسوق الان </button></a>
                </div>
            </div>
            <div class="row services-item">


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
		
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item3.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item4.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item2.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item1.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item5.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
            </div>

        </div>

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
                    <a href="/website/soon"><button>تسوق الان </button></a>
                </div>
            </div>
            <div class="row services-item">


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item3.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item4.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item2.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item1.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item5.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
            </div>

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
                    <a href="/website/soon"><button>تسوق الان </button></a>
                </div>
            </div>
            <div class="row services-item">


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item3.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item4.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item2.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item1.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg">
                    <div class="services-item-inner">
                        <i class="fa-solid fa-xmark icon_close"></i>
                        <img src="{{ asset('front/images/services-item5.jpg') }}">
                            <p>هيتاشي / ميتابو HPT 16 قياس تشطيب بالهواء المضغوط</p>
                            <div class="star-icon">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>345.89<i class="fa-solid fa-sterling-sign icon_price"></i></h6>
                            <span></span>
                            <button>اضافة الى السلة</button>
                    </div>
            </div>

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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d867266.9977728397!2d34.8920761!3d31.88589545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1669148982771!5m2!1sar!2s"
                        width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <img src="{{ asset('front/images/تنزيل.png') }}" alt="" class="contact_build">
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


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-data">
                        <h6>تحتاج مساعدة؟ / اتصالات سريعة</h6>
                        <h4>0141 950 4018 <i class="fa-solid fa-phone"></i></h4>
                        <h6>الاثنين - الجمعة: 9:00 - 20:00</h6>
                        <h6>السبت: 10:00 - 15:00</h6>
                        <div class="footer-icon">
                            <i class="fa-brands fa-facebook-messenger"></i>
                            <i class="fa-brands fa-facebook-messenger"></i>
                            <i class="fa-brands fa-facebook-messenger"></i>
                            <i class="fa-brands fa-facebook-messenger"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <h3>متجر</h3>
                    <ul>
                        <li>شركة تابعة</li>
                        <li>الأكثر مبيعًا</li>
                        <li>تخفيض</li>
                        <li>أحدث المنتجات</li>
                        <li>تخفيض السعر</li>
                    </ul>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <h3>الحسابات</h3>
                    <ul>
                        <li>حسابي</li>
                        <li>قائمة الرغبات</li>
                        <li>طلباتي</li>
                        <li>عائدات</li>
                        <li>شحن</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <h3>معلومات</h3>
                    <ul>
                        <li>معلومات عنا</li>
                        <li>معلومات التوصيل</li>
                        <li>سياسة الخصوصية</li>
                        <li>مبيعات</li>
                        <li>البنود و الظروف</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copy-right">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <img src="{{ asset('front/images/copy-right.png') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p>© 2020 Equipo. All rights reserved. | Terms and Conditions Privacy | Policy Sitemap</p>
                </div>

            </div>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <script src="{{ asset('front/js/script.js') }}"></script>
    <script src="{{ asset('front/js/basketShopping.js') }}"></script>
</body>

</html>








