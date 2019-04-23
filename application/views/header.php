<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.css");?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/header.css");?>">
</head>
<body style="background: linear-gradient(to bottom, #33cccc 1%, #bce0cd 100%);">
<div id="header">
<div style="color: white;">
	<nav class="navbar navbar-expand-lg navbar-light container-fluid ">
  <a class="navbar-brand col-lg" href="<?php echo base_url("index.php/C_klikfiks") ?>">
  <img  id="logo" style="hight:30px">
  </a>
  <div class="nv-bar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link col-lg tulisan" href="<?php echo base_url("index.php/C_klikfiks/tentang_kamiload") ?>">Tentang Kami </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#">Track Order</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#">FAQs</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#">Hubungi Kami di</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>

<script type="text/javascript">
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    
    document.getElementById("header").style.background="white";
    document.getElementById("header").style.position="sticky";
    document.getElementById("header").style.top=0;
    //document.getElementByClass("logo").src"<?php echo base_url("assets/logo.png")?>" 
  } else {
     
    document.getElementById("header").style.background="";
    document.getElementById("header").style.position="relative";
    document.getElementsByClassName("tulisan").style.color="white";
    //document.getElementById("logo").src"<?php echo base_url("assets/logo.png")?>" 
  }
}
</script>

</body>
</html>