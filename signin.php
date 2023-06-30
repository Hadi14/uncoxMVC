<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font.css">
</head>
<!-- ok -->
<!-- *** -->
<!-- HADI -->

<body id="signin-body">
  <?
  require_once("./Config/main.php");
  if (isset($_SESSION['suname'])) {
    header("Location: index.php");
    echo  "Already logined";
  } else {
    echo  "NO Already logined";
  }
  if (isset($_GET['submit'])) {
    require_once("./Config/main.php");

    $db = Db::getInstance();
    $un = $_GET['uname'];
    $record = $db->first("select * from users where user='$un'");

    if ($record && $record['password'] == $_GET['pass']) {
      // session_start();
      $_SESSION['suname'] = $un;
      header("Location: index.php");
    } else {
      echo "Fail to Login...";
    }
  }
  ?>
  <div class="layer"></div>
  <main class="page-center">
    <article class="sign-up">
      <h1 class="sign-up__title">خوش برگشتی!</h1>
      <p class="sign-up__subtitle">برای ورود نام کاربری و رمز عبور را وارد کن</p>
      <form class="sign-up-form form" action="" method="get">
        <label class="form-label-wrapper">
          <p class="form-label">نام کاربری</p>
          <input name="uname" class="form-input" type="text" placeholder="نام کاربری" required>
        </label>
        <label class="form-label-wrapper">
          <p class="form-label">رمز عبور</p>
          <input name="pass" class="form-input" type="password" placeholder="رمز عبور" required>
        </label>
        <a class="link-info forget-link" href="##">رمز را فراموش کرده اید؟</a>
        <label class="form-checkbox-wrapper">
          <input name="remember-me" class="form-checkbox" type="checkbox">
          <span class="form-checkbox-label mx-1">مرا به خاطر بسپار</span>
        </label>
        <button name="submit" class="form-btn primary-default-btn transparent-btn" type="submit">ورود</button>
      </form>
    </article>
  </main>
  <!-- Chart library -->
  <script src="./plugins/chart.min.js"></script>
  <!-- Icons library -->
  <script src="plugins/feather.min.js"></script>
  <!-- Custom scripts -->
  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>