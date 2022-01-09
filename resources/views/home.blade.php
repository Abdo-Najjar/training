@extends('layouts.app')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                        &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                        &nbsp; &nbsp; &nbsp;TRAINING SITE</h1>
                    <h2 dir="rtl"> &nbsp; &nbsp; موقع عربي للحصول على فرص تدريب في كافة المؤسسات ...
                    </h2>
                    <div>
                        <a href="#about" dir="ltr" class="btn-get-started scrollto"> المزيد </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="/assets/img/hero-img.svg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up" dir="rtl">بنقرة واحدة أحصل على ما تريد ..</h3>
                        <p data-aos="fade-up" data-aos-delay="100" align="right"> &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp;نحن نساعدك على الحصول على فرص للتدريب في اي مكان واي زمان على نطاق واسع وبدون
                            جهد و بسرعة فائقة فقط كن جاهزاً لمقابلات التدريب
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>خدمات للأفراد</h4>
                                <p>ستجد العديد من الفرص التي تعرضها المؤسسات ما عليك إلا ان ترسل طلبات التقديم لهذه
                                    الفرص مع السيرة الذاتية لك.</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>خدمات المؤسسات</h4>
                                <p>أخبرنا عن ما تريده من مواصفات للتدريب في مؤسساتكم وسرعان ما تجد المتدربين المطلوبين.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
    </main>

@endsection
