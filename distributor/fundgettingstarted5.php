<?php
      session_start();
      ob_start();
      define("SITE_ROOT",$_SERVER["DOCUMENT_ROOT"].'/salesTest/');
      include("../includes/connection.inc.php");
      $link = connectTo();
      $groupID = $_GET['group'];
      $table = "sample_websites";
      $query = "SELECT * FROM $table WHERE samplewebID = $groupID";
      $result = mysqli_query($link, $query) or die(mysqli_error());
      $row_count = mysqli_num_rows($result);
      if($row_count == '0'){
        echo "<br />Sample Website Not Found.<br />";
      }else{
         $row = mysqli_fetch_assoc($result);
         $club_name = $row['sampleName'];
         $club = $row['club'];
         $goal = $row['goal'];
         $so_far = $goal*.2;
         $banner_path = $row['bannerPath'];
         $position = $row['samplePosition'];
         $leader = $row['sampleFname'].' '.$row['sampleLname'];
         $phone = $row['samplePhone'];
         $group_email = $row['sampleGroupEmail'];
         $contact_photo = $row['contact_group_photo'];
         $group_photo = $row['groupPhoto'];
         $leader_photo = $row['group_leader'];
         $student_photo = $row['student_leaders'];
         $reasons = $row['sampleReasons'];
         $student_leader_name = $row['student_leader'];
         if($row['sampleTitle']==''){
           $title = $club;
         }else{
           $title = $row['sampleTitle'];
         }   
      }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Getting Started | The GreatMoods Mall</title>
<link rel="stylesheet" type="text/css" href="../css/mainRecruitingStyles.css">
<link rel="stylesheet" type="text/css" href="../css/header_styles.css">
<link rel="stylesheet" type="text/css" href="../css/leftSidebarNav.css">
<link rel="shortcut icon" href="../images/favicon.ico">

<script>
$(document).ready(function() {
$(“.nav li:has(ul)”).hover(function(){
$(this).find(“ul”).slideDown();
}, function(){
$(this).find(“ul”).hide();
});
});
</script>

<!--  jQuery library-->
<script type="text/javascript" src="../../jquery/jquery-1.9.1.min.js"></script>
<!--  jCarousel library-->
<script type="text/javascript" src="../../jquery/jquery.jcarousel.min.js"></script>
<!--  jCarousel skin stylesheet-->
<link rel="stylesheet" type="text/css" href="../../css/skin.css" />

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
      wrap: 'circular'
    });
});
</script>

</head>
<body>
<div id="container">
<?php include 'header_sample.php'; ?>
  
<div id="leftSideBarSample">
  <img src="../<?php echo $contact_photo;?>" width="128" height="150" alt="student photo">
      <ul id="sideNavSample">
      <li><a href="samplestudent.php?group=<?php echo $groupID; ?>"><em>Fundraiser<br>Homepage</em></a></li>
      <li>About Our Fundraiser</li>
      <li><a href="fundgettingstarted.php?group=<?php echo $_GET['group']; ?>">Getting<br>Started</a></li>
    </ul>
    <div class="clearfloat"></div>
	<hr>
	<div class="sidegraybackground">
		<div id="sideRedbar">
           	 <h3>Fundraising Overview</h3>
         	</div> <!--end sideRedbar-->
		<ul id="sidemenugettingstarted">
			<li><a href="fundgettingstarted1.php?group=<?php echo $_GET['group']; ?>">Welcome!</a></li>
			<li><a href="fundgettingstarted2.php?group=<?php echo $_GET['group']; ?>">Mission</a></li>
			<li><a href="fundgettingstarted12.php?group=<?php echo $_GET['group']; ?>">Online Fundraising</a></li>
			<li><a href="fundgettingstarted3.php?group=<?php echo $_GET['group']; ?>">10 Strengths</a></li>
			<li><a href="fundgettingstarted4.php?group=<?php echo $_GET['group']; ?>">3 Steps</a></li>
			<li><a href="fundgettingstarted5.php?group=<?php echo $_GET['group']; ?>">Greatmoods Mall</a></li>
			<li><a href="fundgettingstarted6.php?group=<?php echo $_GET['group']; ?>">We Deliver!</a></li>
			<li><a href="fundgettingstarted7.php?group=<?php echo $_GET['group']; ?>">Cash Next Day!</a></li>
			<li><a href="fundgettingstarted8.php?group=<?php echo $_GET['group']; ?>">Income Calculator</a></li>
			<li><a href="fundgettingstarted13.php?group=<?php echo $_GET['group']; ?>">Funds 24/7/365</a></li>
			<li><a href="fundgettingstarted10.php?group=<?php echo $_GET['group']; ?>">Training, Tips, Tools & Forms</a></li>
			<li><a href="fundgettingstarted9.php?group=<?php echo $_GET['group']; ?>">Start Today!</a></li>
		</ul>
	</div>
