<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $valid_data = true;

  function isLettersOnly($str)
  {
    return preg_match('/^[A-Za -z]+$/', $str);
  }

  function isTenDigitNumber($str)
  {
    return preg_match('/^\d{10}$/', $str);
  }

  function sanitizeInput($str)
  {
    return htmlspecialchars(trim($str));
  }

  $name = sanitizeInput($_POST['Name']);
  $email = sanitizeInput($_POST['Email']);
  $mobile = sanitizeInput($_POST['Mobile']);
  $dateForApply = sanitizeInput($_POST['DateForApply']);
  $projectName = sanitizeInput($_POST['ProjectName']);
  $projectCategory = sanitizeInput($_POST['ProjectCategory']);
  $capitalProject = sanitizeInput($_POST['CapitalProject']);
  $noOfEmployee = sanitizeInput($_POST['NoOfEmployee']);
  $areaRequired = sanitizeInput($_POST['AreaRequired']);
  $shopNo = sanitizeInput($_POST['ShopNo']);
  $rentPeriod = sanitizeInput($_POST['RentPeriod']);
  $rentType = sanitizeInput($_POST['RentType']);
  $multisideShop = sanitizeInput($_POST['MultisideShop']);
  $serviceRequiredByRahinaPark = sanitizeInput($_POST['ServiceRequiredByRahinaPark']);
  $inTheProject = sanitizeInput($_POST['InTheProject']);
  $description = sanitizeInput($_POST['Description']);

  if (!isLettersOnly($name)) {
    echo "<script>alert('Error : Name should contain only letters')</script>";
    $valid_data = false;
  }

  if (!isTenDigitNumber($mobile)) {
    echo  "<script>alert('Error: Mobile number should be a 10-digit number')</script>";
    $valid_data = false;
  }

  if ($valid_data) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rihana_park";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
      die("Connection failed:" . $conn->connect_error);
    }

    $sql = "INSERT INTO `lease_form` (`name`, `email`, `mobile`, `ApplyDate`, `projectname`, `projectcategory`, `capitalproject`, `NoEmployee`, `arearequired`, `shopno`, `rentperiod`, `renttype`, `multisideshop`, `servicerequired`, `IntheProject`, `description`) VALUES ('$name', '$email', '$mobile', '$dateForApply', '$projectName', '$projectCategory', '$capitalProject', '$noOfEmployee', '$areaRequired', '$shopNo', '$rentPeriod', '$rentType', '$multisideShop', '$serviceRequiredByRahinaPark', '$inTheProject', '$description')";

    if ($conn->query($sql) === TRUE) {
      $success_message = "Your data has been successfully submitted";
    } else {
      $success_message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  } else {
    $success_message = "Error: Invalid data. Please check your input.";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rihana_park Lease Form</title>
  <link rel="stylesheet" href="./css//lease.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-image: url(./image//lease.jpg); background-size: cover;">
  <form method="POST">
    <div class="container">
      <?php if (isset($success_message)) { ?>
        <div class="success-message"><?php echo $success_message; ?></div>
      <?php } ?>
      <br>
      <div class="switch">
        <a href="./Arabic.php">
          <div class="Arabic">Arabic</div>
        </a>
      </div>
      <div class="box">
        <h3>Apply for Lease</h3>
        <div class="name">
          <i class="fa-solid fa-user"></i>
          <input type="text" placeholder="Name" name="Name" required autocomplete="off">
        </div>
        <div class="email">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Email" name="Email" required autocomplete="off">
        </div>
        <div class='mobile'>
          <i class="fa-solid fa-phone"></i>
          <input type="text" placeholder="Mobile" name="Mobile" required autocomplete="off">
        </div>
        <div class="date">
          <i class="fa-solid fa-calendar-days"></i>
          <input type="text" placeholder="Date For Apply" name="DateForApply" required autocomplete="off" readonly>
        </div>
        <div class='projectName'>
          <i class="fa-solid fa-file"></i>
          <input type="text" placeholder="Project Name" name="ProjectName" required autocomplete="off">
        </div>
        <div class='projectCategory'>
          <i class="fa-solid fa-list"></i>
          <input type="text" placeholder="Project Category" name="ProjectCategory" required autocomplete="off">
        </div>
        <div class='Capitalforproject'>
          <i class="fa-solid fa-phone"></i>
          <input type="text" placeholder="Capital for project" name="CapitalProject" required autocomplete="off">
        </div>
        <div class='Employee'>
          <i class="fa-solid fa-user-group"></i>
          <input type="text" placeholder="No. Of Employee" name="NoOfEmployee" required autocomplete="off">
        </div>
        <div class='AreaRequired'>
          <i class="fa-solid fa-chart-area"></i>
          <select name="AreaRequired" class="select-box">
            <option selected class="selectedColor">Area Required</option>
            <option value="A">A</option>
            <option value="B">B</option>
          </select>

        </div>
        <div class='ShopNo'>
          <i class="fa-solid fa-shop"></i>
          <select name="ShopNo" class="select-box">
            <option selected class="selectedColor">Shop no & Side no</option>
            <option value="A">A</option>
            <option value="B">B</option>
          </select>
        </div>
        <div class='RentPeriod'>
          <i class="fa-brands fa-renren"></i>
          <input type="text" placeholder="Rent Period" name="RentPeriod" required autocomplete="off">
        </div>
        <div class='Renttype'>
          <i class="fa-brands fa-google-pay"></i>
          <select name="RentType" class="select-box">
            <option selected class="selectedColor">Rent Type</option>
            <option value="A">A</option>
            <option value="B">B</option>
          </select>
        </div>
        <div class='MultisideShop'>
          <i class="fa-solid fa-shop"></i>
          <select name="MultisideShop" class="select-box">
            <option selected class="selectedColor">Multiside Shop Access</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class='ServiceRequiredByRahinaPark'>
          <i class="fa-solid fa-square-parking"></i>
          <input type="text" placeholder="Service Required By Rahina Park" name="ServiceRequiredByRahinaPark" required autocomplete="off">
        </div>
        <div class='InTheProject'>
          <i class="fa-brands fa-usps"></i>
          <select name="InTheProject" class="select-box">
            <option selected class="selectedColor">In The Project</option>
            <option value="National">National</option>
            <option value="International">International</option>
          </select>
        </div>
        <div class="description">
          <i class="fa-solid fa-message"></i>
          <textarea cols="28" rows="10" placeholder="description" name="Description" required></textarea>
        </div>
        <div class="button">
          <button type="submit" name="submit">Send</button>
        </div>


      </div>
    </div>
  </form>




  <script>
   setTimeout(() => {
       let successMessage = document.querySelector('.success-message');
       if (successMessage) {
         successMessage.style.display = "none";
         setTimeout(() => {
           window.location.href = "http://localhost/rihana-park/index.php";

         }, 1000);

       }

       let box = document.querySelector('.box');

     }, 2000);

    window.onload = function() {
      var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth() + 1).padStart(2, '0');
      var yyyy = today.getFullYear();

      today = dd + '-' + mm + '-' + yyyy;
      document.getElementsByName("DateForApply")[0].value = today;
    };
  </script>

</body>

</html>