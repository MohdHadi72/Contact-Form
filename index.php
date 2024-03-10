<?php
$conn = mysqli_connect('localhost', 'root', '', 'rihana_park') or die("Couldn't Connect");

$insert = false;
$mobile_error = false;

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  if (strlen($mobile) < 10) {
    $mobile_error = true;
  } else {
    $sql = "INSERT INTO `contact_list` (`name`, `email`, `mobile`, `message`) VALUES ('$name', '$email', '$mobile', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      $insert = true;
      // header('location:index.php');
    }
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./Contact form.css">
</head>
<!--  -->

<body id="body">
  <!--  action="https://formspree.io/f/xleqlbko" -->
  <form onsubmit="sendEmail(); reset(); return false; " method="post">
    <div class="container">
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
          <input type="number" placeholder="Mobile" name="mobile" required autocomplete="off">
        </div>
        <div class="message-box">
          <i class="fa-solid fa-message"></i>
          <textarea cols="28" rows="10" placeholder="Message" name="message" id="message" required></textarea>
        </div>
        <div class="button">
          <button id="send" type="submit" name="submit">Send</button>
        </div>
        <div class="message">
          <?php
          if ($insert) {
            echo '<p id="success-message"> You Data SuccessFully Sent !</p>';
          }

          if ($mobile_error) {
            echo '<p id="Error-message"> You have entered an invalid Mobile number!</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </form>
  <script src="https://smtpjs.com/v3/smtp.js"></script>

  <script>
    // Email.send({
    //   Host: "smtp.gmail.com",
    //   Username: "mohdhadi440@gmail.com",
    //   Password: "zaidi@1234",
    //   To: 'hadizaidi687@gmail.com',
    //   From: document.getElementById('email').value,
    //   Subject: 'Helloo I Im Mohd had',
    //   Body: "And this is the body"
    // }).then(
    //   message => alert(message)
    // );

    setTimeout(() => {
      document.getElementById('success-message').style.display = "none";
    }, 3000);

    setTimeout(() => {
      document.getElementById('Error-message').style.display = "none";
    }, 3000);
  </script>
</body>

</html>