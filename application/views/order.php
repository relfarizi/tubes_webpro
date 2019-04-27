<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container col-sm-10 " style="background:white ">
		<img src="<?php echo base_url("assets/kembali.png")?>" style="width: 50px;
  height: auto;">
	</div>

	<div class="container-fluid" style="background: white; padding-top: 50 px">
		<center>
			<h4 style="font-family: sans-serif; padding-top: 30px"> <b>Kami Akan Mengunjungi Anda</b> </h4>
			<img src="<?php echo base_url("assets/kurir.svg")?>" style="width: 12%; height: auto;  padding-top: 30px ;padding-bottom:60px">
  		</center>
	</div>

<!-- form -->

	<div class="container" style="background: white ">
		<div class="container">
    	<div class="row mt-3">
        <div class="col">
            <div class="card">
		<?php echo form_open("C_klikfiks/buatjanji", '')?>
		<center>
			<div class="card-header">
				<h6>
					TENTUKAN TANGGAL & JAM
				</h6>
			</div>
			<div class="row card-body">
				<div class="col-sm-8">
				
					<input class="date-input ng-pristine ng-untouched ng-valid ng-isolate-scope ng-valid-date ng-hide" name="tanggal" placeholder="tanggal">
				
				</div>
				
				<div class="dropdown col-sm-1">
				    <input class="date-input ng-pristine ng-untouched ng-valid ng-isolate-scope ng-valid-date ng-hide" name="jam" placeholder="Jam">
			 	 </div>
				
			</div>
			<div style="padding-bottom: 60px">
				<p style="font-size: 10px">
					Catatan: Toleransi waktu yang diberikan adalah 1 jam lebih awal atau lebih lambat dari waktu yang sudah ditentukan.
				</p>
			</div>
		</center>

	</div>
	</div>
	</div>
	</div>

	</div>
	<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
		<center>
				<div class="card-header">
					<h6>
						DATA & ALAMAT
					</h6>
				</div>
		</center>
				<div class="panel panel-default card-body" >
					<div class="panel-body">
						<div class="row">
							<div class=" col-sm-12" style="padding-bottom: 20px">
								<input class="form-control " name="nama" placeholder="Nama lengkap Anda">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6" style="padding-bottom: 20px">
								<input class="form-control " name="email" placeholder="Alamat Email Anda">
							</div>
							<div class="col-sm-6" style="padding-bottom: 20px">
								<input class="form-control " name="telepon" placeholder="Nomor telepon Anda">
							</div>
						</div>

						<div class="row">
							<div class=" col-sm-12" style="padding-bottom: 20px">
								<input class="form-control " name="alamat" placeholder="Masukkan Alamat Anda" style="height: 100px">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6" style="padding-bottom: 20px">
								<input class="form-control " name="pos" placeholder="Kode Pos Anda">
							</div>
							<div class="col-sm-6" style="padding-bottom: 20px">
								<input class="form-control " name="catatan" placeholder="Catatan">
							</div>
						</div>
						
						<div class="row" style="padding-bottom: 50px">
							<div class="col-sm-6">
								Perbaikan
							</div>
							<div class="col-sm-6">
								Harga Dimulai Dari
							</div>
						</div>
						<center>
							<div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4 margin-top-md" style="padding-bottom: 50px">
								<div class="col-sm-6">
									<button type="submit" name="buatjanji" class="btn btn-block btn-confirm primary-block-btn text-uppercase light-green-textcolor ng-binding" style="background-color: blue; color: white "> Lanjutkan</button>
								</div>
							</div>
						</center>

					</div>
				</div>
			<?php echo form_close() ;?>
	</div>
</div>
</div>
</div>
</div>



</body>
</html>