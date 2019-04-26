<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/brand.css")?>">
  
</head>

<body >
  
  <div class="container" >
    <a href="<?php echo base_url('index.php/C_klikfiks/index');?> ">
      <img src="<?php echo base_url("assets/leave.png")?>" height="80px" width="80px" style="padding: 15px" >
                
                <span ><?php echo $_SESSION["series"]; ?> <span> <?php echo "$data1->namaKeluhan"; ?> </span> 
                </span>

    </a>          
            
  </div>
  <div class="container margin-bottom-lg ng-scope" style="padding-top: 100px">
    <div class="row ng-scope" ng-if="!vm.end &amp;&amp; !vm.serviceloadingwheel" style=""> 
      <div class="col-lg-12">
        <p class="legend-sub-title text-center text-uppercase ng-binding"></p>
        <h2 class="legend-title text-center ng-binding"></h2>
      </div>
      <div class="col-lg-12 margin-top-lg 
      ">
      <div class="row" ng-switch="" on="vm.config.mode"service-col text-center ng-scope ng-switch-default="" ng-repeat="item in vm.items | orderBy:'order'"  ng-switch="" on="item.helpbox">
        
        <div  ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div class="container col-lg-12 col-sm-6 col-xs-6" style="background-color: white">
              <img class="img-thumbnail" src="<?php echo base_url("assets/iPadAir2.png")?>" height="192px" width="192px">
              <div style="text-align: center;">
                <span class="service-btn"  ></span>
              </div>
            </div>
          </div>
        
          
          <div ng-switch-default -ng-click="vm.nextService(item)" class="ng-scope">
            <div class="container " style="background-color: white ;padding-left: : 1000p">
              
              <span>
                <p><?php echo "$data1->keterangan"; ?></p>
                
              </span>
            </div>
          </div>

    
      <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs" style="padding-left: 100px">
        <div class="panel panel-default">
          <div class="panel-body border-bottom">
            <div class="col-md-12 service-info-deck2 text-center">
              
              <p class="text-uppercase black-textcolor font-11 margin-bottom-zero ng-binding">
                <i class="fa fa-fw fa-tag light-green-textcolor">
                </i> Harga Klikfix Dimulai Dari
              </p>
              <p class="font-26 medium-purple-textcolor ng-binding"><?php echo "$detail->kisaranHarga"; ?></p>
              <p class="font-11 devany-black-textcolor margin-bottom-zero ng-binding">Harga Klikfix 20% - 30% lebih murah dari harga rata-rata pasaran, berdasarkan hasil riset tahun 2017 - 2018 di area Jabodetabek.</p>
            </div>
            <div class="col-md-12 pad-top-2">
              <label>Have a coupon?</label>
                 <div class="row">
                  <form class="col-md-12 ng-pristine ng-valid" ng-submit="vm.validateCoupon()">
                    <input class="form-control ng-pristine ng-untouched ng-valid" ng-model="vm.coupon" ng-change="vm.coupon=vm.coupon.toUpperCase();"> 
                      <button type="submit" class="btn btn-small btn-info" ng-disabled="!vm.coupon" disabled="disabled">Validate</button>
                  </form>
            </div>
             <p class="help-block ng-binding ng-scope" ng-if="vm.couponMessage != 'valid'"></p>
            <div class="panel-body border-bottom"><div class="row">
              <div style="padding-bottom: 13px" class="col-xs-8 title ng-binding">BIAYA PEMBUATAN JANJI
              </div>
              <div style="padding-bottom: 13px" class="col-xs-4 text-right free ng-binding">GRATIS
              </div>
              <div class="checkbox" style="padding-left: 15px">
                <label class="ng-binding">
                  <input type="checkbox" ng-click="vm.agree = !vm.agree">Saya sudah membaca dan menyetujui syarat dan ketentuan 
                    <a ui-sref="app.terms" target="_blank" href="/ID/terms-conditions">
                      <strong>Terms &amp; Conditions</strong>
                    </a>
                </label>
              </div>
              <div class="col-xs-12 margin-top">
                <button class="button">
                  <a class="btn light-primary-block-btn ng-binding" ng-click="vm.goTo('step1')" ng-disabled="!vm.agree" href="<?php echo base_url('index.php/C_klikfiks/orderload');?>">Buat Janji</a>
                </button>
              </div>
              <div class="panel-body">
                <h4 class="text-center">
                  <small class="ng-binding">Metode pembayaran yang dapat dilakukan</small>
                </h4><div class="col-md-12 service-info-deck-2">
                  <div class="media">
                    <a class="pull-left">
                      <img class="media-object" src="<?php echo base_url("assets/payment.png")?>"style="height:50px">
                    </a>
                  <div class="media-body">
                    <h5 class="media-heading">
                      <strong class="ng-binding">Bayar via Transfer</strong>
                    </h5>
                    <p>
                      <small class="ng-binding">Transfer ke Akun Bank Klikfix</small>
                    </p>
              <div class="container-fluid">
                Anda tidak perlu membayar apapun sebelum kami menyelesaikan pekerjaan!
              </div>
          </div>
        </div>
      </div>
     

        
        
                             
      </div>
    </div>
  

          

  <div  class="container " style="padding-top: 100px">
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