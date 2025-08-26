<?php include('header.php'); ?>
<style>
  
  /* FAQ Question Styling */
  .faq-item h3 {
    font-weight: bold; 
    cursor: pointer;
    transition: color 0.3s, background 0.3s;
  }

  .faq-item h3:hover {
    color: white !important;
    background: #134155;
    padding: 8px;
    border-radius: 6px;
  }

  /* FAQ Content */
  .faq-content {
    display: none;
    margin-top: 10px;
  }

  .faq-item.active .faq-content {
    display: block;
  }

  /* Toggle Arrow */
  .faq-toggle {
    float: right;
    transition: transform 0.3s ease;
  }

  .faq-item.active .faq-toggle {
    transform: rotate(90deg); /* Rotate arrow when active */
  }
</style>


</style>
<body class="index-page">

  <?php include('nav.php'); ?>

  <main class="main">

  <br> 
  <br> 

  <br> 
  <br> 
   
   <!-- Faq Section -->
<section class="faq-9 faq section light-background" id="faq" style="color:#134155;">

  <div class="container" data-aos="fade-up">
    <div class="row">

      <div class="col-lg-5" data-aos="fade-right">
        <h2 class="faq-title" style="color:#134155;">Have a question? Check out the FAQ</h2>
        <p class="faq-description" style="color:#134155;">
          Our Frequently Asked Questions are here to give you quick and clear answers. Whether you want to know more about our SEO process, how Google Ads work, or what’s included in our web development services, we’ve got you covered.
        </p>
        <div class="faq-arrow d-none d-lg-block" data-aos="zoom-in" data-aos-delay="200">
          <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488Z" fill="#134155"></path>
          </svg>
        </div>
      </div>

      <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
        <div class="faq-container">

          <!-- FAQ Item 1 -->
          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="100">
            <h3 style="color:#134155;">What services does your digital marketing agency offer?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Our digital marketing agency offers SEO (Search Engine Optimization), Google Ads, Social Media Marketing (SMM), Meta Ads, Web Development, and Graphic Design services. We provide complete online marketing solutions to help your business grow.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 2 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
            <h3 style="color:#134155;">How long does it take to see results from SEO?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>SEO results vary, but most businesses start seeing significant improvements within 3 to 6 months. Our SEO experts use proven strategies like keyword optimization, on-page SEO, and backlink building to improve your search engine ranking.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 3 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <h3 style="color:#134155;">What is the difference between Google Ads and Meta Ads?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Google Ads appear on Google search results and partner websites, targeting users actively searching for products or services. Meta Ads (Facebook and Instagram Ads) target users based on their interests, demographics, and online behavior, making them perfect for brand awareness and engagement.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 4 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <h3 style="color:#134155;">Can you design and develop a website for my business?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Yes. Our web development team creates responsive, SEO-friendly websites that are visually appealing and optimized for conversions. We handle everything from design to launch.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 5 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <h3 style="color:#134155;">How do you measure the success of a digital marketing campaign?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>We track campaign performance using KPIs such as website traffic, lead generation, sales conversion rates, engagement metrics, and ROI (Return on Investment) to ensure your marketing budget delivers results.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 6 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <h3 style="color:#134155;">Do you offer custom digital marketing packages?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Yes. We offer tailored SEO, Google Ads, SMM, Meta Ads, and Web Development packages to match your budget and business goals. Every package is designed to maximize your online presence.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 7 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="700">
            <h3 style="color:#134155;">Why should I hire a digital marketing agency instead of doing it myself?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Hiring a professional agency gives you access to experienced SEO specialists, ad managers, and web developers who can deliver better results faster. You also save time and avoid costly mistakes.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 8 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="800">
            <h3 style="color:#134155;">Do you work with international clients?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Yes, we provide digital marketing services to clients worldwide. Whether you need SEO in Pakistan, Google Ads in the USA, or Meta Ads in the UAE, we adapt strategies to different markets.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 9 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="900">
            <h3 style="color:#134155;">How much do your digital marketing services cost?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>The cost depends on your required services, such as SEO campaigns, Google Ads, web design, or SMM. Contact us for a free consultation and a personalized quote.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

          <!-- FAQ Item 10 -->
          <div class="faq-item" data-aos="fade-up" data-aos-delay="1000">
            <h3 style="color:#134155;">How can I get started with your agency?</h3>
            <div class="faq-content" style="color:#134155;">
              <p>Getting started is simple. Contact us through our website or email, and our team will discuss your business needs, create a digital marketing plan, and start working on your growth strategy.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right" style="color:#134155;"></i>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- /Faq Section -->

  </main>

 <?php include('footer.php'); ?>



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>