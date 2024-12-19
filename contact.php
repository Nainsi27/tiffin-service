 <?php include 'header.php'; ?>
 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact'])) {
    // Retrieve form data and sanitize inputs
    $customer_name = mysqli_real_escape_string($conn, $_POST['name']);
    $cust_email = mysqli_real_escape_string($conn, $_POST['email']);
    $cust_subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $cust_message = mysqli_real_escape_string($conn, $_POST['mesg']);

    // Validate input lengths
    if (strlen($cust_message) > 65535) {
      echo "<script>alert('Message is too long. Please limit your message to 65,535 characters.'); window.location.href = 'index.php';</script>";
      exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO contactus (customer_name, cust_email, cust_subject, cust_message) 
            VALUES ('$customer_name', '$cust_email', '$cust_subject', '$cust_message')";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Your message has been sent successfully. Thank you!'); window.location.href = 'index.php';</script>";
    } else {
      echo "<script>alert('Failed to send your message. Please try again later.'); window.location.href = 'index.php';</script>";
    }
  }
  ?>
 <!-- Contact Section -->
 <section id="contact" class="contact section">
   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
     <h2>Contact</h2>
     <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
   </div><!-- End Section Title -->

   <div class="container" data-aos="fade-up" data-aos-delay="100">
     <div class="mb-5">
       <iframe style="width: 100%; height: 400px;"
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14025.249346405555!2d77.05876449999999!3d28.5856814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1bb2e4b58d6d%3A0xbd50c0b8d7e7ff5b!2sDashrath%20Puri%2C%20New%20Delhi%2C%20Delhi%20110045!5e0!3m2!1sen!2sin!4v1700000000000"
         frameborder="0" allowfullscreen=""></iframe>
     </div>
     <!-- End Google Maps -->
     <div class="row gy-4">
       <div class="col-md-6">
         <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
           <i class="icon bi bi-geo-alt flex-shrink-0"></i>
           <div>
             <h3>Address</h3>
             <a class="ct-contact-content ct-contact-link"
               href="https://maps.google.com/maps?ll=28.592562,77.081656&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;q=Dashrathpuri+Metro+Station,+New+Delhi"
               target="_blank"
               rel="nofollow"
               style="padding-left: 12px;">
               Near Dashrathpuri Metro Station
               <br> Dashrathpuri, New Delhi, 110046
             </a>
           </div>
         </div>
       </div><!-- End Info Item -->
       <div class="col-md-6">
         <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
           <i class="icon bi bi-telephone flex-shrink-0"></i>
           <div>
             <h3>Call Us</h3>
             <span>
               <a class="" href="tel:+91-9958787177" style="padding-left: 12px;">
                 +91-9958787177 </a>
             </span>
           </div>
         </div>
       </div><!-- End Info Item -->

       <div class="col-md-6">
         <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
           <i class="icon bi bi-envelope flex-shrink-0"></i>
           <div>
             <h3>Email Us</h3>
             <span><a class="" href="mailto:emailtoakash.singh@gmail.com" style="padding-left: 12px;">
                 emailtoakash.singh@gmail.com
               </a>
             </span>
           </div>
         </div>
       </div><!-- End Info Item -->

       <div class="col-md-6">
         <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
           <i class="icon bi bi-clock flex-shrink-0"></i>
           <div>
             <h3>Opening Hours<br></h3>
             <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p>
           </div>
         </div>
       </div><!-- End Info Item -->
     </div>
     <!-- <form action="contact.php" method="post" class="ordertiffin" id="ordertiffin" data-aos="fade-up" data-aos-delay="600"> -->
     <form action="contact.php" method="post" class="ordertiffin" id="ordertiffin">
       <div class="row gy-4">
         <div class="col-md-6">
           <input type="text" name="name" class="form-control" id="cust_name" placeholder="Your Name" required>
         </div>

         <div class="col-md-6 ">
           <input type="email" class="form-control" name="email" id="cust_email" placeholder="Your Email" required="">
         </div>

         <div class="col-md-12">
           <input type="text" class="form-control" name="subject" id="cust_subject" placeholder="Subject" required="">
         </div>

         <div class="col-md-12">
           <textarea name="mesg" class="form-control" rows="5" id="cust_message" placeholder="Message"></textarea>
         </div>
         <div class="col-md-12 text-center">
           <div class="loading">Loading</div>
           <div class="error-message"></div>
           <div class="sent-message">Your message has been sent. Thank you!</div>
           <button type="submit" name="contact" class="btn btn-primary">Send Message</button>
         </div>
       </div>
     </form>
     <!-- End Contact Form -->
   </div>
 </section>
 <!-- /Contact Section -->
 <?php include 'footer.php'; ?>