<?php include 'assets/templates/sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<?php include 'assets/templates/header.php' ?>
  </head>
  <body>
      <?php include "assets/templates/nav.php" ?>
    <?php echo $notify; ?>

    <div class="contact-section">
      <div class="contact-info">
        <div class="Adress">Savoy Terrace, Gzira, Malta</div>
        <div class="cop-email">youremail@email.com</div>
        <div class="phone">+356999**9</div>
        <span>Monday : 8am-11pm <br /> Tuesday : 8am-11pm <br /> Wednesday : 8am-11pm <br /> Thursday : 8am-11pm <br /> Friday : 10am-10pm <br /> Saturday : 11am-5pm <br /> Sunday : Closed </span>
      </div>
      <div class="contact-form">
        
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <label for="Type">Choose a Message type:</label>
          <select id="Type" name="TypeofF">
            <option value="complaint">Complaint</option>
            <option value="gfeedback">General Feedback</option>
          </select> 
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="send mail" class="send-button" value="Send">
        </form>
      </div>
    </div>


    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <?php include "assets/templates/footer.php" ?>
  </body>
</html>
      