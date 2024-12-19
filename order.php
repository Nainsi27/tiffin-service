<?php include 'header.php'; ?>
<section id="book-a-table" class="book-a-table section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Order Here</h2>
    <p><span>Order Your</span> <span class="description-title">Tiffin from here<br></span></p>
  </div>
  <!-- End Section Title -->
  <div class="container">
    <div class="row g-0" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"></div>
      <div class="col-lg-8 d-flex align-items-center reservation-form-bg" data-aos="fade-up" data-aos-delay="200">
        <!-- <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form"> -->
        <form class="ordertiffin" id="ordertiffin" action="order.php" method="post">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="time" name="time" class="form-control" id="time" placeholder="Time" required>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" name="people" class="form-control" id="people" placeholder="# of people" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
          </div>
          <div class="text-center mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            <button type="submit" name="ordertiffin" class="btn btn-primary">Order Tiffin</button>
          </div>
        </form>
      </div>
      <!-- End Reservation Form -->
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>