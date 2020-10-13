<!DOCTYPE html>
<html>
<title>Painel Turbo Mendes</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px;height: 500px;background-color: #0000FF;color:white;"id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16 w3-blue"style="background-color: #0000FF;color: white;text-align: center; font-size: 18px; height: 200px;">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>AUTO-ESCOLA TURBO MENDES</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey w3-blue" style="font-weight:bold;background-color: #0000FF; color: white;">
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-red w3-left-align w3-text-white" id="myBtn" style="background-color: red;color: white;">
      Aulas <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Agendar Aula</a>
      <a href="#" class="w3-bar-item w3-button">Cancelar Aula</a>
    </div>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-yellow w3-left-align w3-text-white" id="myBtn">
      Condutores <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Roberto</a>
      <a href="#" class="w3-bar-item w3-button">Moraes</a>
      <a href="#" class="w3-bar-item w3-button">Silvia</a>
      <a href="#" class="w3-bar-item w3-button">Lucia</a>
    </div>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-green w3-left-align w3-text-white" id="myBtn">
      Carros <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Versa</a>
      <a href="#" class="w3-bar-item w3-button">Onix</a>
      <a href="#" class="w3-bar-item w3-button">HB20</a>
      <a href="#" class="w3-bar-item w3-button">Corolla</a>
    </div>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">AUTO-ESCOLA TURBO MENDES</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge w3-blue">
    <p class="w3-left" style="font-size: 20px;">PAINEL ADMINISTRATIVO TURBO MENDES</p>
    <p class="w3-right">
      <a href="">
      <i class="fa fa-sign-out">Sair</i>
      </a>
    </p>
  </header>

  <!-- Image header -->



<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();

//Abre o sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
