<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/home.css")?>">
</head>

<body>
<div clas="container-fluid" style="background: linear-gradient(to bottom, #33cccc 1%, #bce0cd 100%) ; color: white;">
  <div class="container">
    <h3 class="text-center" style="padding-top:50px; ">
      <div>Jasa Service iPhone, Handphone (HP), dan Laptop Panggilan Terpercaya di </div>
      <div>Jakarta dan Bandung</div>
    </h3>
    <h6 class="text-center" style="padding-top: 25px;">
      <div>Panggil Klikfix aja, teknisi yang siap mendatangimu ke mana saja.</div>
      <div>Gratis konsultasi, garansi 60 hari & bayar hanya kalau gadget kamu sudah selesai diperbaiki.</div>
      </h6>
    <center>
    <a href="/#">
    <button class="btn-primary" style="margin-top: 15px;padding: 5 25 5 25; border-radius: 50px;"> <b>Konsultasi Gratis</b></button>
    </a>
  </center>
  </div>
  <div>
  <table class="container">
      <tr >
        <th><img src="<?php echo base_url("assets/klikfiks.png")?>" class="image" style="max-width: 100%;
  height: auto;"></th>
      </tr>
  </table>
  </div>
</div>

<div style="background: linear-gradient(to bottom, #E8DAEF 1%, #bce0cd 100%)">
  <div class="weird-grey-bgcolor pad-tb-lg ng-isolate-scope">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-prefix header">
          <p  class="ng-binding">
            <span  class="ng-binding">Butuh estimasi biaya?</span> Tulis jenis gadget dan kerusakannya di sini dan kami akan segera memberikan estimasi biaya kepada kamu:
          </p>
        </div>
      </div>
      <div class="col-md-12 well white-bgcolor margin-bottom-zero box estimate-form-container">
    
         <!--dekstop-->
        <div  class="row hidden-xs hidden-sm">
          <div class="col-md-4 border-right">
            <div class="input-group input-transparent">
              <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="JENIS GADGET KAMU" autocomplete="off" required="" ng-model="vm.model.device" ng-model-options="{ debounce: 500 }" typeahead="device as device.title for device in vm.getDevices($viewValue)" typeahead-on-select="vm.onDeviceSelected($item, $model, $label)" typeahead-no-results="vm.noResults" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-14-1163">

              <ul class="dropdown-menu ng-isolate-scope ng-hide" ng-show="isOpen() &amp;&amp; !moveInProgress" ng-style="{top: position().top+'px', left: position().left+'px'}" style="display: hide;;display: hide;" role="listbox" aria-hidden="true" typeahead-popup="" id="typeahead-14-1163" matches="matches" active="activeIdx" select="select(activeIdx)" move-in-progress="moveInProgress" query="query" position="position">
                <!-- ngRepeat: match in matches track by $index -->
              </ul>
              <span  class="input-group-addon">
                <i  class="fa fa-search"></i>'
              </span>
            </div>
          </div>
          <div class="col-md-4 border-right">
            <div class="input-group input-transparent">
              <select  class="form-control ng-pristine ng-untouched ng-valid" ng-model="vm.model.issue" ng-options="issue as issue.issueType.idName group by issue.parent for issue in vm.issues" ng-disabled="!vm.model.device || vm.loading" disabled="disabled">
                <option value="" disabled="" selected="selected" class="ng-binding">KERUSAKANNYA</option>
              </select>
              <span  class="input-group-addon">
                <i  class="fa fa-chevron-down">
                </i>
              </span>
            </div>
          </div> 
          <div class="col-md-4 padding-10">
            <button  type="button" class="btn btn-block primary-circle-btn disable-opacity btn-price ng-binding" ng-click="vm.getPriceQuote()">LIHAT BIAYANYA
            </button>
          </div> 
      </div>
    </div>
  </div>
</div>

<div style="background-color: white; padding-bottom: 50px; padding-top: 25px ;;
">
  <div class="container ">
    <h3 class="text-center" style="padding-bottom: 10px">5 Langkah Mudah Service di Klikfix</h3>
    <table class="container">
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
</div>


