<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  require_once('phpscripts/config.php');
  confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="../css/admin_index.css">
</head>
<body>
  <section id="accountContainer">
  <h1>Welcome to your account</h1>
  <?php echo "<p>User: {$_SESSION['user_name']}</p>";
        echo "<p>Last Login Date: {$_SESSION['user_date']}</p>";
  ?>
</section>
</body>
</html>
