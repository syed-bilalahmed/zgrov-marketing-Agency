<style>
.client-logo {
  aspect-ratio: 1/ 1;   /* keeps width:height = 5:1 */
  width: 300px;          /* increase to make larger */
  object-fit: contain;   /* keeps image from stretching */
  background: #fff;      /* optional background */
  padding: 8px;          /* space around logo */
  border-radius: 6px;    /* smooth corners */
  display: block;
  margin: 0 auto;        /* center align */
}



</style>
<?php include('header.php'); ?>

<body class="index-page">

  <?php include('nav.php'); ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div style="color:#f5f9ff;background-color: #012A4A;" class="company-badge mb-4">
                <i class="bi bi-gear-fill me-2"></i>
                Working for your success
              </div>

              <h1 class="mb-4">
                Unlock Your Success <br>
                Everyday with <br>
                <span style="color: #012A4A;" class="accent-text">Z-Grov</span>
              </h1>

              <p class="mb-4 mb-md-5">
                Our mission is to blend creativity, strategy, and technology to help brands stand out, reach the right
                market, and grow in a meaningful way.
              </p>

              <div class="hero-buttons">
                <a href="#about" style="background-color:#012A4A;" class="btn btn-primary me-0 me-sm-2 mx-1">Get
                  Started</a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Play Video
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

              <div class="customers-badge">
                <div class="customer-avatars">
                  <span style="background-color:#012A4A;" class="avatar more">25+</span>
                </div>
                <p class="mb-0 mt-2">Trusted by 25+ satisfied clients across different industries</p>
              </div>

            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span style="color:#012A4A;" class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title">Welcome To Z-Grov</h2>
            <p class="about-description">At ZGROV, we believe marketing is more than just ads and campaigns—it’s about
              telling stories, creating experiences, and driving real results..</p>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-5">
                  <div class="profile d-flex align-items-center gap-3">
                    <img src="images/ceo.png" alt="CEO Profile" class="profile-image">
                    <div>
                      <h4 class="profile-name">Abdur Raheem</h4>
                      <strong><b>
                          <p style="color:#012A4A;" class="profile-position">CEO &amp; Founder</p>
                        </b></strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i style="color:#012A4A;" class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number">+92-3456246942</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="images/Zgrov website.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="images/z grove wwebsite.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div style="background-color: #012A4A;" class="experience-badge floating">
                <h3>15+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
    <center>
      <h2>Our Services</h2>
    </center>

    <section style="background: linear-gradient(135deg, #f5f9ff, #e6f8f7); padding: 60px 40px; max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; gap: 50px; flex-wrap: nowrap;">

      <!-- Left Side: Accordion -->
      <div class="left-accordion" style="flex: 2 1 600px; max-width: 500px;">
        <details style="background-color:#012A4A; color:#f5f9ff" data-aos="fade-up" data-aos-delay="100">
          <summary style="color:white;">SEO</summary>
          <p style="color:white;">Boost your website’s visibility on search engines with our expert SEO strategies that
            drive organic traffic and improve your search rankings.</p>
        </details>

        <details style="background-color:#012A4A; color:#f5f9ff" data-aos="fade-up" data-aos-delay="200">
          <summary style="color:white;">Google Ads</summary>
          <p style="color:white;">Reach your target audience instantly with targeted Google Ads campaigns designed to
            maximize your return on investment.</p>
        </details>

        <details style="background-color:#012A4A; color:#f5f9ff" data-aos="fade-up" data-aos-delay="300">
          <summary style="color:white;">Web Development</summary>
          <p style="color:white;">Create stunning, responsive, and user-friendly websites tailored to your business
            needs using the latest web technologies.</p>
        </details>

        <details style="background-color:#012A4A; color:#f5f9ff" data-aos="fade-up" data-aos-delay="400">
          <summary style="color:white;">SMM (Social Media Marketing)</summary>
          <p style="color:white;">Engage and grow your social media presence with creative campaigns that connect your
            brand to your audience effectively.</p>
        </details>

        <details style="background-color:#012A4A; color:#f5f9ff" data-aos="fade-up" data-aos-delay="500">
          <summary style="color:white;">Meta Ads</summary>
          <p style="color:white;">Leverage Facebook and Instagram advertising platforms to reach millions of potential
            customers with precise targeting and compelling creatives.</p>
        </details>

        <details style="background-color:#012A4A; color:#f5f9ff" data-aos="fade-up" data-aos-delay="600">
          <summary style="color:white;">Graphic Design</summary>
          <p style="color:white;">Enhance your brand identity with professional graphic design services including logos,
            brochures, banners, and more.</p>
        </details>
      </div>

      <!-- Right Side: Image -->
      <div class="right-image" style="flex: 1 1 250px; max-width: 550px; display: flex; justify-content: center;"
        data-aos="zoom-in" data-aos-delay="700">
        <img src="images/zgrov.png" alt="Services"
          style="max-width: 100%; height: auto; border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
      </div>

    </section>

    <!-- Clients Section -->
