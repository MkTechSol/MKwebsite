<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Techsol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background: linear-gradient(135deg, #003366, #0055a5);
            color: white;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
        }

        .header .nav-link:hover {
            color: #ffcc00 !important;
        }

        .header .brand-text {
            font-family: 'Pacifico', cursive;
            font-size: 2rem;
            font-weight: bold;
            color: #ffcc00;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-section {
            background: linear-gradient(135deg, #003366, #0055a5);
            color: white;
            text-align: center;
            padding: 80px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 75%);
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            z-index: 2;
            position: relative;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            font-family: 'Roboto', sans-serif;
        }

        .hero-section p {
            font-size: 1.7rem;
            margin-top: 20px;
            z-index: 2;
            position: relative;
            font-family: 'Open Sans', sans-serif;
        }

        .hero-section .btn {
            margin-top: 30px;
            padding: 12px 40px;
            background: #ffcc00;
            color: #003366;
            border: none;
            font-weight: bold;
            font-size: 1.2rem;
            z-index: 2;
            position: relative;
        }

        .hero-section .btn:hover {
            background: #ffd633;
        }

        .services-slider .card {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .services-slider .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .services-slider .card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .services-slider .card p {
            font-size: 1rem;
            color: #555;
        }

        .team-section img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid #0055a5;
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        .team-section .card {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
        }

        .team-section .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .team-section h3 {
            font-size: 1.6rem;
            margin-top: 15px;
            color: #003366;
        }

        .team-section p {
            font-size: 1rem;
            color: #666;
        }

        footer {
            background-color: #003366;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="container d-flex justify-content-between align-items-center">
        <span class="brand-text">MK Techsol</span>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="#" class="nav-link">SERVICES</a></li>
                <li class="nav-item"><a href="#" class="nav-link">OUR PRODUCT</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Job Opportunities</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to MK Techsol</h1>
        <p class="lead">Your partner in delivering innovative solutions for Web, Mobile, and Game Development.</p>
        <a href="#services" class="btn btn-warning">Explore Our Services</a>
    </div>
</section>

<section id="services" class="services-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold display-6">Our Services</h2>
        <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center py-5">
                                    <h3 class="card-title mb-3 text-primary">Web Application Development</h3>
                                    <p class="card-text text-muted">We create robust and scalable web applications to empower your business.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center py-5">
                                    <h3 class="card-title mb-3 text-success">Android Application Development</h3>
                                    <p class="card-text text-muted">Modern and feature-rich Android apps tailored to your needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center py-5">
                                    <h3 class="card-title mb-3 text-danger">Game Development</h3>
                                    <p class="card-text text-muted">Interactive and engaging games designed to captivate audiences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center py-5">
                                    <h3 class="card-title mb-3 text-warning">UI/UX Designing</h3>
                                    <p class="card-text text-muted">Creative and user-friendly designs that leave a lasting impression.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center py-5">
                                    <h3 class="card-title mb-3 text-info">Custom Software Solutions</h3>
                                    <p class="card-text text-muted">Bespoke software tailored to your business requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <div class="card-body text-center py-5">
                                    <h3 class="card-title mb-3 text-secondary">Support & Maintenance</h3>
                                    <p class="card-text text-muted">Reliable support and updates for all your digital solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<style>
    .services-section {
        background: linear-gradient(to bottom, #f9f9f9, #ffffff);
    }
    .card:hover {
        transform: translateY(-10px);
        transition: all 0.3s ease-in-out;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        filter: brightness(0) invert(1);
    }
    .carousel-item {
        animation: fadeIn 0.5s;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>

<section class="team-section py-5" style="background: linear-gradient(to right, #f9f9f9, #eef2f3);">
    <div class="container">
        <h2 class="text-center mb-5" style="font-weight: 700; color: #333; text-transform: uppercase; letter-spacing: 2px;">Meet Our Team</h2>
        <div class="row justify-content-center">
            <!-- Team Member: CEO -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow text-center">
                    <div class="card-body">
                        <div class="team-img-wrapper mb-3">
                            <img src="ceo.jpg" alt="CEO" class="rounded-circle img-fluid" style="width: 120px; height: 120px; object-fit: cover; border: 5px solid #f8f9fa;">
                        </div>
                        <h3 class="card-title" style="font-weight: 600; color: #444;">CEO</h3>
                        <p class="text-muted">"We strive to deliver excellence in every project."</p>
                    </div>
                </div>
            </div>
            <!-- Team Member: Project Manager -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow text-center">
                    <div class="card-body">
                        <div class="team-img-wrapper mb-3">
                            <img src="pm.jpg" alt="Project Manager" class="rounded-circle img-fluid" style="width: 120px; height: 120px; object-fit: cover; border: 5px solid #f8f9fa;">
                        </div>
                        <h3 class="card-title" style="font-weight: 600; color: #444;">Project Manager</h3>
                        <p class="text-muted">Ensures timely and successful project delivery.</p>
                    </div>
                </div>
            </div>
            <!-- Team Member: Team Member -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow text-center">
                    <div class="card-body">
                        <div class="team-img-wrapper mb-3">
                            <img src="team.jpg" alt="Team Member" class="rounded-circle img-fluid" style="width: 120px; height: 120px; object-fit: cover; border: 5px solid #f8f9fa;">
                        </div>
                        <h3 class="card-title" style="font-weight: 600; color: #444;">Team Member</h3>
                        <p class="text-muted">Dedicated and talented professionals driving our success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="text-center">
    <div class="container py-3">
        <p>&copy; 2025 MK Techsol. All rights reserved.</p>
        <p>Contact us at: info@mktechsol.com | +92 341 8900999</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