<div class="container-fluid " style="background-color: blue; color: white;padding-top: 30px;padding-bottom: 30px">
  <div>
    <h3 class="text-center" style="padding-bottom: 5px">Layanan Kami</h3>
    <p class="text-center" style="font-size:12px  ">Berikut adalah tipe gadget-mu yang bisa kami perbaiki</p>
  </div>

  <div class="container">
    <table class="container">
      <tr class="text-center" style="font-size: 10px; padding-right: 5px; padding-top: 10px;">
        <td>
          <a href="<?php echo base_url('index.php/C_klikfiks/brandload');?> ">
          <button style="padding: 50px 90px;  ;background-color:  #0000CD; border: none; 
  cursor: pointer;
            transition: ease all 0.3s; ">
            <div>
              <img src="<?php echo base_url("assets/smartphone.png")?>">
            </div>
            <div>
              <h4 style="  color: white; padding-top: 40px">Smartphone</h4>
            </div>
            <div>
              <img src="<?php echo base_url("assets/arrow.png")?>" style="padding-top: 40px" >
            </div>
          </button>
        </a>
        </td>
        <td>
          <a href="<?php echo base_url('index.php/C_klikfiks/brandTload');?>  ">
          <button style="padding: 50px 120px; background-color:  #0000CD; border: none; 
  cursor: pointer;transition: ease all 0.3s;">
            <div>
              <img src="<?php echo base_url("assets/tablet.png")?>">
            </div>
            <div>
              <h4 style="  color: white; padding-top: 40px">Tablet</h4>
            </div>
            <div>
              <img src="<?php echo base_url("assets/arrow.png")?>" style="padding-top: 40px">
            </div>
          </button>
        </a>
        </td>       
         </td> 
        <td>
          <a href="<?php echo base_url('index.php/C_klikfiks/brandLload');?> ">
          <button style="padding: 50px 120px; background-color:  #0000CD; border: none; 
  cursor: pointer; transition: ease all 0.3s; ">
            <div>
              <img src="<?php echo base_url("assets/laptop.png")?>">
            </div>
            <div>
              <h4 style="  color: white; padding-top: 40px">Laptop</h4>
            </div>
            <div>
              <img src="<?php echo base_url("assets/arrow.png")?>" style="padding-top: 40px">
            </div>
          </button>
        </a>
        </td>
        </td>  
      </tr>

    </table>
  </div>
</div>


<div style="
 padding-bottom: 50px; padding-top: 25px;background-image : url'<?php echo base_url('assets/work.png')?>';color: white">
  <div class="container ">
    <h3 class="text-center" style="padding-bottom: 10px">Keunggulan Klikfix</h3>
    <table class="container">
      <tr>
        <th><img src="<?php echo base_url("assets/money.png")?>" class="image" style="height : 150%"></th>
        <th><img src="<?php echo base_url("assets/pickup.png")?>" class="image"></th>
        <th><img src="<?php echo base_url("assets/garansi.png")?>" class="image"></th>
        <th><img src="<?php echo base_url("assets/teknisi.png")?>" class="image"></th>
      </tr>
      <tr class="text-center" style="font-size: 10px; padding-right: 5px; color: white">
        <td>
          <STRONG>Gratis Konsultasi</STRONG>
          <p>Klikfix memberikan GRATIS konsutasi. Semua harga akan di infokan pada awal pelayanan</p>
        </td>
       <td>
          <STRONG>Gratis Antar Jemput</STRONG>
          <p>Klikfix memberikan kemudahan antar-jemput di tempat yang disepakati</p>
        </td>
        <td>
          <STRONG>Garansi 60 hari</STRONG>
          <p>Kualitas yang menjanjikan dengan memberikan garansi 60 hari sejak perbaikan selesai</p>
        </td>
        <td>
          <STRONG>Teknisi Handal</STRONG>
          <p>Teknisi handal kami bisa memperbaiki berbagai macam kerusakan gadget dan laptop Anda</p>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="container-fluid" style="background-color: white; padding-top: 50px; padding-bottom: 50px">
  <h3 class="text-center" style="padding-bottom: 10px">Pernah diliput oleh</h3>
  <table class="container" >
      <tr>
        <th><img src="<?php echo base_url("assets/media.png")?>" class="image" style="max-width: 100%;
  height: auto;"></th>
        <th><img src="<?php echo base_url("assets/media.png")?>" class="image" style="max-width: 100%;
  height: auto;"></th>
        <th><img src="<?php echo base_url("assets/media.png")?>" class="image" style="max-width: 100%;
  height: auto;"></th>
        <th><img src="<?php echo base_url("assets/media.png")?>" class="image" style="max-width: 100%;
  height: auto;"></th>
        <th><img src="<?php echo base_url("assets/media.png")?>" class="image" style="max-width: 100%;
  height: auto;"></th>
      </tr>
  </table>
</div>



</body>
</html>