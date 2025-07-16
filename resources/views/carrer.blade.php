<!DOCTYPE html>
<html lang="en">
@include('includes.head', ['title' => 'Carrer'])
    

<body>
@include('includes.header')
  


<section>
        <div class="container ">
            <div class="row ">
                <div class="col-12 text-center mt-5 ">
                    <h2 class="mind1 ">We're Seeking Brilliant Minds: <span class="shape1"> Shape the Future with Us</span></h2>
                    <div>
                    <p class="offer1 mt-4">MK TECHSOL offers a dynamic and innovative work environment, where your skills and talents can flourish. Join us in building the future of technology.</p>
                   </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 mt-5 ctus text-center">
                    <a href="{{ route('contactus') }}" class="btn btn-primary text-uppercase rounded-pill">Contact Us</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 mt-3 text-center">
                    <img src="{{ asset('assets/images/donate.png') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h2 class="jon1">Why Join Us?<br><span class="inno1">Because Innovation Thrives Here!</span></h2>
                </div>
                <div class="col-12">
                    <p class="wplc1 text-center">Experience a workplace that encourages innovation, empowers your growth, and propels you toward success. Join Us for Boundless Opportunities, Unleash Your Potential at MK TECHSOL.</p>
                </div>
            </div>
            <div class="container ">
            <div class="row col-12 mt-5  ">
                <div class="row align-items-center  ">
                    <div class="col-md-4 offset-md-2 col-12 col-sm-12 mt-5 align-self-center ">
                            
                            <span class="justify-content-center">
                            <div>
                            <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start   top-50 start-0 translate-middle "   alt="">
                            </div>
                            
                            
                            <p class="opp1 ">1. Opportunities for professional growth and development.</p>   
                        </span>
                        
                         
                       
                        
                    </div>
                    <div class="col-md-4  col-12 col-sm-12 mt-5">
                        <span class=" justify-content-center ">
                            <div>
                            <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start  top-50 start-0 translate-middle "   alt="">
                            </div>
                            
                            
                            <p class="opp1 ">2. Opportunities for professional growth and development.</p>   
                        </span>
                         </div>
                </div>
                <div class="row ">
                    <div class="col-md-4 offset-md-2 col-12 col-sm-12 mt-5">
                        <span class=" justify-content-center ">
                            <div>
                            <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start   top-50 start-0 translate-middle "   alt="">
                            </div>
                            
                            
                            <p class="opp1 ">3. Opportunities for professional growth and development.</p>   
                        </span>
                    </div>
                    <div class="col-md-4    col-12 col-sm-12 mt-5">
                        <span class=" justify-content-center ">
                            <div>
                            <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start   top-50 start-0 translate-middle "   alt="">
                            </div>
                            
                            
                            <p class="opp1 ">4. Opportunities for professional growth and development.</p>   
                        </span>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4 offset-md-2 col-12 col-sm-12 mt-5">
                        <span class=" justify-content-center ">
                            <div>
                            <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start   top-50 start-0 translate-middle "   alt="">
                            </div>
                            
                            
                            <p class="opp1 ">5. Opportunities for professional growth and development.</p>   
                        </span>
                    </div>
                    <div class="col-md-4 col-12 col-sm-12 mt-5">
                        <span class=" justify-content-center ">
                            <div>
                            <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start   top-50 start-0 translate-middle "   alt="">
                            </div>
                            
                            
                            <p class="opp1 ">6. Opportunities for professional growth and development.</p>   
                        </span>
                    </div>
                </div>
                
            </div>
            </div>
        </div>
        
    </section>

    @include('includes.footer')
     
     
        
    

    @include('includes.scripts')

    

</body>