<section id="clients" class="clients section">

  <div class="container section-title" data-aos="fade-up" data-aos-delay="100">

    <h2>Clients</h2>

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 20
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 30
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 40
            },
            "992": {
              "slidesPerView": 6,
              "spaceBetween": 60
            }
          }
        }
      </script>

      <div class="swiper-wrapper align-items-center">

        <!-- Full Discount -->
        <div class="swiper-slide text-center">
          <img src="images/testimonial1.jpg" class="img-fluid client-logo" alt="full discount client">
          <h6 class="mt-2">
            <a href="https://fulldicount.com" target="_blank">Full Discount</a>
          </h6>
        </div>

        <!-- Heritress -->
        <div class="swiper-slide text-center">
          <img src="images/testimonial2.png" class="img-fluid client-logo" alt="heritress client">
          <h6 class="mt-2">
            <a href="https://heritress.com" target="_blank">Heritress</a>
          </h6>
        </div>

        <!-- PScoders -->
        <div class="swiper-slide text-center">
          <img src="pscoders.png" class="img-fluid client-logo" alt="pscoders client">
          <h6 class="mt-2">
            <a href="https://pscoders.com" target="_blank">PScoders</a>
          </h6>
        </div>

        <!-- Awgzo -->
        <div class="swiper-slide text-center">
          <img src="awgzo.jpg" class="img-fluid client-logo" alt="awgzo client">
          <h6 class="mt-2">
            <a href="https://awgzo.com" target="_blank">Awgzo</a>
          </h6>
        </div>

        <!-- Zawiya -->
        <div class="swiper-slide text-center">
          <img src="zawiyamain.png" class="img-fluid client-logo" alt="zawiya client">
          <h6 class="mt-2">
            <a href="https://zawiya.com" target="_blank">Zawiya</a>
          </h6>
        </div>

      

        <div class="swiper-slide text-center">
          <img src="assets/img/clients/client-7.png" class="img-fluid client-logo" alt="client 7">
          <h6 class="mt-2"><a href="#">Client 7</a></h6>
        </div>

        <div class="swiper-slide text-center">
          <img src="assets/img/clients/client-8.png" class="img-fluid client-logo" alt="client 8">
          <h6 class="mt-2"><a href="#">Client 8</a></h6>
        </div>

      </div>

      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" style="background-color: #ffffff; color: #012A4A;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color:#012A4A;">Testimonials</h2>
        <p style="color:#012A4A;">What our clients say about us</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item" style="color:#012A4A;">
              <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
              <h3 style="color:#012A4A;"> Shayn Ali </h3>
        <h4 style="color:#012A4A;">
  Founder 
  <a href="https://fulldicount.com/" target="_blank" style="color:#012A4A; text-decoration:none;">
    Full Discount <i class="bi bi-box-arrow-up-right" style="font-size:0.9rem; margin-left:4px;" title="Visit Full Discount"></i>
  </a>
