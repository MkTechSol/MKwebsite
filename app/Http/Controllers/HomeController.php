<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Bannerim;
use App\Models\service;
use App\Models\post;
use Illuminate\Http\Request;
use App\Models\test;
use App\Models\Testimonial;
use App\Models\Showcase;
use App\Models\workwith;
use App\Models\Aboutus;
use App\Models\Dectr;
use App\Models\contact;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $banner=banner::latest()->first();
        $services=service::get();
        /* $posts = Post::get(); */
        $posts = Test::latest()->get();
        $banners = Bannerim::latest()->first();
        $testimonials = Testimonial::latest()->get();
        $showcases = Showcase::latest()->get();
        $workwiths = workwith::latest()->get();
        
        $products = Product::latest()->get();
        $categories = Category::all();
        // dd($services);
        return view('welcome',compact('banner','services', 'posts','banners', 'testimonials','showcases','workwiths','products','categories'));
    }

    public function indexab()
    {
        $products = Product::latest()->get();
        $categories = Category::all();
        $abts = Aboutus::latest()->get();
        $dectrs = Dectr::latest()->get();
        
        
        // dd($services);
        return view('aboutus',compact('abts','dectrs','products','categories'));
    }

    public function indexco()
    {
        $products = Product::latest()->get();
        $categories = Category::all();
        $contacts = contact::latest()->get();
        
        
        // dd($services);
        return view('contactus',compact('contacts','products','categories'));
    }

    public function indexse()
    {
        
        $posts = Test::latest()->get();
        
        // dd($services);
        return view('service',compact('posts'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
