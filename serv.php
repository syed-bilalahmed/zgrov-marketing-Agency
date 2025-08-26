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
        <div class="text-center mb-5" data-aos="fade-up">
          <h2 class="fw-bold">Our Services</h2>
          <p>We offer a wide range of digital marketing services to help your business grow online.</p>

        </div>
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
              <img src="images/ad.png" alt="Meta Ads Icon" class="icon-metaads" width="60" height="60">

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
            <div class="picture-card text-center">
              <img src="images/add.png" alt="Meta Ads Icon" class="icon-metaads" width="60" height="60">
              <h5 class="fw-bold mt-3">Meta Ads</h5>
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