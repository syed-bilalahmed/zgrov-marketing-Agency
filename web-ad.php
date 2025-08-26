<?php include('header.php'); ?>
<body class="index-page">
<?php include('nav.php'); ?>

<main class="main mt-5 pt-5">

  <!-- ===== Free Website Promo Section ===== -->
  <section id="free-website" class="py-5 bg-light">
    <div class="container text-center" data-aos="fade-up">
      
      <!-- Heading -->
      <h2 class="fw-bold mb-3" style="color:#012a4a;">🚀 Get Your Free Website Today!</h2>
      
      <!-- Marketing Text -->
      <p class="text-dark fw-semibold mt-3" style="font-size:1.25rem; line-height:1.6; max-width:800px; margin:0 auto;">
        Struggling to Get Your Business Online? <br>
        <span class="highlight-blink">Your Competitors Are Moving Ahead.</span>
      </p>
      <p class="text-muted mt-3" style="font-size: 1.1rem; line-height: 1.8; max-width: 750px; margin: 0 auto;">
        Most small businesses know they need a website, but professional design can be costly. Without a digital presence, you risk losing customers to competitors who are already attracting them online.
      </p>
      <p class="text-muted mt-3" style="font-size: 1.1rem; line-height: 1.8; max-width: 750px; margin: 0 auto;">
        <strong style="color:#012a4a;">Here’s the good news:</strong> At <span style="color:#012a4a; font-weight:bold;">Zgrov</span>, we create a professional blog-style website <strong style="color:#012a4a;">for FREE</strong> – you only pay for domain and hosting. It’s the smartest way to start your online journey without heavy investment, and you can always expand later.
      </p>

      <!-- CTA Button -->
      <button class="cta-btn mt-4 px-5 py-3 fw-semibold" style="background: linear-gradient(135deg, #012a4a, #014f86); border:none; border-radius:10px; font-size:1.1rem; box-shadow:0 4px 15px rgba(0,0,0,0.2); transition: all 0.3s;" onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 6px 18px rgba(0,0,0,0.25)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';" data-bs-toggle="modal" data-bs-target="#freeWebsiteModal">
        Get Your Free Website Now
      </button>

    </div>
  </section>

  <!-- ===== Free Website Modal ===== -->
  <div class="modal fade" id="freeWebsiteModal" tabindex="-1" aria-labelledby="freeWebsiteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header" style="background:#012a4a; color:#fff;">
          <h5 class="modal-title fw-bold" id="freeWebsiteLabel">Apply for Your Free Website</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body p-0">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd-SiHpXQU4rDYSfE8xA3J8ZXzijSeqtbwhOSJ-D23_utHgng/viewform?embedded=true" width="100%" height="520" frameborder="0" marginheight="0" marginwidth="0" style="border:none; border-radius: 0 0 10px 10px;">
            Loading…
          </iframe>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include('footer.php'); ?>
<?php include('script.php'); ?>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- ===== CSS ===== -->
<style>
  /* Pulse animation only for CTA button */
  @keyframes pulse { 0% { transform: scale(1); } 50% { transform: scale(1.07); } 100% { transform: scale(1); } }
  .cta-btn { animation: pulse 2s infinite; color: #fff; }

  /* Subtle blink effect */
  @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
  .highlight-blink { color: #d00000; font-weight: bold; animation: blink 1.5s infinite; }
</style>

<!-- ===== AOS ===== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script> AOS.init({ duration: 800, once: true }); </script>

<!-- ===== BOOTSTRAP ICONS ===== -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
