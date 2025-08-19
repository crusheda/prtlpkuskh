<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page Keren</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
  <!-- Custom -->
  <style>
    body { font-family: "Poppins", sans-serif; }
    .navbar { box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
    .hero { height: 100vh; background: linear-gradient(to right, #6a11cb, #2575fc); color: white; display:flex; align-items:center; justify-content:center; flex-direction:column; text-align:center; }
    .hero h1 { font-size: 3rem; font-weight: bold; }
    .hero p { font-size: 1.25rem; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">MyLanding</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Web Development</a></li>
            <li><a class="dropdown-item" href="#">Mobile Apps</a></li>
            <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" data-zanim-timeline='{"delay":0.5}' data-zanim-trigger="scroll">
  <h1 data-zanim-xs='{"from":{"opacity":0,"y":40},"to":{"opacity":1,"y":0},"duration":0.8}'>Selamat Datang</h1>
  <p data-zanim-xs='{"from":{"opacity":0},"to":{"opacity":1},"duration":1,"delay":0.3}'>Landing Page dengan Bootstrap 5, Owl Carousel, dan Animasi Scroll</p>
  <a href="#about" class="btn btn-light mt-3" data-zanim-xs='{"from":{"opacity":0},"to":{"opacity":1},"duration":1,"delay":0.6}'>Pelajari Lebih Lanjut</a>
</section>

<!-- Owl Carousel -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Portfolio</h2>
    <div class="owl-carousel owl-theme">
      <div class="item"><img src="https://picsum.photos/800/400?1" class="img-fluid rounded shadow"></div>
      <div class="item"><img src="https://picsum.photos/800/400?2" class="img-fluid rounded shadow"></div>
      <div class="item"><img src="https://picsum.photos/800/400?3" class="img-fluid rounded shadow"></div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4 text-center">
  <p class="mb-0">&copy; 2025 MyLanding. All rights reserved.</p>
</footer>

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Zanimation -->
<script src="https://unpkg.com/zanimation"></script>

<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items:1,
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
      animateOut: 'fadeOut'
    });
  });
</script>

</body>
</html>
