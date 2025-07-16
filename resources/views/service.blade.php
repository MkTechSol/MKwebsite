<!DOCTYPE html>
<html lang="en">
@include('includes.head', ['title' => 'Services'])
    

<body>
@include('includes.header')
  



<section class="leading">
<div class="col-12 ssli">
    <h2 class="swer text-center">Services we offer</h2>
    </div>
@foreach($posts as $post)
    <div class="container">
     

      <div class="row ">
      
          <div class="col fwwq1 kres2 mt-lg-5 mt-3">
             
              <h2 class="swtd "><span class="trusts">{{$post->heading}}</h2>

              <p class="amp mt-lg-5 mt-3">We <span class="poten">amplify the development potential</span> of tech teams throughout the entire project lifecycle. Our expertise goes beyond merely building teams; it encompasses every phase. Operating as a custom software development firm, we provide a guarantee for the successful project delivery.</p>
          </div>

          <div class="col">
            <div  class="position-relative justify-content-center">
            <img src="{{ asset('assets/images/' . $post->image2) }}" class=" img-fluid ksre  mt-2 mb-2  overflow-hidden" alt="">
           </div>
          </div>


      </div>
    </div>
    @endforeach
</section>

<div class="container">
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


    @include('includes.footer')
     
     
        
    

    @include('includes.scripts')



</body>

