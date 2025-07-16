<!DOCTYPE html>
<html lang="en">
@include('includes.head', ['title' => 'Home'])

<style>
    .custome::before {
        transform: scaleX(0);
        transform-origin: bottom right;
    }

    .custome:hover::before {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .custome::before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        inset: 0 0 0 0;
        background-color: rgba(92, 165, 218, 0.15);
        z-index: -1;
        transition: transform .3s ease;


    }

    .custome {
        position: relative;

    }
</style>
<body>
    @include('includes.header')
    <section class="oneblock">
        <div class="container">
            <div class="row ">
                <div class="col order-last order-md-first d-none  d-sm-none d-md-none d-lg-block  ms-5 nng1 fueling ">
                    <h2 class="first1">
                        <span class="ss">Fueling </span>
                        <span class="ss1">Success</span> <br>
                        <span class="ss2">Pioneering </span>
                        <span class="ss3">Innovative IT</span><br>
                        <span class="ss4">Solutions</span>
                    </h2>
                    <p class="planning">From Planning and Analysis to Design, Implementation, Testing & <br>
                        Integration, and Ongoing Maintenance.</p>
                    <a href="{{ route('contactus') }}" class="btn btn-primary mt-5 text-uppercase rounded-pill">Get a
                        quote</a>
                </div>
                <div class="col shake ">
                    <div class="card cv1 bg-transparent  ">

                        @if (!empty($banners->img))
                            <img src="{{ asset('assets/images/' . $banners->img) }}" class="img-fluid ksre "
                                style="margin-left: -60px;" alt="...">
                        @else
                            <img src="{{ asset('assets/images/default_image.jpg') }}" class="img-fluid"
                                style="margin-left: -60px;" alt="...">
                        @endif

                        <div class="card-img-overlay">

                            <div class="position-absolute top-0 end-0 d-none  d-sm-none d-md-none d-lg-block ">
                                <span class="follow   ">
                                    <h3>Follow Us </h3>
                                </span>

                                <div class="soc ">
                                    <hr class="deco5">
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa-brands inc fa-instagram img-fluid " style="color: #000000;"></i>
                                    </a>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa-brands inc fa-facebook-f img-fluid"></i>
                                    </a>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa-brands inc fa-twitter img-fluid"></i>
                                    </a>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="fa-brands inc fa-linkedin-in img-fluid"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="d-block  d-sm-block  d-md-block d-lg-none cv2 " style="text-align: end;">
                                <h2 class="first1">
                                    <span class="ss">Fueling </span>
                                    <span class="ss1">Success</span> <br>
                                    <span class="ss2">Pioneering </span>
                                    <span class="ss3">Innovative IT</span><br>
                                    <span class="ss4">Solutions</span>
                                </h2>
                                <p class="planning">From Planning and Analysis to Design, Implementation, Testing & <br>
                                    Integration, and Ongoing Maintenance.</p>
                                <a href="{{ route('contactus') }}"
                                    class="btn btn-primary text-uppercase rounded-pill">Get a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- social pages for mobile  -->
            <div class="row mt-2 mb-2">
                <div class="d-block  d-sm-block  d-md-none ">
                    <div class="soc  justify-content-center"
                        style="transform: rotate(0deg); margin-left: 0px; margin-top: 0px; ">
                        <span class="follow  ">
                            <h3 style="transform: rotate(0deg); margin-left: 0px; margin-top: 5px; ">Follow Us </h3>
                        </span>

                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa-brands inc fa-instagram" style="color: #000000;"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa-brands inc fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa-brands inc fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fa-brands inc fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end social pages for mobile  -->

            <!-- cicle shap elispe -->
            <div class="row justify-content-center ">
                <div class="circle position-relative ">

                </div>
            </div>
            <!-- circle end  -->

        </div>
    </section>
    <section class="container Services ">
        <div class="row">
            <div class="col-12 ssli">
                <h2 class="swer text-center">Services we offer</h2>
            </div>
        </div>
        <section class="slick Services ">
            <div class="slick-carousel ">
                @foreach ($posts as $post)
                    <div class="item shadow item2 mb-5">
                        <div class=" ct3 ">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/images/' . $post->img) }}" alt="Post Image"
                                        class=" img-fluid ms-0 rounded-circle kfgr1 p-1 p-md-2 p-sm-2 p-lg-2 mt-0">

                                </div>
                            </div>
                            <div class="card-body ">
                                <a href="{{ route('service') }}" style="text-decoration: none;">
                                    <h5 class="card-title ct1 text-wrap">{{ $post->heading }}</h5>
                                </a>
                                <p class="card-text ct2 text-break">{{ $post->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </section>
    </section>

    <section class="leading">
        <div class="container">
            <div class="position-relative">
                <div class="circle2 position-absolute top-0 start-0 translate-middle"></div>
            </div>

            <div class="row ">
                <div class="col fwwq1 kres2 mt-lg-5 mt-3">

                    <h2 class="swtd "><span class="trusts">Leading companies trust us </span> <br>to develop software
                    </h2>

                    <p class="amp mt-lg-5 mt-3">We <span class="poten">amplify the development potential</span> of
                        tech teams throughout the entire project lifecycle. Our expertise goes beyond merely building
                        teams; it encompasses every phase. Operating as a custom software development firm, we provide a
                        guarantee for the successful project delivery.</p>
                </div>

                <div class="col">
                    <div class="position-relative justify-content-center">
                        <img src="{{ asset('assets/images/comp.png') }}"
                            class=" img-fluid ksre  mt-2 mb-2  overflow-hidden" alt="">
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="meet">

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <hr class="decoline d-none  d-sm-none d-md-block">


                    <h2 class="meetp">Meet the People <br><span class="wok"> We are Working With</span></h2>
                </div>

                <div class="col-4 position-relative">

                    <div class="circle3 position-absolute bottom-0 start-50 translate-middle-x">
                    </div>
                </div>



                <div class="col-4  ccb1 d-none  d-sm-none d-md-block mt-5 " bis_skin_checked="1">
                    <div class="row" bis_skin_checked="1">
                        <div class="col-6 " bis_skin_checked="1">
                            <div class="text-end" bis_skin_checked="1">
                                <span class="carousel-control-prev-icon  sll2" data-bs-slide="prev"
                                    aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div bis_skin_checked="1">

                                <span class="carousel-control-next-icon sll1" data-bs-slide="next"
                                    aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ignit ">
            <section class=" slick2">
                <div class="slick-carousel1">
                    @foreach ($workwiths as $workwith)
                        <div class="item3"><img src="{{ asset('assets/images/' . $workwith->img) }}"
                                class="img-fluid "></div>
                    @endforeach

                </div>
        </div>
    </section>
    </section>
    <section class="slick2 text-center ">
        <div class="text-center">

            <h2 class="custome mt-5">Why cutomers love <br> <span class="with">working with us</span></h2>
        </div>

        <div class="container disp ">
            <div class="row">
                <div class="col-2">


                    <span class="carousel-control-prev-icon sll3 bb2 img-fluid " href="#recipeCarousel"
                        data-bs-slide="prev" aria-hidden="true"></span>


                </div>
                <div class="col-8 cc text-center ">

                    <div class="h2-container">
                        @foreach ($testimonials as $index => $testimonial)
                            <h2 class="slide-h2 text-break" id="e{{ $index + 1 }}">
                                <blockquote> {{ $testimonial->content }}</blockquote>
                            </h2>
                        @endforeach

                    </div>
                </div>
                <div class="col-2">
                    <span class="carousel-control-next-icon sll4 bb2  " href="#recipeCarousel" data-bs-slide="next"
                        aria-hidden="true"></span>
                </div>
            </div>
        </div>


        <div class="slick-carousel2 text-center justify-content-center">






            @foreach ($testimonials as $testimonial)
                <div class="item4">
                    <img src="{{ asset('assets/images/' . $testimonial->img) }}" alt="Post Image"
                        class=" img-fluid rounded-circle shadow-lg">
                    <div>
                        <h5 class="kkb">{{ $testimonial->name }}</h5>
                        <p class="llb">{{ $testimonial->designation }}</p>
                    </div>
                </div>
            @endforeach














        </div>

    </section>



    <section class="showcase" style="background-color:#F9F9FF; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <img src="asset/Deco-img-arrow.png" class="deco1" alt="">
                    <div class="circle4"></div>
                </div>


                <div class="col-4 text-center">
                    <hr class="decoline decoadj">
                    <h2 class="custome mt-4">Our work <br> <span class="with">Showcase</span></h2>
                </div>
                <div class="col-4 nr22 beep">
                    <img src="asset/deco2.png" class="deco3" alt="">

                </div>
            </div>
        </div>
        <div class="container project mb-5">


            <div id="showcasesContainer">
                @foreach ($showcases as $index => $showcase)
                    <div class="row hhr1" style="min-height: auto;">
                        <div class="col-6 mt-5 beep rounded" style="background-color: {{ $showcase->bgclr }};">
                            <div class="mt-4 row imgw">
                                @foreach (explode(',', $showcase->img) as $image)
                                    <div class="col text-center">
                                        <img src="{{ asset('assets/images/' . $image) }}" class="img-fluid mb-2">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-6 mt-5 rounded edge ksre" style="background-color: #F1F2FF;">
                            <h2 class="beep1 mt-4">{{ $showcase->name }}</h2>
                            <p class="beep2 mt-4 text-break">{{ $showcase->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row" id="readMoreRow" style="display: none;">
                <div class="col text-center">
                    <button class="btn btn-primary mb-2 mt-4" id="readMoreBtn">Read More</button>
                </div>
            </div>
            <div class="row" id="readLessRow" style="display: none;">
                <div class="col text-center">
                    <button class="btn btn-primary mb-2  mt-4" id="readLessBtn">Show Less</button>
                </div>





            </div>






    </section>

    <section class="trophy " style="min-height: auto;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr class="decoline decoadj adj2">
                    <h2 class="custome">Journey<br> <span class="with">into Our Process</span></h2>
                </div>
            </div>
        </div>

        <div class="container mt-4 justify-content-center row" style="margin-left: auto; margin-right: auto;">
            <div class="row col-md-12 col-sm-6 col-6 ">
                <div class="col-md-4  sss2">
                    <div class="card trophy1 shadow-lg tt1">
                        <div class="card-body">
                            <h5 class="card-title num1"><span class="asseble">#1 </span> Assemble the right team</h5>
                            <p class="card-text pp1">We handle all aspects of vetting and choosing the right team that
                                you don't have the time, expertise, or desire to do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  sss2">
                    <div class="card trophy1 shadow-lg tt6">
                        <div class="card-body">
                            <h5 class="card-title num1"><span class="asseble">#2 </span> Assemble the right team</h5>
                            <p class="card-text pp1">We handle all aspects of vetting and choosing the right team that
                                you don't have the time, expertise, or desire to do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  sss2">
                    <div class="card trophy1 shadow-lg tt2">
                        <div class="card-body">
                            <h5 class="card-title num1"><span class="asseble">#3 </span> Assemble the right team</h5>
                            <p class="card-text pp1">We handle all aspects of vetting and choosing the right team that
                                you don't have the time, expertise, or desire to do.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- This code for horizantal and vertical line starting point -->

            <div class=" d-none  d-sm-none d-md-block">
                <div class="row " style="justify-content: space-around;">
                    <div style=" width: 1px; height: 30px; border-left: 1px solid red;"></div>
                    <div style=" width: 1px; height: 30px; border-left: 1px solid red;"></div>
                    <div style="width: 1px; height: 30px; border-left: 1px solid red;"></div>
                </div>

                <div class="container" style="position: relative; border-bottom: 1px solid red;">
                    <!-- Content of the div -->
                    <img src="{{ asset('assets/images/trop.png') }}" alt="Your Image" class="img-fluid"
                        style="position: absolute; bottom: -20px; right: -40px; ">
                </div>

                <div class="row " style="justify-content: space-around;">
                    <div style=" width: 1px; height: 30px; border-right: 1px solid red;"></div>
                    <div style=" width: 1px; height: 30px; border-right: 1px solid red;"></div>
                    <div style="width: 1px; height: 30px; border-right: 1px solid red;"></div>
                </div>
            </div>







            <!-- Ending point for horizantal and vertical line -->

            <div class="row col-md-12 col-sm-6  col-6">
                <div class="col-md-4 ">
                    <div class="card trophy1 mb-2 shadow-lg ">
                        <div class="card-body">
                            <h5 class="card-title num1"><span class="asseble">#4 </span> Assemble the right team</h5>
                            <p class="card-text pp1">We handle all aspects of vetting and choosing the right team that
                                you don't have the time, expertise, or desire to do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  sss2">
                    <div class="card trophy1 mb-2 shadow-lg  tt4">
                        <div class="card-body">
                            <h5 class="card-title num1"><span class="asseble">#5 </span> Assemble the right team</h5>
                            <p class="card-text pp1">We handle all aspects of vetting and choosing the right team that
                                you don't have the time, expertise, or desire to do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sss2">
                    <div class="card trophy1 mb-2 shadow-lg  tt5">
                        <div class="card-body">
                            <h5 class="card-title num1"><span class="asseble">#6 </span> Assemble the right team</h5>
                            <p class="card-text pp1">We handle all aspects of vetting and choosing the right team that
                                you don't have the time, expertise, or desire to do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card bg-transparent mt-5">
                <img src="{{ asset('assets/images/get.png') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-9 p-xxl-5 p-xl-5 p-lg-2 p-md-2 p-sm-1 p-1">
                                <h2 class="tail card-title">Ready for Tailored Digital Excellence?</h2>
                                <p class="fuse">We fuse meticulous design with each line of code, dedicated to
                                    crafting and fortifying your route to success.</p>
                            </div>
                            <div
                                class="col-3 mt-0 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-3 p-xxl-5 p-xl-5 p-lg-2 p-md-2 p-sm-1 p-1 get">
                                <a href="{{ route('contactus') }}"
                                    class="btn btn-primary text-uppercase rounded-pill tex">Get a quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="tec">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <hr class="decoline decoadj adj3">
                    <h2 class="custome">Our<br> <span class="with">Tech Stack</span></h2>
                </div>


            </div>
            <div class="row col-md-12 col-12 mt-4 bb5 text-center">
                <div class="col ">
                    <img src="{{ asset('assets/images/ruby.png') }}" class="" alt="">

                </div>
                <div class="col "><img src="{{ asset('assets/images/nord.png') }}" alt=""></div>
                <div class="col "><img src="{{ asset('assets/images/PHP.png') }}" alt=""></div>
                <div class="col "><img src="{{ asset('assets/images/mysql.png') }}" alt=""></div>
                <div class="col "><img src="{{ asset('assets/images/java.png') }}" alt=""></div>
            </div>
            <div class="row col-md-12 col-12 mt-4 text-center">
                <div class="col "><img src="{{ asset('assets/images/net.png') }}" alt=""></div>
                <div class="col "><img src="{{ asset('assets/images/python.png') }}" alt=""></div>
                <div class="col "><img src="{{ asset('assets/images/mon.png') }}" class="mt-4" alt="">
                </div>
                <div class="col "><img src="{{ asset('assets/images/pshop.png') }}" class="mt-4"
                        alt=""></div>
            </div>
            <div class="row col-md-12 col-12 mt-4 text-center justify-content-center">
                <div class="col-2 "><img src="{{ asset('assets/images/illu.png') }}" alt=""></div>
                <div class="col-2 "><img src="{{ asset('assets/images/figa.png') }}" alt=""></div>
            </div>
        </div>

        <div class="container">
            <div class="row hire">
                <div class="col-8">
                    <h2 class="hire1 ">Hire the best developers and designers around!</h2>
                </div>
                <div class="col-4 rr4 position-relative ">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img src="asset/rrr1.png" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="{{ route('contactus') }}"
                            class="btn btn-primary text-uppercase rounded-pill tex">Tap to Hire</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('includes.footer')





    @include('includes.scripts')

</body>

</html>
