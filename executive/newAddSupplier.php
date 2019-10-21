<?php
   session_start();
   ob_start();
   error_reporting(0); // Seems like the information from the navigation isn't being receieveD?
   include "../includes/connection.inc.php";
   include "../includes/connection.inc2.php";
   //include('../samplewebsites/imageFunctions.inc.php');
   $id = $_SESSION['userId'];
   $link = connectTo();
   $link2 = connectTo2();

?>
<head>
<base href="../"> <!-- allows the hrefs to redirect to root (example in php) -->
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/base/jquery-ui.css" />
  <link rel="stylesheet"type="text/css" href="executive/cssNew/newAddSupplier.css">
  <meta http-equiv="refresh" content="15">
</head>
 <body>

<?php include 'cssNew/header.inc.php' ; ?>


<div class="container">
      <!--</?php include 'sidenav.php' ; ?> -->
      <br>
      <div class="col-lg-4">
      <h3 style="color:#cc0000;">Add Product Supplier</h3>
      </div>

      <br>
    <form id="form" action="supplierNew.php" method="post">
    <div class="col-lg-4">
      <label for="email">Supplier Name</label>
      <input type="text" class="form-control input-sm" id="suppname" placeholder="Supplier name..." name="sn">
      <br>
    </div>
    <div class="col-lg-4">
      <label for="email">Phone Number</label>
      <input type="phone" class="form-control input-sm" id="suppemail" placeholder="Phone number..." name="phone">
      <br>
    </div>
    <div class="col-lg-4">
      <label for="email">Supplier Address</label>
      <input type="text" class="form-control input-sm" id="suppad" placeholder="Supplier address..." name="ad">
      <br>
    </div>
    <div class="col-lg-4">
      <label for="email">City</label>
      <input type="text" class="form-control input-sm" id="suppad" placeholder="City..." name="city">
      <br>
    </div>
    <div class="col-lg-4">
      <label for="email">State</label>
      <select class="form-control" id="state" name="state">
			<option value="">N/A</option>
			<option value="AK">Alaska</option>
			<option value="AL">Alabama</option>
			<option value="AR">Arkansas</option>
			<option value="AZ">Arizona</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DC">District of Columbia</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="IA">Iowa</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="MA">Massachusetts</option>
			<option value="MD">Maryland</option>
			<option value="ME">Maine</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MO">Missouri</option>
			<option value="MS">Mississippi</option>
			<option value="MT">Montana</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="NE">Nebraska</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NV">Nevada</option>
			<option value="NY">New York</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="PR">Puerto Rico</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VA">Virginia</option>
			<option value="VT">Vermont</option>
			<option value="WA">Washington</option>
			<option value="WI">Wisconsin</option>
			<option value="WV">West Virginia</option>
			<option value="WY">Wyoming</option>
</select>
      <br>
    </div>

     <div class="col-lg-4">
      <label for="email">Zip Code</label>
      <input type="text" class="form-control input-sm" id="zip" placeholder="Zip code..." name="zip">
      <br>
    </div>
    <div class="col-lg-4">
      <label for="email">Supplier Code</label>
      <input type="text" class="form-control input-sm" id="zip" placeholder="Supplier code..." name="code">
      <br>
    </div>
    <div class="col-lg-4">
    <label for="email">Email Address</label>
       <input type="text" class="form-control input-sm" id="suppemail" placeholder="Email address..." name="email"><br>
      <br>
    </div>
    <div class="col-lg-4">
    <label for="email">Password</label>
       <input type="text" class="form-control input-sm" id="pwd" placeholder="Password..." name="pass"><br>
      <br>
    </div>
    <div class="col-lg-4">
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
      <br>
    </div>

  </form>
</div>

  <div class="footerResponsive">
      <?php include '../footer.php' ; ?>
      <br>
      <br>
</div>
      <!-- added from index.php -->

      <!-- add repsonsive tabs and accordion conversion at small/xs viewport width | full code for this inside responsive-tabs.js file -->
      <script src="js/responsive-tabs.js"></script>
      <script>
          // show tab content on navtab click events
          $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
              e.preventDefault();
              $( this ).tab( 'show' );
              } );

          // convert tabs into accordion dropdown for a clean responsive layout of this content - navtabs look poor on mobile screen
              ( function( $ ) {
                // Test for making sure event are maintained
                fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
          } )( jQuery );
      </script>
      </body>
      </html>
