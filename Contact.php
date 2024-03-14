  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body style="background-image: url(./image//lease.jpg); background-size: cover;">
    <form method="post">
      <div class="container">
        <div class="Switch">
          <a href="./ArabicContact.php">
            <div class="Arabic">Arabic</div>
          </a>
        </div>
        <div class="box">
          <h3>Contact Us</h3>
          <div class="name">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Name" name="name" required autocomplete="off">
          </div>
          <div class="Email">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" id="email" required autocomplete="off">
          </div>
          <div class='mobile'>
            <i class="fa-solid fa-phone"></i>
            <input type="text" placeholder="Mobile" name="mobile" required autocomplete="off">
          </div>
          <div class="message-box">
            <i class="fa-solid fa-message"></i>
            <textarea cols="28" rows="10" placeholder="Message" name="message" id="message" required></textarea>
          </div>
          <div class="button">
            <button id="send" type="submit" name="submit">Send</button>
          </div>
        </div>
      </div>
    </form>

    <script>
      document.getElementById('contactForm').addEventListener('submit', function(event) {
        const name = document.getElementsByName('name')[0].value;
        const email = document.getElementById('email').value;
        const mobile = document.getElementsByName('mobile')[0].value;
        const message = document.getElementById('message').value;

        if (name.trim() === '' || email.trim() === '' || mobile.trim() === '' || message.trim() === '') {
          event.preventDefault();
          Swal.fire("Error", "Please fill out all the required fields.", "error");
        }
      });
    </script>


    <script>
      setTimeout(() => {
        let successMessage = document.querySelector('.success-message');
        if (successMessage) {
          successMessage.style.display = "none";
          setTimeout(() => {
            window.location.href = "http://localhost/rihana-park/index.php";
          }, 1000);
        }
      }, 2000);
    </script>

    <?php
    if (isset($_POST['submit'])) {
      $conn = mysqli_connect('localhost', 'root', '', 'rihana_park') or die("Couldn't Connect");

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
      $message = mysqli_real_escape_string($conn, $_POST['message']);


      if (preg_match('/\d/', $name)) {
        echo '<script>Swal.fire("Error", "You have entered a name containing numbers!", "error");</script>';
        header('location:Arabic Contact.php');
      } elseif (!preg_match('/^\d{10}$/', $mobile)) {
        echo '<script>Swal.fire("Error", "You have entered an invalid Mobile number!", "error");</script>';
      } else {
        $sql = "INSERT INTO `contact_list_form` (`name`, `email`, `mobile`, `message`) VALUES ('$name', '$email', '$mobile', '$message')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          echo '<script>Swal.fire("Success", "Your message has been sent successfully!", "success");</script>';
        }
      }

      $conn->close();
    }
    ?>

  </body>

  </html>