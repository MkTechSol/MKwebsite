<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="MK Techsol - Your trusted partner for innovative solutions.">
  <title>MK Techsol | Innovative IT Solutions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }
    .navbar {
      background: linear-gradient(135deg, #004080, #002c5f);
      padding: 1rem 2rem;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
    .navbar-brand {
      display: flex;
      align-items: center;
    }
    .navbar-brand img {
      width: 50px;
      height: auto;
      margin-right: 10px;
    }
    .navbar-brand strong {
      font-size: 1.5rem;
      color: #fff;
    }
    .navbar-nav .nav-link {
      color: #fff !important;
      font-weight: 500;
      padding: 0.8rem 1rem;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    .navbar-nav .nav-link:hover {
      background-color: #003366;
    }
    .code-banner {
      margin-top: 80px; /* Space between navbar and banner */
      background: linear-gradient(135deg, #004080, #002c5f);
      color: #fff;
      text-align: center;
      padding: 100px 20px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      position: relative;
      overflow: hidden;
    }
    .code-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      width: 150%;
      height: 100%;
      background: radial-gradient(circle at center, rgba(255, 255, 255, 0.3), transparent);
      transform: translateX(-50%);
    }
    .code-banner h1 {
      font-size: 4rem;
      font-weight: 700;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }
    .code-banner p {
      font-size: 1.2rem;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
    }
    .services-section, .team-section {
      padding: 60px 20px;
    }
    .services-section h2, .team-section h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 700;
      color: #004080;
    }
    .services-card, .team-card {
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .services-card:hover, .team-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }
    .team-card img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
    }
    footer {
      background-color: #004080;
      color: #fff;
      text-align: center;
      padding: 30px 0;
    }
    footer p {
      margin: 0;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="MK Techsol Logo"> <strong>MK Techsol</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#services">Service</a></li>
          <li class="nav-item"><a class="nav-link" href="#team">Our Team</a></li>
          <li class="nav-item"><a class="nav-link" href="#ceo-message">CEO Message</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
 <hr>
  <!-- Code Banner with Slider -->
  <section class="code-banner">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <h1>Welcome to MK Techsol</h1>
            <p>Your trusted partner for innovative IT solutions.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <h1>Empowering Your Business</h1>
            <p>Delivering cutting-edge technology solutions tailored to your needs.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <h1>Innovate with MK Techsol</h1>
            <p>Redefining possibilities through technology.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services-section">
    <div class="container">
      <h2>Our Services</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card services-card p-4">
            <h4>Web Development</h4>
            <p>We build modern, responsive, and scalable web applications tailored to your needs.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card services-card p-4">
            <h4>Mobile App Development</h4>
            <p>Create feature-rich mobile applications for both Android and iOS platforms.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card services-card p-4">
            <h4>IT Consultancy</h4>
            <p>Providing expert guidance to optimize your technology stack and operations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section id="team" class="team-section">
    <div class="container">
      <h2>Meet Our Team</h2>
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <div class="card team-card p-4">
            <img src="team1.jpg" alt="Team Member">
            <h4>John Doe</h4>
            <p>CEO & Founder</p>
          </div>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <div class="card team-card p-4">
            <img src="team2.jpg" alt="Team Member">
            <h4>Jane Smith</h4>
            <p>CTO</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 MK Techsol. All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha
