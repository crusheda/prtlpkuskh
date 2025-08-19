@extends('layouts.index')

@section('content')
<main class="nk-pages">
    <section class="nk-banner nk-banner-codebase">
        <div class="nk-banner-wrap">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="text-center pb-5 pb-lg-7"><span class="nk-section-subtitle"
                                data-aos="fade-up">Gerbang Digital Rumah Sakit</span>
                            <h1 class="text-capitalize display-6 mb-2" data-aos="fade-up" data-aos-delay="200">Portal Pintar, Kerja Lancar, Transformasi Digital Gencar</h1>
                            <p class="m-0" data-aos="fade-up" data-aos-delay="300"> Dengan akses cepat menuju sistem yang dibutuhkan, pekerjaan menjadi lebih lancar, efisien, dan menyenangkan.
                                Bersama-sama, mari kita gunakan teknologi untuk meningkatkan kinerja dan pelayanan kepada pasien. </p>
                            <ul class="nk-btn-group gap-1 gap-sm-2 justify-content-center pt-5" data-aos="fade-up" data-aos-delay="400">
                                <li>
                                    <a href="#" class="btn btn-dark align-items-center"> Get started for free </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-outline-dark border-0"> Book A Demo <em class="icon ni ni-arrow-right-circle ms-2"></em></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="nk-frame" data-aos="fade-up" data-aos-delay="500">
                            {{-- <img src="{{ asset('images/codebase/banner-cover-1.png') }}" alt="banner-cover">
                            <div class="nk-frame-children nk-frame-children-one">
                                <img src="{{ asset('images/codebase/banner-cover-1-a.png') }}" alt="banner-cover-a" class="animate animate-shakeY animate-duration-12">
                            </div>
                            <div class="nk-frame-children nk-frame-children-two">
                                <img src="{{ asset('images/codebase/banner-cover-1-b.png') }}" alt="banner-cover-a" class="animate animate-shakeY animate-duration-12 animate-delay-1">
                            </div> --}}

                            <div class="row gy-5">
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                                    <div class="card flex-sm-row p-5">
                                        <div class="flex-shrink-0 me-sm-4 mb-4 mb-sm-0"><img
                                                src="images/project-manage/icon-one.png" alt="icon"
                                                class="img-fluid flex-shrink"></div>
                                        <div>
                                            <div class="mb-3">
                                                <h6 class="mb-1">With You Everywhere</h6>
                                                <p class="fs-16 text-gray-1200 line-clamp-2">What if you could get all your
                                                    website tasks off your plate and focus only on the fun stuff.</p>
                                            </div><a href="#" class="btn-link text-primary"><em
                                                    class="icon ni ni-arrow-long-right"></em><span class="ms-2"> Download Apps
                                                </span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                                    <div class="card flex-sm-row p-5">
                                        <div class="flex-shrink-0 me-sm-4 mb-4 mb-sm-0"><img
                                                src="images/project-manage/icon-two.png" alt="icon"
                                                class="img-fluid flex-shrink"></div>
                                        <div>
                                            <div class="mb-3">
                                                <h6 class="mb-1">There’s a template for that</h6>
                                                <p class="fs-16 text-gray-1200 line-clamp-2">I must explain to you how all this
                                                    mistaken idea denou ncing plea sure and praising pain and typesetting.</p>
                                            </div><a href="#" class="btn-link text-primary"><em
                                                    class="icon ni ni-arrow-long-right"></em><span class="ms-2"> Start with
                                                    templates </span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card flex-sm-row p-5">
                                        <div class="flex-shrink-0 me-sm-4 mb-4 mb-sm-0"><img
                                                src="images/project-manage/icon-three.png" alt="icon"
                                                class="img-fluid flex-shrink"></div>
                                        <div>
                                            <div class="mb-3">
                                                <h6 class="mb-1">Connect with your other tools</h6>
                                                <p class="fs-16 text-gray-1200 line-clamp-2">What if you could get all your
                                                    website tasks off your plate and focus only on the fun stuff.</p>
                                            </div><a href="#" class="btn-link text-primary"><em
                                                    class="icon ni ni-arrow-long-right"></em><span class="ms-2"> See all
                                                    features </span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                                    <div class="card flex-sm-row p-5">
                                        <div class="flex-shrink-0 me-sm-4 mb-4 mb-sm-0"><img
                                                src="images/project-manage/icon-four.png" alt="icon"
                                                class="img-fluid flex-shrink"></div>
                                        <div>
                                            <div class="mb-3">
                                                <h6 class="mb-1"> Make Nioland yours</h6>
                                                <p class="fs-16 text-gray-1200 line-clamp-2">Praising pain and typesetting
                                                    industry has been the indust standard dummy text ever since was complete.
                                                </p>
                                            </div><a href="#" class="btn-link text-primary"><em
                                                    class="icon ni ni-arrow-long-right"></em><span class="ms-2"> Install
                                                    integrations </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section nk-section-features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-xxl-8">
                    <h5 class="text-gray-800 text-center fw-normal mb-5">over <span class="text-dark">32K+
                            software</span> business growing with NioLand</h5>
                    <div class="row gy-2 gap-sm-2 justify-content-center text-center align-items-center">
                        <div class="col-4 col-sm-3 col-lg-2">
                            <div class="nk-brand" data-aos="fade-up" data-aos-delay="50"><img
                                    src="{{ asset('images/brands/a.png') }}" alt="" class="opacity-75"></div>
                        </div>
                        <div class="col-4 col-sm-3 col-lg-2">
                            <div class="nk-brand" data-aos="fade-up" data-aos-delay="100"><img
                                    src="{{ asset('images/brands/b.png') }}" alt="" class="opacity-75"></div>
                        </div>
                        <div class="col-4 col-sm-3 col-lg-2">
                            <div class="nk-brand" data-aos="fade-up" data-aos-delay="150"><img
                                    src="{{ asset('images/brands/c.png') }}" alt="" class="opacity-75"></div>
                        </div>
                        <div class="col-4 col-sm-3 col-lg-2">
                            <div class="nk-brand" data-aos="fade-up" data-aos-delay="200"><img
                                    src="{{ asset('images/brands/d.png') }}" alt="" class="opacity-75"></div>
                        </div>
                        <div class="col-4 col-sm-3 col-lg-2">
                            <div class="nk-brand" data-aos="fade-up" data-aos-delay="250"><img
                                    src="{{ asset('images/brands/e.png') }}" alt="" class="opacity-75"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section nk-section-works bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="nk-section-head text-center pb-5 pb-md-7 "><span class="nk-section-subtitle">how
                            it works?</span>
                        <h2 class="nk-section-title">Works perfectly with your language</h2>
                        <p> Our platform seamlessly integrates with your preferred programming language,
                            enabling you to write code effortlessly and efficiently. </p>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="nk-frame nk-frame-15 overflow-hidden text-end mb-5 mb-md-7 mb-xl-0"><img
                            src="{{ asset('images/codebase/section-cover-1.png') }}" alt="section-cover">
                        <div class="nk-frame-children nk-frame-children-one"><img
                                src="{{ asset('images/codebase/section-cover-1-a.png') }}" alt="section-cover"
                                data-aos="fade-left" data-aos-delay="100"></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-column flex-sm-row gap-3 gap-sm-5 bg-white rounded-4 p-5">
                            <div class="media media-lg media-middle media-circle text-bg-orange"><img
                                    src="{{ asset('images/icon/html-sm.png') }}" alt="html" class="rounded-0"></div>
                            <div>
                                <h4>HTML/CSS/JS</h4>
                                <p class="fs-16 text-gray-800"> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Vitae at urna eu egestas diam, dolor iaculis adipiscing.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row gap-3 gap-sm-5 bg-white rounded-4 p-5">
                            <div class="media media-lg media-middle media-circle text-bg-primary-soft"><img
                                    src="{{ asset('images/icon/phython.png') }}" alt="phython" class="rounded-0"></div>
                            <div>
                                <h4>Python & Django</h4>
                                <p class="fs-16 text-gray-800"> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Vitae at urna eu egestas diam, dolor iaculis adipiscing.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row gap-3 gap-sm-5 bg-white rounded-4 p-5">
                            <div class="media media-lg media-middle media-circle text-bg-danger-soft"><img
                                    src="{{ asset('images/icon/ruby.png') }}" alt="ruby" class="rounded-0"></div>
                            <div>
                                <h4>Ruby on Rails</h4>
                                <p class="fs-16 text-gray-800"> Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Vitae at urna eu egestas diam, dolor iaculis adipiscing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section py-7 py-lg-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="nk-frame nk-frame-16 mb-5 mb-sm-7 mb-lg-0"><img
                            src="{{ asset('images/codebase/section-cover-2.png') }}" alt="section-cover">
                        <div class="nk-frame-children nk-frame-children-one d-none d-md-block"><img
                                src="{{ asset('images/codebase/section-cover-2-a.png') }}" alt="section-cover"
                                data-aos="fade-up" data-aos-delay="100"></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div>
                        <h2 class="pb-5 pb-lg-7 text-capitalize"> Codely works and refresh the code in real time
                            for everyone</h2>
                        <ul class="d-flex flex-column gap-5">
                            <li class="d-flex gap-3">
                                <div class="media media-lg media-middle media-circle text-bg-dark mb-4"><em
                                        class="icon ni ni-users-fill"></em></div>
                                <div>
                                    <h5>Upto 100 collaborators</h5>
                                    <p class="fs-16 text-gray-800"> Aliquam vestibulum morbi blandit cursus
                                        risus atomol ultrices proin gravida hendrerit lectusa. </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <div class="media media-lg media-middle media-circle text-bg-dark mb-4"><em
                                        class="icon ni ni-setting-fill"></em></div>
                                <div>
                                    <h5>Works on any platform</h5>
                                    <p class="fs-16 text-gray-800"> Aliquam vestibulum morbi blandit cursus
                                        risus atomol ultrices proin gravida hendrerit lectusa. </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="nk-btn-group gap-0 gap-sm-2 pt-5 pt-lg-7">
                            <li><a href="#" class="btn btn-primary align-items-center"> Get started for free
                                </a></li>
                            <li><a href="#" class="btn btn-outline-dark border-0">Book A Demo<span
                                        class="lh-1 ms-1"><em
                                            class="icon ni ni-arrow-right-circle"></em></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>`
        </div>
    </section>
    <section class="nk-section nk-section-integrations pt-lg-0 pb-lg-4">
        <div class="nk-frame position-static nk-frame-18">
            <div class="nk-frame-children nk-frame-children-right nk-frame-children-right-top"><img
                    src="{{ asset('images/codebase/codebase-blur-2-right.png') }}" alt="blur"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="nk-section-head text-center"><span
                            class="nk-section-subtitle">integrations</span>
                        <h2 class="nk-section-title"> Integrated with the most popular programming languages
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mauris vulputate dui vitae
                            commodo magna vitae nunc diam urna quis Turpis non nulla pulvinar arcu elementum
                            pretium viverra.</p>
                        <ul class="nk-btn-group gap-0 gap-sm-2 justify-content-center pt-5 pt-lg-7">
                            <li><a href="#" class="btn btn-dark  align-items-center"> Get started for free </a>
                            </li>
                            <li><a href="#" class="btn btn-outline-dark border-0"> Browse Integrations <span
                                        class="lh-1 ms-1"><em
                                            class="icon ni ni-arrow-right-circle"></em></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="nk-frame text-center" data-aos="fade-in" data-aos-delay="100"><img
                            src="{{ asset('images/codebase/section-cover-3.png') }}" alt="integrations-tools"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section nk-section-features  is-theme">
        <div class="container">
            <div class="nk-content-wrap p-5 p-md-7 p-lg-120 bg-dark rounded-4 overflow-hidden ">
                <div class="nk-mask blur-11"></div>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="nk-section-head text-center pb-7">
                            <h2 class="nk-section-title text-primary mb-5"> Amazing features for to make your
                                development easier </h2>
                            <ul class="nk-btn-group gap-2 justify-content-center">
                                <li><a href="#" class="btn text-nowrap btn-white align-items-center"> Get
                                        started for free </a></li>
                                <li><a href="#" class="btn text-nowrap btn-outline-white border-0"> Book A Demo
                                        <span class="lh-1 ms-1"><em
                                                class="icon ni ni-arrow-right-circle"></em></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 gy-lg-7">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="d-flex flex-column gap-3 text-center">
                            <div class="mb-2"><img src="{{ asset('images/icon/processor.svg') }}" alt="icon"></div>
                            <h5 class="m-0">Code Pilot</h5>
                            <p class="fs-16 opacity-75"> Lacus sed turpis tincidunt id tincidunt praesent semper
                                feugiat nibh. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                        <div class="d-flex flex-column gap-3 text-center">
                            <div class="mb-2"><img src="{{ asset('images/icon/code-2.svg') }}" alt="icon"></div>
                            <h5 class="m-0">Over 50+ Languages</h5>
                            <p class="fs-16 opacity-75"> Lacus sed turpis tincidunt id tincidunt praesent semper
                                feugiat nibh. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column gap-3 text-center">
                            <div class="mb-2"><img src="{{ asset('images/icon/code.svg') }}" alt="icon"></div>
                            <h5 class="m-0">Available on all platforms</h5>
                            <p class="fs-16 opacity-75"> Lacus sed turpis tincidunt id tincidunt praesent semper
                                feugiat nibh. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                        <div class="d-flex flex-column gap-3 text-center">
                            <div class="mb-2"><img src="{{ asset('images/icon/watch.svg') }}" alt="icon"></div>
                            <h5 class="m-0">Real-time code save</h5>
                            <p class="fs-16 opacity-75"> Lacus sed turpis tincidunt id tincidunt praesent semper
                                feugiat nibh. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                        <div class="d-flex flex-column gap-3 text-center">
                            <div class="mb-2"><img src="{{ asset('images/icon/bug.svg') }}" alt="icon"></div>
                            <h5 class="m-0">Built-in code debugger</h5>
                            <p class="fs-16 opacity-75"> Lacus sed turpis tincidunt id tincidunt praesent semper
                                feugiat nibh. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex flex-column gap-3 text-center">
                            <div class="mb-2"><img src="{{ asset('images/icon/unlock.svg') }}" alt="icon"></div>
                            <h5 class="m-0">Granular permissions</h5>
                            <p class="fs-16 opacity-75"> Lacus sed turpis tincidunt id tincidunt praesent semper
                                feugiat nibh. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section nk-section-testimonials  ">
        <div class="nk-frame position-static nk-frame-18">
            <div class="nk-frame-children nk-frame-children-left nk-frame-children-left-bottom"><img
                    src="{{ asset('images/codebase/codebase-blur-2-left.png') }}" alt="blur"></div>
            <div class="nk-frame-children nk-frame-children-right nk-frame-children-right-top"><img
                    src="{{ asset('images/codebase/codebase-blur-2-right.png') }}" alt="blur"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="nk-section-head text-center"><span class="nk-section-subtitle">customer
                            reviews</span>
                        <h2 class="nk-section-title"> What our amazing customers <br class="d-none d-lg-block">
                            say about Codely </h2>
                        <p class="nk-section-text">Lorem ipsum dolor sit amet consectetur adipiscing elit mauris
                            vulputate dui vitae commodo magna vitae nunc diam urna quis Turpis non nulla
                            pulvinar arcu elementum pretium viverra.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="swiper swiper-init nk-swiper" data-autoplay="true" data-space-between="24"
                        data-breakpoints='           { "0":{"slidesPerView":1,"slidesPerGroup":1 } }                 '>
                        <div class="swiper-wrapper has-pagination">
                            <div class="swiper-slide px-4">
                                <div class="nk-testimonial-card nk-testimonial-card-s5">
                                    <div class="nk-testimonial-content">
                                        <div><img src="{{ asset('images/codebase/sitemark.png') }}" alt="logo"></div>
                                        <div class="pt-5">
                                            <h3>“ The best Codebase IDE app ”</h3>
                                            <p class="fs-16 text-gray-800 m-0"> Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-4">
                                <div class="nk-testimonial-card nk-testimonial-card-s5">
                                    <div class="nk-testimonial-content">
                                        <div><img src="{{ asset('images/codebase/luminous.png') }}" alt="logo"></div>
                                        <div class="pt-5">
                                            <h3>“ The best Codebase IDE app ”</h3>
                                            <p class="fs-16 text-gray-800 m-0"> Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-4">
                                <div class="nk-testimonial-card nk-testimonial-card-s5">
                                    <div class="nk-testimonial-content">
                                        <div><img src="{{ asset('images/codebase/cloud.png') }}" alt="logo"></div>
                                        <div class="pt-5">
                                            <h3>“ The best Codebase IDE app ”</h3>
                                            <p class="fs-16 text-gray-800 m-0"> Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section nk-section-blogs bg-gray-300">
        <div class="nk-frame position-static nk-frame-18">
            <div class="nk-frame-children nk-frame-children-right nk-frame-children-right-top"><img
                    src="{{ asset('images/codebase/codebase-blur-2-right.png') }}" alt="blur"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head text-center"><span class="nk-section-subtitle">Our Blogs</span>
                        <h2 class="nk-section-title"> Browse our latest news and resources </h2>
                        <p class="nk-section-text">Lorem ipsum dolor sit amet consectetur adipiscing elit mauris
                            vulputate dui vitae commodo magna vitae nunc diam urna quis.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-5 gy-lg-0">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="card h-100 bg-white rounded-4">
                        <div class="card-body">
                            <div class="mb-5"><a href="#"><img src="{{ asset('images/codebase/card-cover-1.png') }}"
                                        alt="card-cover" class="w-100"></a></div>
                            <div><a href="#">
                                    <h4 class="m-0">Code refactoring best practices: how to do it?</h4>
                                </a>
                                <div class="pt-5"><span class="text-uppercase fs-18 text-gray-800">January 19,
                                        2022</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                    <div class="card h-100 bg-white rounded-4">
                        <div class="card-body">
                            <div class="mb-5"><a href="#"><img src="{{ asset('images/codebase/card-cover-2.png') }}"
                                        alt="card-cover" class="w-100"></a></div>
                            <div><a href="#">
                                    <h4 class="m-0">7 programming language you should pay attention in 2022</h4>
                                </a>
                                <div class="pt-5"><span class="text-uppercase fs-18 text-gray-800">April 23,
                                        2022</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 bg-white rounded-4">
                        <div class="card-body">
                            <div class="mb-5"><a href="#"><img src="{{ asset('images/codebase/card-cover-3.png') }}"
                                        alt="card-cover" class="w-100"></a></div>
                            <div><a href="#">
                                    <h4 class="m-0">Discover all the new features available in v2.0</h4>
                                </a>
                                <div class="pt-5"><span class="text-uppercase fs-18 text-gray-800">Feburary 12,
                                        2022</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center pt-lg-7"><a href="#" class="btn btn-dark">Browse All Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nk-section-blogs overflow-hidden pt-7 pt-lg-120 bg-gradient-27">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="nk-section-head text-center"><span class="nk-section-subtitle">Get
                            started</span>
                        <h2 class="nk-section-title">Try the code editor of the future, today.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mauris vulputate dui vitae
                            commodo magna vitae.</p>
                        <ul class="nk-btn-group gap-0 gap-sm-2 justify-content-center pt-5">
                            <li><a href="#" class="btn btn-dark  align-items-center"> Get started for free </a>
                            </li>
                            <li><a href="#" class="btn btn-outline-dark border-0"> Book a Demo <span
                                        class="lh-1 ms-1"><em
                                            class="icon ni ni-arrow-right-circle"></em></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="nk-frame text-center nk-frame-17 mb-n1 mb-xl-n0" data-aos="fade-up"
                        data-aos-offset="" data-aos-delay="0"><img src="{{ asset('images/codebase/section-cover-4.png') }}"
                            alt="section-cover">
                        <div
                            class="nk-frame-children nk-frame-children-one animate animate-shakeY animate-duration-12 animate-delay-1 d-none d-xl-block">
                            <img src="{{ asset('images/codebase/section-cover-4-a.png') }}" alt="cover-frame-children"></div>
                        <div
                            class="nk-frame-children nk-frame-children-two animate animate-shakeY animate-duration-12 d-none d-xl-block">
                            <img src="{{ asset('images/codebase/section-cover-4-b.png') }}" alt="cover-frame-children"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
