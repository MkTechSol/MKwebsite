<!DOCTYPE html>
<html lang="en">
@include('includes.head', ['title' => 'Partaners'])
    

<body>
@include('includes.header')
  

<section>
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h2 class="mind1 ">Building Success Together:  <span class="shape1"> Meet Our Valued Partners</span></h2>
                    <div>
                    <p class="offer1 mt-4">At MK TechSol, we believe in the power of collaboration. Together with our valued partners, we're shaping a successful future.</p>
                   </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-12 mt-5">
                    <h4 class="gsman1 mt-5">GasMan Pvt. Ltd</h4>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12  ">
                    <div class="gsman2">
                        <div class="opacity-layer">
                    <p class="pro1">M/S Gas Man Private Limited is a prominent LPG Marketing company with a rich history dating back to 1982. Founded by a respected and well-known business family in the Malakand division and District Kohat, Gassman Pvt. Ltd has been at the forefront of distributing both local and imported LPG across Khyber Pakhtunkhwa, Punjab, and AJK. <br><br><br>

                        At Gassman, we understand the importance of safe and environmentally friendly fuel solutions. This is why we have been dedicated to making LPG—a secure and eco-conscious energy source—readily available in the Malakand division. Our commitment to quality and safety has made us a trusted name in the industry, and we're proud to be a part of your software house's success story.</p>
                    </div>
                    </div>
                    </div>    
            </div>



             <div class="row mt-5">
                <div class="col-12 mt-5">
                    <h4 class="gsman1 mt-5">Kotal Gas Pvt. Ltd</h4>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12  ">
                    <div class="gsman3 img-fluid">
                        <div class="opacity-layer">
                    <p class="pro1">Kotal Gas Pvt. Ltd is a privately owned LPG marketing company based in Pakistan, established in 2006. Our registered office, situated in the Industrial Estate on Dhoda Road, Kohat, KPK, is a testament to our commitment to quality and efficiency.We take pride in our state-of-the-art LPG Storage and filling plant, boasting a capacity of 120 Metric tonnes. With a fleet of 04 dedicated LPG vehicles, we ensure that your LPG needs are met with reliability and safety as top priorities. <br> <br><br>

                        At Kotal Gas, we prioritize safety above all else. Our LPG plant operations are managed by a highly qualified and experienced team, ensuring that every aspect of our business meets the highest safety standards. We are honored to be your partners in the software house, where excellence and reliability are paramount.</p>
                    </div>
                    </div>
                    </div>    
            </div>



            <div class="card bg-transparent mt-5">
                <img src="{{ asset('assets/images/get.png' ) }}" class="card-img" alt="...">
                  <div class="card-img-overlay">
                    <div class="container">
                    <div class="row">
                      <div class="col-9 p-xxl-5 p-xl-5 p-lg-2 p-md-2 p-sm-1 p-1">
                  <h2 class="tail card-title">Ready for Tailored Digital Excellence?</h2>
                  <p class="fuse">We fuse meticulous design with each line of code, dedicated to crafting and fortifying your route to success.</p></div>
                  <div class="col-3 mt-0 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-3 p-xxl-5 p-xl-5 p-lg-2 p-md-2 p-sm-1 p-1 get">
                  <a href="{{ route('contactus') }}" class="btn btn-primary text-uppercase rounded-pill tex">Get a quote</a></div>
                  </div>
                </div>
                </div>
              </div>

            
        </div>
    </section>



    @include('includes.footer')
     
     
        
    

    @include('includes.scripts')

    

</body>