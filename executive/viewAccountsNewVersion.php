<?php
     session_start();
    /* if(!isset($_SESSION['authenticated']) || $_SESSION['role'] != "Executive")
       {
            header('Location: ../../index.php');
            exit;
       }
       */
       ob_start();
       error_reporting(0);
	include "connectTo.php";

	$id = $_SESSION['userId'];
	$link = connectTo();

	$table1 = "user_info";
	$table2 = "users";
	$table3 = "distributors";

?>
<!DOCTYPE html>
<head>
	<title>GreatMoods | Executive</title>

  <link rel="stylesheet" type="text/css" href="cssNew/viewAccounts.css">
  <link rel="stylesheet" type="text/css" href="css/cssNew/-debug.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive viewpoint from device size -->

</head>

<style>

</style>
<body>
<div>
  <?php include 'includes/header.inc.php' ; ?>
</div>
</body>
</html>
</html>

<?php
   ob_end_flush();
?>
