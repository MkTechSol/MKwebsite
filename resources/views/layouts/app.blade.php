<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('includes.head', ['title' => 'Products'])
    
    <title>@yield('title')</title>
    <!-- Include your CSS and JavaScript files here -->

<body>

@include('includes.header')

    <main>
   
        @yield('content')
    </main>
   
    
    @include('includes.footer')
    @include('includes.scripts')
   
</body>
</html>
