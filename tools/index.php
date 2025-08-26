<?php
// tools.zgrov.com index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZGrov Tools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <a href=""></a>
  <style>
    body { background: #f9fafb; font-family: "Segoe UI", sans-serif; }
    .navbar { background: #08244b; }
    .navbar-brand, .nav-link { color: #fff !important; font-weight: 500; }
    .navbar-nav .nav-link:hover, 
    .dropdown-menu a:hover { color: #f1c40f !important; }
    .hero { padding: 80px 20px; text-align: center; background: linear-gradient(135deg, #08244b, #134e8a); color: white; border-radius: 0 0 30px 30px; }
    .hero h1 { font-size: 2.5rem; font-weight: bold; }
    footer { background: #08244b; color: #fff; text-align: center; padding: 15px 0; margin-top: 50px; border-radius: 30px 30px 0 0; }

    /* Show dropdowns on hover */
    .navbar-nav .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
    .dropdown-menu {
      background: #134e8a;
      border-radius: 8px;
    }
    .dropdown-menu a {
      color: #fff !important;
      font-weight: 400;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php">ZGrov Tools</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">

          <!-- SEO Tools with subcategories -->
          <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="./seo-tools/index.php" id="seoDropdown" role="button">
    SEO Tools
  </a>
  <ul class="dropdown-menu" aria-labelledby="seoDropdown">
    <li><a class="dropdown-item" href="#">Keyword Finder</a></li>
    <li><a class="dropdown-item" href="#">Backlink Checker</a></li>
    <li><a class="dropdown-item" href="#">Meta Tag Generator</a></li>
    <li><a class="dropdown-item" href="#">Site Audit</a></li>
  </ul>
</li>


          <!-- Analytics Tools -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="analyticsDropdown" role="button" data-bs-toggle="dropdown">Analytics</a>
            <ul class="dropdown-menu" aria-labelledby="analyticsDropdown">
              <li><a class="dropdown-item" href="#">Traffic Analysis</a></li>
              <li><a class="dropdown-item" href="#">Page Speed Test</a></li>
              <li><a class="dropdown-item" href="#">Visitor Tracker</a></li>
            </ul>
          </li>

          <!-- PDF Tools -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pdfDropdown" role="button" data-bs-toggle="dropdown">PDF Tools</a>
            <ul class="dropdown-menu" aria-labelledby="pdfDropdown">
              <li><a class="dropdown-item" href="#">Merge PDF</a></li>
              <li><a class="dropdown-item" href="#">Split PDF</a></li>
              <li><a class="dropdown-item" href="#">PDF to Word</a></li>
              <li><a class="dropdown-item" href="#">Compress PDF</a></li>
            </ul>
          </li>

          <!-- Background Tools -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="bgDropdown" role="button" data-bs-toggle="dropdown">Background Tools</a>
            <ul class="dropdown-menu" aria-labelledby="bgDropdown">
              <li><a class="dropdown-item" href="#">Remove Background</a></li>
              <li><a class="dropdown-item" href="#">Change Background</a></li>
              <li><a class="dropdown-item" href="#">Blur Background</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to ZGrov Tools</h1>
      <p class="lead">All-in-one hub for SEO, Analytics, PDF, and Background utilities.</p>
    </div>
  </section>

  <!-- Landing Page Content -->
  <div class="container text-center my-5">
    <h2 class="fw-bold">Start exploring our tools</h2>
    <p class="text-muted">Hover over the menu to see available tools.</p>
  </div>

  <?php include('./footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
