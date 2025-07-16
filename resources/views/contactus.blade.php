<!DOCTYPE html>
@include('includes.head', ['title' => 'Contact-us'])
    

<body>
@include('includes.header')
  

<section>
        <form action="{{ route('contactus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid con1">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12 col-12 order-md-first order-last">
                        <div class="container mt-5 mb-5" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 10px;">
                            <div class="container ">
                            <div class="row g-2   ">
                                <div class="col mt-5">
                                    <div class="input-group">
                                        
                                            <input type="text" name="name" class="form-control" placeholder="Full Name" style="height: 60px;">
                                            
                                        
                                        <span class="input-group-text icon-transparent-bg">
                                            <i class="fa-regular fa-user" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col mt-5">
                                    <div class="input-group">
                                        
                                            <input type="email" name="email" class="form-control" id="floatingInputGrid" placeholder="Email*"  style="height: 60px;">
                                            
                                        
                                        <span class="input-group-text icon-transparent-bg">
                                            <i class="fa-regular fa-envelope" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                                     <!--                        second row                    -->
                            <div class="row mt-4 g-2">
                                <div class="col">
                                    <div class="input-group">
                                        
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number*"  style="height: 60px;">
                                            
                                        
                                        <span class="input-group-text icon-transparent-bg">
                                            <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        
                                            <input type="text" name="company" class="form-control" id="floatingInputGrid" placeholder="Subject" style="height: 60px;">
                                            
                                        
                                        <span class="input-group-text icon-transparent-bg">
                                            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--                   second row end      -->


                            <!--                  third row start           -->
                            <div class="row mt-4 g-2">
                                <div class="col">
                                    <div class="input-group">
                                        
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" style="height: 60px;">
                                            
                                        
                                     
                                    </div>
                                </div>
                        </div>
                        <!--                THIRD ROW END                 -->
                            <!-- fourth row -->
                        <div class="row mt-4 g-2">
                            <div class="col">
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" placeholder="Message"  rows="8"></textarea>
                            </div>
                        </div>
                        <!-- foutrth row end -->



                        <div class="row mt-4  justify-content-left g-2">
                            <div class="col mb-4">
                                <button type="submit" class="btn btn-primary " style="background-color: #0E3C64; border-color: #0E3C64;">
                                    Send message   <i class="fas fa-envelope icon-transparent-bg"></i>
                                </button>
                            </div>
                        </div>

                        
                </div>

            </div>
        </div>
                    <!-- first coloum ended here  -->



            <div class="col-md-6 col-sm-12 col-12  text-center mt-5">
                <h2 class="keen1">We're Open and Keen  <br>
                    to Hear from You!</h2>
            </div>

        </form>
        <div class="container fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="google-map mb-xl-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.4605280878536!2d73.07515311118875!3d33.6452272390011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9520bc29fa73%3A0xd2a3805e82d6fd74!2sMK%20TechSol!5e0!3m2!1sen!2s!4v1714716968864!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        </div>
        </div>
        
    </section>




    @include('includes.footer')
     
     
        
    

    @include('includes.scripts')

    

</body>