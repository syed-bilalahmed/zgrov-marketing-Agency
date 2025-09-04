<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="./" class="logo d-flex align-items-center">
      <img src="images/Zgrovlogo.png" margin-left="50px" alt="Zgrov Logo">
      <h1 class="sitename"> Zgrov</h1>

    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="service.php">Services</a></li>
        <li class="dropdown"><a href="./"><span>Pricing</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="pricing.php">All in Pricing</a></li>
            <li><a href="smm-pricing.php">SMM Pricing</a></li>
            <li><a href="seo-pricing.php">SEO Pricing</a></li>
            <li><a href="web-dev.php">Web Development Pricing</a></li>
          </ul>
        </li>
        <li><a href="contact-us.php">Contact</a></li>
        <li><a href="faqs.php">Faqs</a></li>
        <li><a href="Courses.php">Courses</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  <a class="btn-getstarted" style="background-color: #012a4a; color: #fff;" >
  Apply Now
</a>

  </div>
</header>
<div class="modal fade" id="applyNowModal" tabindex="-1" aria-labelledby="applyNowLabel" aria-hidden="true">
  <div class="modal-dialog modal-m modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="applyNowLabel">Application Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <iframe 
          src="https://docs.google.com/forms/d/e/1FAIpQLSfbt25dG6jVKhEOyV-T8t6diFW9Q9-UIqpH6REZIfGTmvPUWw/viewform?embedded=true" 
          width="90%" 
          height="450" 
          frameborder="0" 
          marginheight="0" 
          marginwidth="0">
          Loading…
        </iframe>
      </div>
    </div>
  </div>
</div>
<style>
  #navmenu a.active {
    color: #012a4a;
    font-weight: bold;
    border-bottom: 2px solid #012a4a;
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
      link.classList.add("");
    }
  });
</script>