<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/brand.css")?>">
</head>

<body >
  <div class="breadcrumb ng-scope" ng-if="vm.history" style="background: white">
  <div class="container" >
    <a href="<?php echo base_url('index.php/C_klikfiks/index');?> ">
      <img src="<?php echo base_url("assets/leave.png")?>" height="80px" width="80px" style="padding: 15px" >
    
                <span >Perangkat</span>
    </a>       
            
    </div>
  </div>
  <div class="container margin-bottom-lg ng-scope">
    <div class="row ng-scope" ng-if="!vm.end &amp;&amp; !vm.serviceloadingwheel" style=""> 
      <div class="col-lg-12">
        <p class="legend-sub-title text-center text-uppercase ng-binding"></p>
        <h2 class="legend-title text-center ng-binding"></h2>
      </div>
      <div class="col-lg-12 margin-top-lg 
      ">
      <div class="row" ng-switch="" on="vm.config.mode>
        <div class="service-col text-center ng-switch-default="" ng-repeat="item in vm.items | orderBy:'order'"  ng-switch="" on="item.helpbox">
        <div  ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div class="container col-lg-12 col-sm-6 col-xs-6" style="background-color: white">
              <img class="img-thumbnail" src="<?php echo base_url("assets/samsung.png")?>" height="222px" width="222px">
              <div style="text-align: center;">
                <h3  >samsung</h3>
                <span class="service-btn"  ><img class="img-thumbnail" src="<?php echo base_url("assets/arr.png")?>" height="50px" width="50px"></span>
              </div>
            </div>
          </div>
          <div class="service-col text-center ng-scope " ng-switch-default="" ng-repeat="item in vm.items | orderBy:'order'" ng-switch="" on="item.helpbox">
          <div ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div class="container col-lg-12" style="background-color: white">
              <img class="img-thumbnail" src="<?php echo base_url("assets/apple.png")?>" height="222px" width="222px">
              <span>
                <h3>apple</h3>
                <span class="service-btn"><img class="img-thumbnail" src="<?php echo base_url("assets/arr.png")?>" height="50px" width="50px"></span>
              </span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div  class="container " >
    <h3 class="text-center" style="padding-bottom: 10px">5 Langkah Mudah Service di Klikfix</h3>
    <table class="container" >
      <tr >
        <th><img src="<?php echo base_url("assets/costumer_service.png")?>" class="image"></th>
        <th><img src="<?php echo base_url("assets/pickup.png")?>" class="image" ></th>
        <th><img src="<?php echo base_url("assets/diagnosa.png")?>" class="image"></th>
        <th><img src="<?php echo base_url("assets/repair.png")?>" class="image"></th>
        <th><img src="<?php echo base_url("assets/delivery.png")?>" class="image" style="height: 160%"></th>
      </tr>
      <tr class="text-center" style="font-size: 10px; padding-right: 5px; padding-top: 10px ">
        <td>Langkah 1 : Hubungi kami untuk membuat janji bertemu</td>
        <td>Langkah 2 : Kurir kami akan mengambil gadget Anda</td>
        <td>Langkah 3 : Teknisi akan mendiagnosa kerusakan</td>
        <td>Langkah 4 : Gadget Anda diperbaiki oleh teknisi kami</td>
        <td>Langkah 5 : Kurir mengantar gadget ke tempat Anda</td>
      </tr>
    </table>
  </div>





<div class="container-fluid" style="background-color: white; padding-top: 50 px; font-size: 12px; ">
  <div class="container" >
  <nav class="navbar navbar-expand-lg navbar-light container-fluid">
  <div class="nv-bar" style="text-align: center; ">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#"  style="color: white">Tentang Kami </a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link col-lg" href="#" style="color: white">Track Order</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#" style="color: white">Blog</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#" style="color: white">FAQs</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link col-lg" href="#" style="color: white">Hubungi Kami di</a>
      </li>
    </ul>
  </div>
</nav>
  </div>
</div>
</body>
</html>