<html lang="en" style="height: 100%">
<head>
  <title>WeAttend</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Wellness Environment">
  <meta name="description" content="Attendance portal for WeAttend">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script src="scripts/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script src="scripts/bootstrap.min.js"></script>
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    print '<!-- begin including libraries -->';
    include 'lib/constants.php';
    include LIB_PATH . '/Connect-With-Database.php';
    if(isset($_POST['submitToggle'])) {
      include 'php/toggleAttendance.php';
    }
    include LIB_PATH . '/getUserInfo.php';
    print '<!-- libraries complete -->';
    if($USER_STATUS == 'Student'){
      echo '</head>';
      echo '<body> This site is for teachers only </body>';
      exit;
    }
  ?>
</head>
<body style="height: 100%">
<div style="position: relative; min-height: 100%">
