<?php
$conn = mysqli_connect('localhost', 'root', '', 'rihana_park') or die("Couldn't Connect");

$insert = false;

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO `contact_list` (name, mobile, message) VALUES ('$name', '$mobile', '$message')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    $insert = true;
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
  <link rel="stylesheet" href="./Contact form.css">
</head>

<body id="body">
  <div class="form-container">
    <form method="post">
      <div class="container">
        <div class="box">
          <h3>Contact Us</h3>
          <div class="name">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Name" name="name" required>
          </div>
          <div class='mobile'>
            <i class="fa-solid fa-phone"></i>
            <input type="number" placeholder="Mobile Number" name="mobile" required>
          </div>
          <div class="message-box">
            <i class="fas fa-envelope"></i>
            <textarea cols="30" rows="10" placeholder="Message" name="message" required></textarea>
          </div>
          <div class="button">
            <button id="send" type="submit" name="submit">Send</button>
          </div>
          <div class="message">
            <?php
            if ($insert) {
              echo '<p id="success-message">Your Message Successfully Sent!</p>';
            }
            ?>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script>
    setTimeout(() => {
      document.getElementById('success-message').style.display = "none";
    }, 3000);
  </script>
</body>

</html>