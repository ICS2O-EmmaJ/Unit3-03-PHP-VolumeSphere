<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Sphere">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Volume of a Sphere in PHP</title>
  </head>
  <center>
  <body>
    <?php echo "<h1>Volume of a Sphere in PHP</h1>"; ?>
    <!-- Formula of Sphere and Calculations -->    
    <center><img src="./images/volume-sphere.png" width="400"></center>
    <?php echo "<h3>Please enter the length of the radius of the sphere below:</h3>" ?>
      <form action="./results.php" method="post" target="results">
      <label for="Radius">Length of Radius of Sphere (in cm):</label>
      <input type="number" step="any" name="radius" placeholder="Radius"><br><br>
      <input type="submit" value="Calculate">
      </form>
      <br>
    <!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">
    </iframe>
  	<!-- Create a space where the user information will be displayed -->
  	<div id="display-results">
  		<div id="volume"></div>
  	</div>
    <br>
    <br>
    <br>
  </body>
  </center>
</html>
