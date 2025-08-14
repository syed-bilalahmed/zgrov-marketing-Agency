<style>
  .picture-card {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align: center;
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }
  .picture-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  }
  .picture-card i {
    font-size: 48px;
    margin-bottom: 15px;
    display: inline-block;
    transition: color 0.3s ease;
  }
  /* Icon Colors */
  .icon-webdev { color: #007bff; }        /* Blue */
  .icon-seo { color: #28a745; }           /* Green */
  .icon-googleads { color: #fbbc05; }     /* Yellow */
  .icon-smm { color: #e1306c; }           /* Instagram Pink */
  .icon-metaads { color: #1877f2; }       /* Facebook Blue */
  .icon-graphic { color: #ff5722; }       /* Orange */

  /* Icon color change on card hover */
  .picture-card:hover i {
    filter: brightness(1.2);
  }

  /* Remove bullets */
  .picture-card ul {
    list-style: none;
    padding: 0;
    margin: 0 0 15px 0;
  }
  .picture-card ul li {
    margin-bottom: 8px;
  }
  .card-btn {
    margin: 5px 5px 0 5px;
    padding: 8px 18px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }
  .see-more-btn {
    background-color: #37729F;
    color: white;
  }
  .see-more-btn:hover {
    background-color: #2a5e7d;
    box-shadow: 0 4px 15px rgba(42, 94, 125, 0.5);
  }
  .picture-card a .card-btn {
    background-color: #25d366; /* WhatsApp green */
    color: white;
  }
  .picture-card a .card-btn:hover {
    background-color: #128c44;
    box-shadow: 0 4px 15px rgba(18, 140, 68, 0.5);
  }
</style>

<?php include('header.php'); ?>

<body class="index-page">

  <?php include('nav.php'); ?>

  <main class="main">

  <br>
  <br> 
  <br>  
  <br> 
<div class="container py-5">
    <div class="row g-4">
<div class="row">

  <!-- Web Design & Development -->
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
    <div class="picture-card">
      <i class="bi bi-laptop icon-webdev"></i>
      <h5 class="fw-bold">Web Design & Development</h5>
      <ul>
        <li>Responsive design</li>
        <li>SEO-friendly structure</li>
        <li>Optimized code</li>
      </ul>
      <div class="more-text" style="display:none;">
        <ul>
          <li>Custom CMS</li>
          <li>E-commerce integration</li>
          <li>Maintenance & support</li>
        </ul>
      </div>
      <button class="card-btn see-more-btn">See More</button>
      <a href="https://wa.me/923001234567" target="_blank">
        <button class="card-btn">Contact Us</button>
      </a>
    </div>
  </div>

  <!-- SEO -->
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
    <div class="picture-card">
      <i class="bi bi-search icon-seo"></i>
      <h5 class="fw-bold">SEO</h5>
      <ul>
        <li>Keyword research</li>
        <li>On-page optimization</li>
        <li>Link building</li>
      </ul>
      <div class="more-text" style="display:none;">
        <ul>
          <li>Technical SEO audits</li>
          <li>Content strategy</li>
          <li>Performance tracking</li>
        </ul>
      </div>
      <button class="card-btn see-more-btn">See More</button>
      <a href="https://wa.me/923001234567" target="_blank">
        <button class="card-btn">Contact Us</button>
      </a>
    </div>
  </div>

  <!-- Google Ads -->
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
    <div class="picture-card">
      <i class="bi bi-bullseye icon-googleads"></i>
      <h5 class="fw-bold">Google Ads</h5>
      <ul>
        <li>Campaign setup</li>
        <li>Keyword targeting</li>
        <li>Performance monitoring</li>
      </ul>
      <div class="more-text" style="display:none;">
        <ul>
          <li>Ad copywriting</li>
          <li>Conversion tracking</li>
          <li>Budget optimization</li>
        </ul>
      </div>
      <button class="card-btn see-more-btn">See More</button>
      <a href="https://wa.me/923001234567" target="_blank">
        <button class="card-btn">Contact Us</button>
      </a>
    </div>
  </div>

  <!-- Social Media Marketing -->
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
    <div class="picture-card">
      <i class="bi bi-megaphone icon-smm"></i>
      <h5 class="fw-bold">Social Media Marketing</h5>
      <ul>
        <li>Content creation</li>
        <li>Audience engagement</li>
        <li>Ad campaigns</li>
      </ul>
      <div class="more-text" style="display:none;">
        <ul>
          <li>Influencer marketing</li>
          <li>Analytics & reports</li>
          <li>Community management</li>
        </ul>
      </div>
      <button class="card-btn see-more-btn">See More</button>
      <a href="https://wa.me/923001234567" target="_blank">
        <button class="card-btn">Contact Us</button>
      </a>
    </div>
  </div>

  <!-- Meta Ads -->
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
    <div class="picture-card">
      <i class="bi bi-facebook icon-metaads"></i>
      <h5 class="fw-bold">Meta Ads</h5>
      <ul>
        <li>Facebook Ads management</li>
        <li>Instagram campaigns</li>
        <li>Precise audience targeting</li>
      </ul>
      <div class="more-text" style="display:none;">
        <ul>
          <li>Creative design</li>
          <li>Performance tracking</li>
          <li>Budget management</li>
        </ul>
      </div>
      <button class="card-btn see-more-btn">See More</button>
      <a href="https://wa.me/923001234567" target="_blank">
        <button class="card-btn">Contact Us</button>
      </a>
    </div>
  </div>

  <!-- Graphic Design -->
  <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
    <div class="picture-card">
      <i class="bi bi-palette icon-graphic"></i>
      <h5 class="fw-bold">Graphic Design</h5>
      <ul>
        <li>Logo design</li>
        <li>Brochures & flyers</li>
        <li>Brand identity</li>
      </ul>
      <div class="more-text" style="display:none;">
        <ul>
          <li>Packaging design</li>
          <li>Banner ads</li>
          <li>Print media</li>
        </ul>
      </div>
      <button class="card-btn see-more-btn">See More</button>
      <a href="https://wa.me/923001234567" target="_blank">
        <button class="card-btn">Contact Us</button>
      </a>
    </div>
  </div>

</div>


       

        

    </div>
</div>

    
  </main>

 <?php include('footer.php'); ?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include('script.php'); ?>

<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
  });
</script>
<script>
document.querySelectorAll('.see-more-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        var moreText = this.parentElement.querySelector('.more-text');
        if (moreText.style.display === "none" || moreText.style.display === "") {
            moreText.style.display = "block";
            this.textContent = "See Less";
        } else {
            moreText.style.display = "none";
            this.textContent = "See More";
        }
    });
});
</script>
</body>

</html>