</div>

 <div id="samplecontent">
	<h1>The GreatMoods Mall</h1>
    <h3>Wonderful Fundraising Products and Gifts Year Round</h3>
    <div id="column1">
      <p>GreatMoods has a wonderful variety of Products and Gifts at our GreatMoods Mall for every season, reason and occasion. This makes for a perfect year-round Fundraiser because it offers the chance for people to order products for themselves or as gifts for others.</p>
      <p>The GreatMoods Mall has products that range from practical to silly, every day to elegant, delicious to indulgent and many of the Products and Gifts will be used for years to come.</p>
      <img src="../../images/rep-pages/productgrouping.png" width="389" height="306">
      <p>&nbsp;</p>
    </div>
    <!--end column1-->
    
    <div id="column2"> 
      <div class="slider">
      <ul id="mycarousel" class="jcarousel-skin-tango">
        <li><a href="funFashion.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store2_slide.jpg" alt="Fun Fashion Boutique" /></a></li>
        <li><a href="jewelryGlitz.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store3_slide.jpg" alt="Jewelry, Glitz and Glamour Store" /></a></li>
        <li><a href="salonSpa.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store4_slide.jpg" alt="Luxury Salon and Spa" /></a></li>
        <li><a href="coffeeCafe.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store1_slide.jpg" alt="Coffee Cafe" /></a></li>
        <li><a href="sportsFitness.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store5_slide.jpg" alt="Varsity Sports and Fitness" /></a></li>
        <li><a href="manCave.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store23_slide.jpg" alt="The Man Cave" /></a></li>
        <li><a href="sweetBoutique.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store18_slide.jpg" alt="Romantically Sweet Boutique" /></a></li>
        <li><a href="pursesPocketbooks.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store22_slide.jpg" alt="Purses, Pocketbooks and Pouches" /></a></li>
        <li><a href="inspirational.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store19_slide.jpg" alt="Inspirational, Motivational and Success Treasures" /></a></li>
        <li><a href="funGames.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store7_slide.jpg" alt="Fun and Games Family Shop" /></a></li>
        <li><a href="bananasZoo.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store8_slide.jpg" alt="Going Bananas Zoo" /></a></li>
        <li><a href="candyland.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store12_slide.jpg" alt="Candyland" /></a></li>
        <li><a href="customerClient.php?group=<?php echo $_GET['group']; ?>"><img src="../images/store16_slide.jpg" alt="Customer and Client Concierge Club" /></a></li>
      </ul>
    </div>
    <p>&nbsp;</p>
	<h5>GreatMoods Mall Directory</h5>
	<ul>
		<li>Fun Fashion Boutique</li>
		<li>Jewelry, Glitz & Glamour Store</li>
		<li>Luxury Salon & Spa</li>
		<li>Varsity Sports & Fitness</li>
		<li>The Man Cave</li>
		<li>Romantically Sweet Boutique</li>
		<li>Purses, Pocketbooks & Pouches</li>
		<li>Inspirational, Motivational & Success Treasures</li>
		<li>Coffee Cafe</li>
		<li>Fun & Games Family Shop</li>
		<li>Going Bananas Zoo</li>
		<!--<li>Creative Kids Multi-Media Center</li>-->
		<li>The Cookie Jar & Chocolate Factory</li>
		<li>CandyLand</li>
		<li>Barney’s Pet Shop</li>
		<li>Santa’s Workshop</li>
		<li>Customer & Client Concierge Club</li>
		<li>It’s Hot – Best Sellers</li>
		<li>For the Ages</li>
	</ul>
	<p>&nbsp;</p>
    </div> <!-- end column 2 -->

  </div>  <!--end content-->
  <div class="clearfloat">  </div>

  <?php include 'footer.php' ; ?>
</div> <!--end container-->
</body>
</html>
<?php
   ob_end_flush();
?>