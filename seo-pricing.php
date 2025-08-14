<?php include('header.php'); ?>

<body class="index-page">

<?php include('nav.php'); ?>

<main class="main">

<br><br>
<!-- Pricing Section -->
<section id="pricing" class="pricing section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Toggle Buttons -->
    <div class="pricing-toggle text-center mb-4">
      <button id="monthlyBtn" class="btn btn-primary me-2" style="background-color: #37729F; color: white;">Monthly</button>
<button id="yearlyBtn" class="btn btn-outline-primary" style="background-color: white; color: #37729F;">Yearly</button>

    </div>

    <!-- SINGLE PLANS BLOCK -->
    <div class="row g-4 justify-content-center" id="plans">

      <!-- Basic Plan -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-card">
          <h3>Basic Plan</h3>
          <div class="price">
            <span class="currency">$</span>
            <span class="amount" data-monthly="9.9" data-yearly="99">9.9</span>
            <span class="period">/ month</span>
          </div>
          <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
          <h4>Features Included:</h4>
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Duis aute irure dolor</li>
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Excepteur sint occaecat</li>
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Nemo enim ipsam voluptatem</li>
          </ul>
         <a href="#" class="btn btn-primary" style="background-color: #37729F; border-color: #37729F; color: white;">
  Buy Now <i class="bi bi-arrow-right"></i>
</a>

        </div>
      </div>

      <!-- Standard Plan -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-card popular" style="border-top: 5px solid #37729F; background-color: #37729F; color: white;">
          <div class="popular-badge" style="background-color: white; color: #37729F;">Most Popular</div>
          <h3 style="color: white;">Standard Plan</h3>
          <div class="price" style="color: white;">
            <span class="currency">$</span>
            <span class="amount" data-monthly="19.9" data-yearly="199">19.9</span>
            <span class="period">/ month</span>
          </div>
          <p class="description" style="color: #e0e0e0;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
          <h4 style="color: white;">Features Included:</h4>
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill" style="color: white;"></i> Lorem ipsum dolor sit amet</li>
            <li><i class="bi bi-check-circle-fill" style="color: white;"></i> Consectetur adipiscing elit</li>
            <li><i class="bi bi-check-circle-fill" style="color: white;"></i> Sed do eiusmod tempor</li>
            <li><i class="bi bi-check-circle-fill" style="color: white;"></i> Ut labore et dolore magna</li>
          </ul>
        <a href="#" class="btn btn-primary" style="background-color: #ffffffff; border-color: #37729F; color: #37729F;">
  Buy Now <i class="bi bi-arrow-right"></i>
</a>

        </div>
      </div>

      <!-- Premium Plan -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-card">
          <h3>Premium Plan</h3>
          <div class="price">
            <span class="currency">$</span>
            <span class="amount" data-monthly="39.9" data-yearly="399">39.9</span>
            <span class="period">/ month</span>
          </div>
          <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
          <h4>Features Included:</h4>
          <ul class="features-list">
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Temporibus autem quibusdam</li>
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Saepe eveniet ut et voluptates</li>
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Nam libero tempore soluta</li>
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Cumque nihil impedit quo</li>
            <li><i class="bi bi-check-circle-fill" style="color: #37729F;"></i> Maxime placeat facere possimus</li>
          </ul>
        <a href="#" class="btn btn-primary" style="background-color: #37729F; border-color: #37729F; color: white;">
  Buy Now <i class="bi bi-arrow-right"></i>
</a>

    
        </div>
      </div>

    </div><!-- End Plans -->

  </div>

</section>

</main>

<?php include('footer.php'); ?>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<?php include('script.php'); ?>

<script>
  const monthlyBtn = document.getElementById('monthlyBtn');
const yearlyBtn = document.getElementById('yearlyBtn');
const amounts = document.querySelectorAll('.amount');
const periodLabels = document.querySelectorAll('.period');

monthlyBtn.addEventListener('click', () => {
  amounts.forEach(a => a.textContent = a.dataset.monthly);
  periodLabels.forEach(p => p.textContent = '/ month');

  // Update classes
  monthlyBtn.classList.add('btn-primary');
  monthlyBtn.classList.remove('btn-outline-primary');
  yearlyBtn.classList.add('btn-outline-primary');
  yearlyBtn.classList.remove('btn-primary');

  // Update background colors
  monthlyBtn.style.backgroundColor = '#37729F';  // dark color
  monthlyBtn.style.color = 'white';
  yearlyBtn.style.backgroundColor = 'white';      // white bg for inactive
  yearlyBtn.style.color = '#37729F';
});

yearlyBtn.addEventListener('click', () => {
  amounts.forEach(a => a.textContent = a.dataset.yearly);
  periodLabels.forEach(p => p.textContent = '/ year');

  // Update classes
  yearlyBtn.classList.add('btn-primary');
  yearlyBtn.classList.remove('btn-outline-primary');
  monthlyBtn.classList.add('btn-outline-primary');
  monthlyBtn.classList.remove('btn-primary');

  // Update background colors
  yearlyBtn.style.backgroundColor = '#37729F';  // dark color
  yearlyBtn.style.color = 'white';
  monthlyBtn.style.backgroundColor = 'white';   // white bg for inactive
  monthlyBtn.style.color = '#37729F';
});

</script>

</body>
</html>
