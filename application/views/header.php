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
  <img  id="logo" style="height:30px" src = "<?php echo base_url("assets/logo.png")?>">
  </a>
  <div class="nv-bar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a id="1" class="nav-link col-lg" href="<?php echo base_url("index.php/C_klikfiks/tentang_kamiload") ?>" style="color: white">Tentang Kami </a>
      </li>
      <li class="nav-item active">
        <a id="2"class="nav-link col-lg" href="#" style="color: white">Track Order</a>
      </li>
      <li class="nav-item active">
        <a id="3" class="nav-link col-lg" href="#" style="color: white">Blog</a>
      </li>
      <li class="nav-item active">
        <a id="4"class="nav-link col-lg" href="#" style="color: white">FAQs</a>
      </li>
      <li class="nav-item active">
        <a id="5" class="nav-link col-lg" href="#" style="color: white">Hubungi Kami di</a>
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
    document.getElementById("1").style.color="black";
    document.getElementById("2").style.color="black";
    document.getElementById("3").style.color="black";
    document.getElementById("4").style.color="black";
    document.getElementById("5").style.color="black";
    document.getElementById("logo").src="<?php echo base_url("assets/logo-black.png")?>" 
  } else {
     
    document.getElementById("header").style.background="";
    document.getElementById("header").style.position="relative";
    document.getElementById("1").style.color="white";
    document.getElementById("2").style.color="white";
    document.getElementById("3").style.color="white";
    document.getElementById("4").style.color="white";
    document.getElementById("5").style.color="white";
    document.getElementById("logo").src="<?php echo base_url("assets/logo.png")?>" 
  }
}
</script>

</body>
</html>