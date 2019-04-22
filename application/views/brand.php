<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="assets/css/brand.css">
</head>

<body >
  <div class="breadcrumb ng-scope" ng-if="vm.history" style="background: white">
  <div class="container" >
    <img src="assets/leave.png" height="80px" width="80px" style="padding: 15px" >
    
                <span >Perangkat</span>
              
            
      </div>
    </div>
  <div class="container margin-bottom-lg ng-scope">
    <div class="row ng-scope" ng-if="!vm.end &amp;&amp; !vm.serviceloadingwheel" style=""> 
      <div class=" container">
      <div class="col-lg-12 margin-top-lg 
      ">
      <div class="row" ng-switch="" on="vm.config.mode>
        <div class="service-col text-center ng-scope col-lg-3 col-sm-7 col-xs-7" ng-switch-default="" ng-repeat="item in vm.items | orderBy:'order'"  ng-switch="" on="item.helpbox">
        <div ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div style="background: white">
              <img class="img-thumbnail" src="assets/ASUS.png" height="216px" width="216px">
              <div style="text-align: center;">
                <h3  >ASUS</h3>
                <span class="service-btn"  >go</span>
              </div>
            </div>
          </div>
          <div class="service-col text-center ng-scope col-lg-3 col-sm-6 col-xs-6" ng-switch-default="" ng-repeat="item in vm.items | orderBy:'order'" ng-switch="" on="item.helpbox">
          <div ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div style="background: white">
              <img class="img-thumbnail" src="assets/Xiaomi.png" height="28px" width="248px">
              <span>
                <h3>Xiaomi</h3>
                <span class="service-btn">go</span>
              </span>
            </div>
          </div>
        </div>
          <div class="service-col text-center ng-scope col-lg-3 col-sm-6 col-xs-6" ng-switch-default="" ng-repeat="item in vm.items | orderBy:'order'"  ng-switch="" on="item.helpbox">
          <div ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div style="background: white">
              <img class="img-thumbnail" src="assets/ASUS.png">
              <span>
                <h3>ASUS</h3>
                <span class="service-btn">go</span>
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
        <th><img src="assets/costumer_service.png" class="image"></th>
        <th><img src="assets/pickup.png" class="image" ></th>
        <th><img src="assets/diagnosa.png" class="image"></th>
        <th><img src="assets/repair.png" class="image"></th>
        <th><img src="assets/delivery.png" class="image" style="height: 160%"></th>
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