</h4>

              <div class="stars">
                <i class="bi bi-star-fill" style="color:#012A4A;"></i>
                <i class="bi bi-star-fill" style="color:#012A4A;"></i>
                <i class="bi bi-star-fill" style="color:#012A4A;"></i>
                <i class="bi bi-star-fill" style="color:#012A4A;"></i>
                <i class="bi bi-star-fill" style="color:#012A4A;"></i>
              </div>
              <p style="color:#012A4A;">
                <i class="bi bi-quote quote-icon-left" style="color:#012A4A;"></i>
                <span>
                  Having been through a number of digital marketing agencies I was sceptical about employing another,
                  but I have to say
                  <b>
                    <a href="https://zgrov.com" style="color: #012A4A;" data-bs-toggle="tooltip" data-bs-placement="top"
                      title="Visit Zgrov's official website">
                      Zgrov
                    </a>
                  </b>
                  are a breath of fresh air. Within 3 months we saw a complete turnaround in our website performance
                  and new enquiries went from strength-to-strength. These guys really live and breathe digital and
                  think outside the box when it comes to campaigns and report on everything. Would highly recommend.
                </span>
                <i class="bi bi-quote quote-icon-right" style="color:#012A4A;"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
         
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <div class="testimonial-item" style="color:#012A4A;">
    <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
    <h3 style="color:#012A4A;">Syed Bilal Ahmed </h3>
<h4 style="color:#012A4A;">
  Co Founder @ 
  <a href="https://pscoders.com" target="_blank" style="color:#012A4A; text-decoration:none;">
    pscoders <i class="bi bi-box-arrow-up-right" style="font-size:0.9rem; margin-left:4px;"></i>
  </a>
</h4>


    <div class="stars">
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
    </div>
    <p style="color:#012A4A;">
      <i class="bi bi-quote quote-icon-left" style="color:#012A4A;"></i>
      <span>
        Working with 
        <b>
          <a href="https://zgrov.com" style="color: #012A4A;" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Visit Zgrov's official website">
            Zgrov
          </a>
        </b> 
        has been an excellent experience. Their team is professional, responsive, and highly creative. 
        They not only improved our online visibility but also delivered strategies that brought real business growth. 
        I’m impressed with their transparent reporting and commitment to results. Highly recommended for anyone looking to scale online.
      </span>
      <i class="bi bi-quote quote-icon-right" style="color:#012A4A;"></i>
    </p>
  </div>
</div>
<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <div class="testimonial-item" style="color:#012A4A;">
    <h3 style="color:#012A4A;">Waleed Ahmed</h3>
    <h4 style="color:#012A4A;">
      Founder & CEO @ 
      <a href="https://awgzo.com" target="_blank" style="color:#012A4A; text-decoration:none;">
        Awgzo <i class="bi bi-box-arrow-up-right" style="font-size:0.9rem; margin-left:4px;"></i>
      </a>
    </h4>

    <div class="stars">
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
      <i class="bi bi-star-fill" style="color:#012A4A;"></i>
    </div>

    <p style="color:#012A4A;">
      <i class="bi bi-quote quote-icon-left" style="color:#012A4A;"></i>
      <span>
        Partnering with 
        <b>
          <a href="https://zgrov.com" style="color:#012A4A;" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Visit Zgrov's official website">
            Zgrov
          </a>
        </b> 
        has been a game-changer for us at Awgzo. Their team deeply understands digital marketing and web 
        development, and they deliver solutions that are both innovative and results-driven. 
        What impressed me most was their ability to tailor strategies specifically to our business model, 
        ensuring measurable growth in a short time. Their professionalism and creativity set them apart.
      </span>
      <i class="bi bi-quote quote-icon-right" style="color:#012A4A;"></i>
    </p>
  </div>
