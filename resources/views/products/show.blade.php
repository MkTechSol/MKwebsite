@extends('layouts.app')

@section('title', $product->name)

@section('content')


    <section>
        <div class="container ">
            <div class="row ">
                <div class="col-12 text-center mt-5 ">
                    <h2 class="mind1 ">Celebrating Excellence:<span class="shape1"> Explore Our Product Showcase</span></h2>
                    <div>
                    <p class="offer1 mt-4">Welcome to MK TechSol's Product Showcase, where innovation meets excellence, and quality is our hallmark.</p>
                   </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-12 col-md-6 col-sm-12 mt-5">
                    <h4 class="erp1">{{$product->name }} <br>
                        <!-- <span style="color: #76CAB8;">Your All-in-One Business Solution</span> --></h4>
                    <p class="revo1 text-left mt-4">{{$product->description }} </p>
                </div>

                <div class="col-12 col-md-6 col-sm-6 mt-5 text-center">
                    <img src="{{ asset('assets/images/' . $product->img) }}" class=" bb43 img-fluid" alt="">
                </div>


            </div>


            <div class="row justify-content-start mt-5">
                <div class="col-md-6 col-sm-12 col-12 mt-5 ">
                  <h5 class="fet1">Key Features and Benefits:</h5>
            </div>
            </div>
            

            @foreach ($product->keyFeatures as $keyFeature)
            <div class="row mt-5 @if($loop->index % 2 == 0) justify-content-start @else justify-content-end @endif">
    
        
            <div class="col-md-6 col-sm-12 col-12 mt-5 ">
                <div>
                    <img src="{{ asset('assets/images/smlrocket.png') }}" class="img-fluid float-start top-50 start-0 translate-middle" alt="">
                </div>
                <div>
                    <h2 class="sem1">{{ $keyFeature->name }}</h2>
                    <p class="err1 mt-5 text-start">{{ $keyFeature->description }}</p>
                </div>
            </div>
        
   
            </div>
            @endforeach 


            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-sm-12 col-12 mt-5   ">
                    <div class="card text-white" style="border: none;">
                        <img src="{{ asset('assets/images/pro22.png' ) }}" class="card-img img-fluid" alt="...">
                        <div class="card-img-overlay text-wrap">
                          
                          <p class="card-text imet mt-4  text-center position-relative top-50 start-50 translate-middle">{{$product->imgtxt}}</p>
                        </div>
                      </div>
            </div>
            </div>





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
                  <a href="javascript:" class="btn btn-primary text-uppercase rounded-pill tex">Get a quote</a></div>
                  </div>
                </div>
                </div>
              </div>
      
            </div>
           

           
            
        </div>
        
    </section>
   
@endsection