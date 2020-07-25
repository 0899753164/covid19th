<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" />
	<script src="<?php echo base_url('asset/js/bootstrap.js'); ?>"></script>
	<meta charset="utf-8">
	<title>COVID-19 TH</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		font-family: 'supermarket';
	}
	@font-face {
    font-family: 'supermarket';
    src: url('asset/font/supermarket.ttf');
    font-weight: normal;
    font-style: normal;
}


	h1 {
		color: #444;
		background-color: transparent;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}


	/*#body {
		margin: 0 15px 0 15px;
	}*/

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<?php
	
	date_default_timezone_set('Asia/Bangkok'); # add your city to set local time zone
    $datetime = date('d-m-Y H:i');
    @$latest ='อัพเดทข้อมูลล่าสุด';

 	@$refer ='ขอบคุณ Data จากกรมควบคุมโรค กระทรวงสาธารณะสุข';
 ?>
<div id="">
	<div class="row col-lg-12">
		<div class="col-lg-6">
			<h1>ภาพรวม โรคระบาดโควิท-19 COVID-19 Tracking</h1>
		</div>
		<div class="col-lg-6 d-flex justify-content-end">
			<h1><?php echo $latest. "&nbsp;&nbsp;" .$datetime; ?></h1>
		</div>
		
	</div>
	

	<div id="body">
		<div class="row">
			<div class="card col-lg-8 bg-danger" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><?php //echo $datetime; ?></h5>
					<h3 class="card-subtitle mb-2 d-flex justify-content-center text-white">เสียชีวิตสะสม</h3>
					<h4 class="card-text d-flex justify-content-center text-white"><?php echo $res['Deaths']; ?></h4>
				</div>
			</div>
			<div class="card col-lg-4 bg-secondary" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><?php //echo $datetime; ?></h5>
					<h3 class="card-subtitle mb-2 text-white d-flex justify-content-center">เสียชีวิตล่าสุด</h3>
					<h4 class="card-text d-flex justify-content-center text-white"><?php echo $res['NewDeaths']; ?></h4>
				</div>
			</div>
		</div>
		<div class="row mt-lg-3 mb-lg-3">
			<div class="card col-lg-4 bg-warning" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><?php //echo $datetime; ?></h5>
					<h3 class="card-subtitle mb-2 text-white d-flex justify-content-center">ยืนยันผู้ป่วยใหม่</h3>
					<h4 class="card-text d-flex justify-content-center text-white"><?php echo $res['NewConfirmed']; ?></h4>
				</div>
			</div>
			<div class="card col-lg-4" style="">
				<div class="card-body bg-primary">
					<h5 class="card-title"><?php //echo $datetime; ?></h5>
					<h3 class="card-subtitle mb-2 text-white d-flex justify-content-center">รักษาตัวอยู่ใน รพ.</h3>
					<h4 class="card-text d-flex justify-content-center text-white"><?php echo $res['Hospitalized']; ?></h4>
				</div>
			</div>
			<div class="card col-lg-4" style="width: 18rem;">
				<div class="card-body bg-info">
					<h5 class="card-title"><?php //echo $datetime; ?></h5>
					<h3 class="card-subtitle mb-2 text-white d-flex justify-content-center">เข้ารับการรักษาล่าสุด</h3>
					<h4 class="card-text d-flex justify-content-center text-white"><?php echo $res['NewHospitalized']; ?></h4>
				</div>
			</div>
			
			</div>
			
		</div>
		<div class="row mt-lg-3 mb-lg-3">
			
			<div class="card col-lg-12" style="width: 18rem;">
				<div class="card-body bg-success">
					<h5 class="card-title"><?php //echo $datetime; ?></h5>
					<h3 class="card-subtitle mb-2 text-white d-flex justify-content-center">ยืนยันรักษาหายรายใหม่</h3>
					<h4 class="card-text d-flex justify-content-center text-white"><?php echo $res['NewRecovered']; ?></h4>
				</div>
			
		</div>
		
	</div>

	<p class="footer"><?php echo '<strong>' . @$refer . '</strong>' ?> <a href="https://covid19.th-stat.com/th/api">https://covid19.th-stat.com/th/api</a></p>
</div>

</body>
</html>