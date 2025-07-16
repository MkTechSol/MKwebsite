<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Bannerim;
use App\Models\Testimonial;
use App\Models\Showcase;
use App\Models\workwith;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Aboutus;
use App\Models\Dectr;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;
use App\Models\Category;
use App\Models\post;

class GeneralController extends Controller
{
    public function index()
{ 
    $posts = Test::latest()->get();
    $products = Product::latest()->get();
    $categories = Category::all();
    
    return view('admin.layout.general', compact('posts'));
   
    
   
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:10240',
            
        ]);

        if ($request->hasFile('image')) {
            $imageName1 = time() . '_1.' . $request->image->extension();  
            $request->image->move(public_path('assets/images'), $imageName1);
    
            // Process the first image
            $imagePath1 = public_path('assets/images/') . $imageName1;
            $manager = new ImageManager(new Driver());
            $image1 = $manager->read($imagePath1);
            $image1->pad(30, 30, $background = 'transparent'); // Adjust these dimensions as needed
            $image1->save($imagePath1);
    
            $validatedData['img'] = $imageName1;
        }
    
        // Check if image2 is uploaded
        if ($request->hasFile('image2')) {
            $imageName2 = time() . '_2.' . $request->image2->extension();  
            $request->image2->move(public_path('assets/images'), $imageName2);
    
            // Process the second image
            $imagePath2 = public_path('assets/images/') . $imageName2;
            $image2 = $manager->read($imagePath2);
            $image2->pad(511, 475, $background = 'transparent'); // Adjust these dimensions as needed
            $image2->save($imagePath2);
    
            $validatedData['image2'] = $imageName2;
        }
    
        Test::create($validatedData);

        return redirect()->route('admin.layout.general.index')->with('success', 'Post created successfully!');
    }
    public function destroy($id)
{
    Test::findOrFail($id)->delete();

    return redirect()->route('admin.layout.general.index')->with('success', 'Post deleted successfully!');
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'heading' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $post = Test::findOrFail($id);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images'), $imageName);
        $post->img = $imageName;
    }

    $post->heading = $request->heading;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('admin.layout.general.index')->with('success', 'Post updated successfully!');
}


public function bannerindex()
{
    $banners = Bannerim::latest()->get();
    
    return view('admin.layout.bannerimg', compact('banners'));   
   
}



public function storev(Request $request)
    {
        $validatedData = $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/images'), $imageName);


        $validatedData['img'] = $imageName;

    
        Bannerim::create($validatedData);

        return redirect()->route('admin.layout.bannerimg.index')->with('success', 'Post created successfully!');
    }

    public function destroyv($id)
    {
        Bannerim::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.bannerimg.index')->with('success', 'Post deleted successfully!');
    }

    /* for testimonials */

    public function testimonialindex()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.layout.testimonial', compact('testimonials'));
       
        
       
    }


    public function storetest(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'required|string',
            
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/images'), $imageName);


        $imagePath = public_path('assets/images/') . $imageName;
        $manager = new ImageManager(new Driver());
        $image = $manager->read($imagePath);
        $image->pad(100, 100,$background = 'transparent'); // Adjust these dimensions as needed
        $image->save($imagePath);



        


        $validatedData['img'] = $imageName;

    
        Testimonial::create($validatedData);

        return redirect()->route('admin.layout.testimonial.index')->with('success', 'Post created successfully!');
    }

    public function destroytest($id)
    {
        Testimonial::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.testimonial.index')->with('success', 'Post deleted successfully!');
    }



    public function updatetest(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'designation' => 'required|string',

    ]);

    $testimonai = Testimonial::findOrFail($id);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images'), $imageName);
        $testimonai->img = $imageName;
    }

    $testimonai->name = $request->name;
    $testimonai->content = $request->content;
    $testimonai->designation = $request->designation;
    $testimonai->save();

    return redirect()->route('admin.layout.testimonial.index')->with('success', 'Post updated successfully!');
}


public function showcaselindex()
{
    $showcases = Showcase::latest()->get();
    return view('admin.layout.showcase', compact('showcases'));
          
}

public function storeshowcase(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bgclr' => 'required|string',
            
        ]);

        $imagePaths = []; // Initialize an array to store image paths

        foreach ($request->file('images') as $image) {
            $img_path='assets/images/';
            $image_name=uniqid() . '_slider.' .$image->extension();
            $manager=new ImageManager( new Driver());
            $img=$manager->read($image->path());
            $img->pad(200,200,$background = 'transparent')->save($img_path.$image_name);
            $imagePaths[] = $image_name;
          
        }

        $imagePathsString = implode(',', $imagePaths);


        

    
        $showcase = new Showcase();

        // Set attributes for the Showcase model instance
        $showcase->name = $validatedData['name'];
        $showcase->content = $validatedData['content'];
        $showcase->img = $imagePathsString; // Assign the concatenated string to the 'img' attribute
        $showcase->bgclr = $validatedData['bgclr'];

        // Save the Showcase model instance to the database
        $showcase->save();

        return redirect()->route('admin.layout.showcase.index')->with('success', 'Post created successfully!');
    }


    public function destroyworkcase($id)
    {
        Showcase::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.showcase.index')->with('success', 'Post deleted successfully!');
    }




    public function workwindex()
    {
        $workwiths = workwith::latest()->get();
        return view('admin.layout.workinwith', compact('workwiths'));
       
        
       
    }


    public function workwstore(Request $request)
    {
        $validatedData = $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);
        
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/images'), $imageName);

        $imagePath = public_path('assets/images/') . $imageName;
        $manager = new ImageManager(new Driver());
        $image = $manager->read($imagePath);
        $image->pad(100, 100,$background = 'transparent'); // Adjust these dimensions as needed
        $image->save($imagePath);


        $validatedData['img'] = $imageName;

    
        workwith::create($validatedData);

        return redirect()->route('admin.layout.workinwith.index')->with('success', 'Post created successfully!');
    }

    public function destroyworkw($id)
    {
        workwith::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.workinwith.index')->with('success', 'Post deleted successfully!');
    }