</div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>
      </div>

    </section><!-- /Stats Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section" style="background-color: #f8f9fa; padding:60px 0;">

      <!-- Section Title -->
      <div class="container section-title text-center" data-aos="fade-up">
        <h2 style="color:#012A4A; font-weight:700;">Contact</h2>
        <p style="color:#555;">We’d love to hear from you. Reach out to us for business inquiries, collaborations, or
          support.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 g-lg-5">

          <!-- Contact Info -->
          <div class="col-lg-5">
            <div class="info-box"
              style="background:#fff; padding:25px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08);"
              data-aos="fade-up" data-aos-delay="200">
              <h3 style="color:#012A4A; font-weight:600;">Contact Info</h3>
              <p style="color:#555;">We’re here to answer your queries and provide you the best solutions for your
                business needs.</p>

              <!-- Location -->
              <div class="info-item d-flex align-items-start mt-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box"
                  style="background:#012A4A; color:#fff; width:45px; height:45px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:20px; margin-right:15px;">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4 style="color:#012A4A; margin:0;">Our Location</h4>
                  <p style="margin:0; color:#555;">Office #12, Tech Valley Plaza,<br>Kohat, Khyber Pakhtunkhwa, Pakistan
                  </p>
                </div>
              </div>

              <!-- Phone -->
              <div class="info-item d-flex align-items-start mt-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box"
                  style="background:#012A4A; color:#fff; width:45px; height:45px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:20px; margin-right:15px;">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4 style="color:#012A4A; margin:0;">Phone Number</h4>
                  <p style="margin:0; color:#555;">+92 336 0606905</p>
                </div>
              </div>

              <!-- Email -->
              <div class="info-item d-flex align-items-start mt-4" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box"
                  style="background:#012A4A; color:#fff; width:45px; height:45px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:20px; margin-right:15px;">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4 style="color:#012A4A; margin:0;">Email Address</h4>
                  <p style="margin:0; color:#555;">info@zgrov.com<br>support@zgrov.com</p>
                </div>
              </div>

            </div>
          </div>

          <!-- Contact Form -->
          <div class="col-lg-7">
            <div class="contact-form"
              style="background:#fff; padding:25px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08);"
              data-aos="fade-up" data-aos-delay="300">
              <h3 style="color:#012A4A; font-weight:600;">Get In Touch</h3>
              <p style="color:#555;">Fill out the form below and we’ll get back to you as soon as possible.</p>

              <form id="contactForm1" action="forms/contact.php" method="post" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required
                      style="border-radius:6px; border:1px solid #012A4A;">
                  </div>

                  <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required
                      style="border-radius:6px; border:1px solid #012A4A;">
                  </div>

                  <div class="col-12">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required
                      style="border-radius:6px; border:1px solid #012A4A;">
                  </div>

                  <div class="col-12">
                    <textarea name="message" class="form-control" rows="6" placeholder="Message" required
                      style="border-radius:6px; border:1px solid #012A4A;"></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn"
                      style="background:#012A4A; color:#fff; padding:10px 25px; border:none; border-radius:6px; font-weight:500; transition:0.3s;">
                      Send Message
                    </button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include('footer.php'); ?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <?php include('script.php'); ?>

  <!-- Fullscreen Welcome Popup -->
  <div id="welcomePopup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
            background: rgba(0,0,0,0.6); display: flex; align-items: center; 
            justify-content: center; z-index: 9999; display: none;">
    <div style="background: #012A4A; color: white; padding: 30px 50px; 
              border-radius: 12px; font-size: 1.5rem; text-align: center; 
              box-shadow: 0px 6px 15px rgba(0,0,0,0.3);">
      👋 Welcome to Zgrov!
    </div>
  </div>

  <script>
    window.addEventListener("load", function() {
      let popup = document.getElementById("welcomePopup");
      popup.style.display = "flex"; // Show full screen overlay
      setTimeout(() => {
        popup.style.display = "none"; // Hide after 3 seconds
      }, 2000);
    });
  </script>

</body>

</html>