<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('front/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/serviceRequest.css') }}">
</head>

<body>




    <div class="logo_start">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/"><img src="{{ asset('front/images/logo_navbar.jpeg') }}" alt=""></a>
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
                        <a href="/website/soon"><i class="fa-solid fa-cart-shopping icon_shopping"></i>
                            <div><span>0</span></div>
                        </a>
                    </form>

                </div>

            </div>
        </div>
    </div>









    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('front/images/logo_navbar.jpeg') }}" alt=""></a>
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

                    <li class="nav-item">
                        <a class="nav-link" href="#">تصنيف سادس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تصنيف سابع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/website/serviceRequest">اخرى</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section class="section-found">
        <img src="{{ asset('front/images/icon _notfound.png') }}" alt="">
        <h4>عذرا المنتج التي تبحث عنه غير متوفر</h4>
    </section>

    <section class="container form-services">
            <h2>يمكنك طلب المنتج <span>من هنا</span> </h2>
        <form>
            <input type="text" placeholder="الاسم ">
            <input type="text" placeholder="نوع السيارة">
            <input type="text" placeholder="موديل السيارة">
            <input type="text" placeholder="السنة">
            <input type="text" placeholder="اسم المنتج المطلوب">
            <input type="text" placeholder="نوع المنتج المطلوب">
            <input type="text" placeholder="وصف المنتج المطلوب" class="input-masseage"><br>
            <button>اطلب الان </button>

        </form>
    </section>














    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">

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
                    <img src="images/copy-right.png" alt="">
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

    <script src="js/script.js"></script>
</body>

</html>