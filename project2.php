<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Help and Contact Us</title>
    <link rel="stylesheet" type="text/css" href="CSS/project2.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <header>
      <h1>Contact Us</h1>
    </header>

    <div class="contact-page">

      <section class="contact-section">
        <h1>Connect with us</h1>
        <p>
          We would love to respond to your questions and help you get better
          with health. Feel free to get in touch with us.
        </p>

        <form id="contactForm" class="contact-form">

          <div class="u1">
            <div class="form-row">
              <label for="name">Name (Required)</label>
              <input type="text" id="name" name="name" required />
            </div>
            
            <div class="form-row">
              <label for="phone">Phone</label>
              <input type="number" id="phone" name="phone" required />
            </div>
            
            <div class="form-row">
              <label for="email">Email (Required)</label>
              <input type="email" id="email" name="email" required />
            </div>

            <div class="form-row">
              <label for="subject">Subject (Required)</label>
              <input type="text" id="subject" name="subject" required />
            </div>
          </div>

          <div class="form-row">
            <label for="message">Your Message (Required)</label>
            <textarea id="message" name="message" required></textarea>
          </div>

          <div class="buttons">
            <button type="submit" class="submit-btn">Send</button>
        
            <input type="reset" value="Cancel">
          </div>
          

        </form>
        
      </section>

      <section class="reach-section">
        <h1>Reach Us</h1>
        <p>
          We would love to respond to your questions and help you get better
          with health. Feel free to get in touch with us.
        </p>

        <div class="contact-info">

          <div class="info-block">
            <h3>Contact Numbers</h3>
            <ul>
              <li>Number & address</li>
            </ul>
          </div>

          <div class="info-block">
            <h3>Address List</h3>
            <ul>
              <li>Number & address</li>
            </ul>
          </div>

          <div class="info-block">
            <h3>Connect with us on these platforms</h3>
            <ul class="social-links">
              <li>Facebook</li>
              <li>Instagram</li>
            </ul>
          </div>

          <div class="info-block">
            <h3>Mail</h3>
            <p>For Customer Care:</p>
            <p>For Business Related Inquiries:</p>
          </div>
          
        </div>
      </section>

    </div>

    <script src="JS/project2.js"></script>
    
  </body>
  
</html>
