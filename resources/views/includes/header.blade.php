<nav class="navbar navbar-expand-md ">
    <div class="row">
        <div class="col-md-4">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                    class="" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
        </div>

        <div class="collapse navbar-collapse col-md-8" id="navbarSupportedContent">
            <div class="row">
                    <ul class="navbar-nav  mb-2 ">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partaners') }}">Partners</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="productsDropdown" class="nav-link dropdown-toggle" href="#"
                                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!-- Retrieve categories -->
                                @foreach ($categories as $category)
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#"
                                            id="categoryDropdown{{ $category->id }}" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">{{ $category->name }}</a>
                                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown{{ $category->id }}">
                                            <!-- Retrieve products for this category -->
                                            @foreach ($category->products as $product)
                                                <li><a class="dropdown-item"
                                                        href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('carrer') }}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>

                        <li>
                            <a href="{{ route('contactus') }}"
                                class="btn btn-primary text-uppercase rounded-pill">Contact Us</a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</nav>