/* controler for about us page  */

    public function indexabout()
    {
        $abts = Aboutus::latest()->get();
        return view('admin.layout.aboutuss', compact('abts'));   
       
    }

    public function storeabout(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/images'), $imageName);

        $imagePath = public_path('assets/images/') . $imageName;
        $manager = new ImageManager(new Driver());
        $image = $manager->read($imagePath);
        $image->pad(292, 407,$background = 'transparent');
        $image->save($imagePath);


        $validatedData['img'] = $imageName;

    
        Aboutus::create($validatedData);

        return redirect()->route('admin.layout.aboutuss.index')->with('success', 'Post created successfully!');
    }


    public function destroyabt($id)
    {
        Aboutus::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.aboutuss.index')->with('success', 'Post deleted successfully!');
    }




    public function indexabou()
    {
        $dectrs = Dectr::latest()->get();
        return view('admin.layout.aboutust', compact('dectrs'));   
       
    }


    public function storeabou(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',

            
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/images'), $imageName);

        $imagePath = public_path('assets/images/') . $imageName;
        $manager = new ImageManager(new Driver());
        $image = $manager->read($imagePath);
        $image->pad(290, 312,$background = 'transparent');
        $image->save($imagePath);


        $validatedData['img'] = $imageName;

    
        Dectr::create($validatedData);

        return redirect()->route('admin.layout.aboutust.index')->with('success', 'Post created successfully!');
    }




    public function destroyab($id)
    {
        Dectr::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.aboutust.index')->with('success', 'Post deleted successfully!');
    }



/* end controller for aboutus  */
/* for contact form  */

public function indexcont()
{
    $contacts = contact::latest()->get();
    return view('admin.layout.cont', compact('contacts'));   
   
}


public function storecont(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required|string',
            'company' => 'required|string',
            'subject' => 'required|string',
            'content' => 'required|string',

            
        ]);

        

        /* dd($validatedData['name']); */
        contact::create($validatedData); 

        Mail::to('admin@gmail.com')->send(new ContactUsMail($validatedData));

        return redirect()->route('contactus')->with('success', 'Post created successfully!');
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }



    public function storeprod(Request $request)

{
    if ($request->filled('new_category')) {
        $category = Category::create([
            'name' => $request->input('new_category')
        ]);
        // Set the category_id to the newly created category's ID
        $request->merge(['category_id' => $category->id]);
    }
   
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'imgtxt' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'key_features' => 'required|array',
        'key_features.*.name' => 'required|string|max:255',
        'key_features.*.description' => 'required|string|max:500',
        'new_category' => 'nullable|string|max:255'
    ]);

    if ($request->filled('new_category')) {
        $category = Category::create([
            'name' => $validatedData['new_category']
        ]);




        // Set the category_id to the newly created category's ID
        $validatedData['category_id'] = $category->id;
    }


    

    
    
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('assets/images'), $imageName);

    $imagePath = public_path('assets/images/') . $imageName;
    $manager = new ImageManager(new Driver());
    $image = $manager->read($imagePath);
    $image->pad(290, 312,$background = 'transparent');
    $image->save($imagePath);

    $validatedData['img'] = $imageName;

    // Create the product
    $product = Product::create($validatedData);

    // Save key features
    foreach ($validatedData['key_features'] as $keyFeature) {
        $product->keyFeatures()->create([
            'name' => $keyFeature['name'],
            'description' => $keyFeature['description']
        ]);
    }

    

   

    return redirect()->route('admin.layout.prodc.index')->with('success', 'Post created successfully!');
}

public function destroypro($id)
    {
        Product::findOrFail($id)->delete();
    
        return redirect()->route('admin.layout.prodc.index')->with('success', 'Post deleted successfully!');
    }


public function indexprodc()
{
    $products = Product::latest()->get();
    $categories = Category::all();
    return view('admin.layout.prodc', compact('products','categories'));   
   
}



public function __construct()
{
    $this->middleware(function ($request, $next) {
        $products = Product::latest()->get();
        $categories = Category::all();

        view()->share('products', $products);
        view()->share('categories', $categories);

        return $next($request);
    });
}



 

/* end for contact form */
}
