
<!DOCTYPE html>
<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: login.php');
    exit;
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Details Form</title>
    <link rel="stylesheet" href="style.css">
    <link  rel="stylesheet" href="sty.css">
    <link rel="stylesheet" href="style1.css">

  </head>
  <body>
  <div class="container">
        <div class="header">
            <img src="images/logo.png" class="logo">
            <nav>
            <ul>
                    
            </ul>
            </nav>
            <button class="btn" id="btn2"><a href="logout.php">Logout</a></button>
            
        </div>
</div>



    <div class="center">
      <h1>Farm Data</h1>
      <form method="post" action="app.php">
      <div class="txt_field">
          <input type="text" name="location" required>
          <span></span>
          <label>Location</label>
        </div>
      <div class="txt_field">
          <input type="number" name="Nitrogen" min="0" step="0.01" required>
          <span></span>
          <label>Nitrogen Value</label>
        </div>
        <div class="txt_field">
          <input type="number" name="Phosphorus" min="0" step="0.01" required>
          <span></span>
          <label> Phosphorus Value</label>
        </div>
        <div class="txt_field">
          <input type="number" name="Potassium" min="0" step="0.01" required>
          <span></span>
          <label>Potassium Value</label>
        </div>
        <div class="txt_field">
          <input type="number" name="pH" min="0" max="14" step="0.01" required>
          <span></span>
          <label>pH value</label>
        </div>
        <div class="txt_field">
          <input type="number" name="Rainfall" required>
          <span></span>
          <label>Rainfall</label>
        </div>
        
        <input type="reset" value="Reset">
        <span></span>
        <input type="submit" value="Submit">
        
        
      </form>
    </div>
    

  </body>
</html>
