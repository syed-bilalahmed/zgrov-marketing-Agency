<?php include('header.php'); ?>

<body class="index-page">

  <?php include('nav.php'); ?>

  <main class="main">

  <br> 
  <br> 

  <br> 
  <br> 
 <section  style="background-color: #f9f9f9;" class="contact-section">
  <!-- Top cards -->
  <div class="contact-info-boxes">
    <div class="info-box">
      <div class="icon-circle">
        <i class="fas fa-phone-alt"></i>
      </div>
      <h6>Phone No</h6>
      <p>+92 345 6246942</p>
    </div>
    <div class="info-box">
      <div class="icon-circle">
        <i class="fas fa-map-marker-alt"></i>
      </div>
      <h6>Location</h6>
      <p>KUST Incubation Center, Kohat 26000,<br>Khyber Pakhtunkhwa, Pakistan</p>
    </div>
    <div class="info-box">
      <div class="icon-circle">
        <i class="fas fa-envelope"></i>
      </div>
      <h6>Email Address</h6>
      <p>info@zgrov.com</p>
    </div>
  </div>

  <!-- Contact form + social -->
  <div class="contact-content">
    <div class="contact-left">
      <small>MEET OUR PROFESSIONALS</small>
      <h2>We’d Love to Hear From You!</h2>
      <p>If you need information or support, feel free to contact us</p>

      <h6>SOCIAL NETWORKING:</h6>
      <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61561047704903"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/zgrovdm/"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/message/6U42SYUIKTTJP1"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.linkedin.com/company/zgrov/"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>

   <div class="contact-right">
  <form action="forms/contact.php" method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="text" name="phone" placeholder="Phone No">
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</div>
  </div>

  <!-- Map -->
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.3550139657995!2d71.43654727540286!3d33.59537044207348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38deb3a2db6e8a1d%3A0x2389b8b6e3cb6d!2sKohat%20University%20of%20Science%20%26%20Technology!5e0!3m2!1sen!2s!4v1692600000000!5m2!1sen!2s"
      width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
.contact-section {
  background: linear-gradient(135deg, #a5d2f4, #fefbff);
  padding: 3rem 2rem;
}

/* Cards */
.contact-info-boxes {
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
  margin-bottom: 2rem;
}

.info-box {
  background: #fff;
  padding: 2rem 1.5rem;
  border-radius: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  text-align: center;
  flex: 1 1 250px;
  max-width: 300px;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.info-box:hover {
  transform: translateY(-5px);
  border-color: #012A4A;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.icon-circle {
  width: 70px;
  height: 70px;
  border: 2px solid #012A4A;
  border-radius: 50%;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #012A4A;
  font-size: 1.5rem;
  transition: all 0.3s ease;
}

.info-box:hover .icon-circle {
  background: linear-gradient(135deg, #012a4a, #012A4A);
  border-color: transparent;
  color: #fff;
}

.info-box h6 {
  font-size: 14px;
  margin-top: 1rem;
  font-weight: bold;
  color: #000;
}

.info-box p {
  font-size: 14px;
  margin: 0;
  color: #555;
}

/* Form + Social section */
.contact-content {
  display: flex;
  gap: 2rem;
  background: #a5d2f4;
  padding: 2rem;
  border-radius: 40px;
  flex-wrap: wrap;
  margin-bottom: 2rem;
}

.contact-left {
  flex: 1 1 300px;
}

.contact-left small {
  font-weight: bold;
  letter-spacing: 1px;
  color: #012a4a;
}

.contact-left h2 {
  font-weight: 800;
  color: #012a4a;
}

.social-icons {
  margin-top: 1rem;
}

.social-icons a {
  display: inline-block;
  background: #fff;
  padding: .5rem;
  border-radius: 50%;
  margin-right: .5rem;
  color: #012a4a;
  transition: all 0.3s ease;
}

.social-icons a:hover {
  background: linear-gradient(135deg, #012a4a, #012A4A);
  color: #fff;
}

.contact-right {
  flex: 1 1 300px;
}

.contact-right form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact-right input, .contact-right textarea {
  padding: .75rem;
  border: none;
  border-radius: 20px;
  outline: none;
}

.contact-right textarea {
  resize: none;
  height: 120px;
}

.contact-right button {
  background: #012A4A;
  color: #fff;
  border: none;
  padding: .75rem;
  border-radius: 20px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.contact-right button:hover {
  background: #012a4a;
}

/* Map */
.map-container iframe {
  border-radius: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

</style>

  
  </main>

 <?php include('footer.php'); ?>


 
  <?php include('script.php'); ?>
  

</body>

</html>