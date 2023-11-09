<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('location: login.php');
    exit;
}

?>
<?php
$loc=$_POST['location'];
$N= $_POST['Nitrogen'];
$K= $_POST['Potassium'];
$P= $_POST['Phosphorus'];

$ph=$_POST['pH'];
$Rainfall= $_POST['Rainfall'];


$command = escapeshellcmd("python app.py $loc $N $P $K $ph $Rainfall");
$output= shell_exec($command);
//echo $output;
//var_dump($output);
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">

</head>
<body>

<div class="container">
        <div class="header">
            <img src="images/logo.png" class="logo">
            <nav>
                <ul>
                <li> <a href="welcome.php">Home</a></li>
                    <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Crops</button>
                    <div id="myDropdown" class="dropdown-content">
                      <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        <a href="pages/rice.html">rice</a>
                        <a href="pages/maize.html">maize</a>
                        <a href="pages/jute.html">jute </a>
                        <a href="pages/cotton.html">cotton</a>
                        <a href="pages/coconut.html">coconut</a>
                        <a href="pages/papaya.html">papaya</a>
                        <a href="pages/orange.html">orange</a>
                        <a href="pages/apple.html">apple</a>
                        <a href="pages/muskmelon.html">muskmelon</a>
                        <a href="pages/watermelon.html">watermelon</a>
                        <a href="pages/grapes.html">grapes</a>
                        <a href="pages/mango.html">mango</a>
                        <a href="pages/banana.html">banana</a>
                        <a href="pages/pomegranate.html">pomegranate</a>
                        <a href="pages/lentil.html">lentil</a>
                        <a href="pages/blackgram.html">blackgram</a>
                        <a href="pages/mungbean.html">mungbean</a>
                        <a href="pages/mothbeans.html">mothbeans</a>
                        <a href="pages/pigeonpeas.html">pigeonpeas</a>
                        <a href="pages/kidneybeans.html">kidneybeans</a>
                        <a href="pages/chickpea.html">chickpea</a>
                        <a href="pages/coffee.html">coffee</a>
                        
                    </div>
                  </div>
              
                  <li><a href="pages/aboutus.html">Contact</a></li>
                </ul>
            </nav>
            <button class="btn" id="btn1"><a href="logout.php">logout</a></button>
            
        </div>
        <div class="content">
            <div class="text">
            <h1 style="color:Black;" class="text-center"><b>You should grow <i style="color:#f3550c;"><?php echo$output ?> </i>in your farm</b></h1>

            
           </div>
        <div class="farmer">
        <img src="images/farmer.png" alt="">
        </div>
       </div>
       </div>
       
  
</div>



<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>

