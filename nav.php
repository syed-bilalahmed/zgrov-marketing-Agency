<style>
  .header .logo img {
    max-height: 40px;
    margin-left: 10px;
}
</style>
<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="./" class="logo d-flex align-items-center">
      <img src="Z grov logo.png" margin-left="50px" alt=" "> 
      <h1 class="sitename">   Zgrov</h1>
 
    </a>
 
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="about.php">About</a></li>
        <!-- <li><a href="#features">Features</a></li> -->
        <li><a href="services.php">Services</a></li>
        <li class="dropdown"><a href="#"><span>Pricing</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="pricing.php">All in Pricing</a></li>
            <li><a href="smm-pricing.php">SMM Pricing</a></li>
            <li><a href="seo-pricing.php">SEO Pricing</a></li>
            <li><a href="web-dev.php">Web Development Pricing</a></li>
          </ul>
        </li>
        <li><a href="contact-us.php">Contact</a></li>
        <li><a href="faqs.php">Faqs</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="btn-getstarted" style=" background-color: #37729F;" href="./#about">Get Started</a>

  </div>
</header>

<style>
  #navmenu a.active {
    color: #012a4a;
    font-weight: bold;
    border-bottom: 2px solid #37729F;
    padding-bottom: 2px;
  }
</style>

<script>
  // Get current page URL (without query params)
  const currentPage = window.location.pathname.split("/").pop();
  const navLinks = document.querySelectorAll("#navmenu a");

  navLinks.forEach(link => {
    const linkPage = link.getAttribute("href").split("/").pop();
    if (linkPage === currentPage && currentPage !== "") {
      link.classList.add("active");
    }
    // Special case for homepage
    if ((currentPage === "" || currentPage === "index.html") && link.getAttribute("href") === "./") {
      link.classList.add("active");
    }
  });
</script>
