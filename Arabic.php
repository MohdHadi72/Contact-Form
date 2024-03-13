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
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Lease Form Arabic</title>
  <link rel="stylesheet" href="./css/Arabic.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <form method="POST">
    <div class="container" style="background-image: url(./image/leaseform.jpg);">
      <?php if (isset($success_message)) { ?>
        <div class="success-message"><?php echo $success_message; ?></div>
      <?php } ?>
      <br>
      <div class="switch">
        <a href="./lease.php">
          <div class="English">English</div>
        </a>
      </div>
      <div class="box">
        <h3>تقدم بطلب الإيجار</h3>
        <div class="name">
          <i class="fa-solid fa-user"></i>
          <input type="text" placeholder="الاسم" name="Name" required autocomplete="off">
        </div>
        <div class="email">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="البريد الالكتروني" name="Email" required autocomplete="off">
        </div>
        <div class='mobile'>
          <i class="fa-solid fa-phone"></i>
          <input type="text" placeholder="رقم الهاتف" name="Mobile" required autocomplete="off">
        </div>
        <div class="date">
          <i class="fa-solid fa-calendar-days"></i>
          <input type="text" placeholder="تاريخ التقديم" name="DateForApply" required autocomplete="off" readonly>
        </div>
        <div class='projectName'>
          <i class="fa-solid fa-file"></i>
          <input type="text" placeholder="اسم المشروع" name="ProjectName" required autocomplete="off">
        </div>
        <div class='projectCategory'>
          <i class="fa-solid fa-list"></i>
          <input type="text" placeholder="نوع المشروع" name="ProjectCategory" required autocomplete="off">
        </div>
        <div class='Capitalforproject'>
          <i class="fa-solid fa-phone"></i>
          <input type="text" placeholder="رأس مال المشروع " name="CapitalProject" required autocomplete="off">
        </div>
        <div class='Employee'>
          <i class="fa-solid fa-user-group"></i>
          <input type="text" placeholder="عدد الموظفين" name="NoOfEmployee" required autocomplete="off">
        </div>
        <div class='AreaRequired'>
          <i class="fa-solid fa-chart-area"></i>
          <select name="AreaRequired" class="select-box">
            <option selected class="selectedColor">المساحة المطلوبة للمشروع </option>
            <option value="1">A</option>
            <option value="2">B</option>
          </select>

        </div>
        <div class='ShopNo'>
          <i class="fa-solid fa-shop"></i>
          <select name="ShopNo" class="select-box">
            <option selected class="selectedColor">الجهة المطلوبة من المشروع</option>
            <option value="1">A</option>
            <option value="2">B</option>
          </select>
        </div>
        <div class='RentPeriod'>
          <i class="fa-brands fa-renren"></i>
          <input type="text" placeholder="مدى الايجار المتوقع" name="RentPeriod" required autocomplete="off">
        </div>
        <div class='Renttype'>
          <i class="fa-brands fa-google-pay"></i>
          <select name="RentType" class="select-box">
            <option selected class="selectedColor">نوع الايجار </option>
            <option value="1">سنوي</option>
            <option value="2">شهري</option>
          </select>
        </div>
        <div class='MultisideShop'>
          <i class="fa-solid fa-shop"></i>
          <select name="MultisideShop" class="select-box">
            <option selected class="selectedColor">فتح واجهة داخلية او لا</option>
            <option value="1">أجل</option>
            <option value="2">لا</option>
          </select>
        </div>
        <div class='ServiceRequiredByRahinaPark'>
          <i class="fa-solid fa-square-parking"></i>
          <input type="text" placeholder="الخدمات المطلوبة من إدارة المشروع" name="ServiceRequiredByRahinaPark" required autocomplete="off" readonly>
        </div>
        <div class='InTheProject'>
          <i class="fa-brands fa-usps"></i>
          <select name="InTheProject" class="select-box">
            <option selected class="selectedColor">هل المشروع</option>
            <option value="1"> محلي</option>
            <option value="2">اجنبي</option>
          </select>
        </div>
        <div class="description">
          <i class="fa-solid fa-message"></i>
          <textarea cols="28" rows="10" placeholder="ملاحظات" name="Description" required></textarea>
        </div>
        <div class="button">
          <button type="submit" name="submit">إرسال</button>
        </div>
      </div>
    </div>
  </form>

  <script>
    setTimeout(() => {
      let successMessage = document.querySelector('.success-message');
      if (successMessage) successMessage.style.display = "none";

      let box = document.querySelector('.box');
      if (box) box.style.marginTop = "-3%"
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