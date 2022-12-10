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