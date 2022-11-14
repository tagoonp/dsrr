<?php 
require('../config/php/config.inc.php');
require('../config/php/database.php'); 
require('../config/php/function.php'); 
require('../config/php/mailer.php'); 

$page_name = basename(__FILE__) ;

?>
<!DOCTYPE html>

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>เกี่ยวกับเรา</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="title" content="มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้ มยส." />
	<meta name="description" content="องค์กรในรูปแบบมูลนิธิ ที่บริหารจัดการโดยคณะบุคคลที่มีความโปร่งใส และมีประสบการณ์จากการปฏิบัติงานในกระเด็นของการเยียวยาในพื้นที่ และสามารถส่งต่อความต้องการการช่วยเหลือของผู้ได้รับผลกระทบในจังหวัดชายแดนใต้" />
	<meta name="keywords" content="มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้, มยส, The Deep South Relief and Reconciliation Foundation, DSRR" />
  <link rel="shortcut icon" href="../images/logo-dsrr3.png" type="image/x-icon">
	<link rel="icon" href="../images/logo-dsrr3.png" type="image/x-icon">
  
  <!-- theme meta -->
  <meta name="theme-name" content="wallet" />

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="../template/front/plugins/slick/slick.css">
	<link rel="stylesheet" href="../template/back/assets/vendor/fonts/boxicons.css" />

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="../template/front/css/style.css">

  <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo filemtime('../assets/css/style.css'); ?>">
</head>

<body>

<?php 
require_once('../comp/header.php');
?>


<section class="page-header bg-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize fw-500">เกี่ยวกับ มยส.</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a href="index">หน้าแรก</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="about">เกี่ยวกับเรา</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-7">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3">ยินดีต้อนรับ</p>
					<h2 class="h1 mb-4">"สู่การเยียวยาที่ยั่งยืน สร้างสมานฉันท์และสันติสุข"</h2>
					<div class="content pe-0 pe-lg-5">
            <p>
              ภารกิจที่สำคัญยิ่ง คือ <span style="color: #065FA3;">การเยียวยาผู้ประสบเหตุความไม่สงบให้ได้รับผลกระทบจากความสูญเสียให้น้อยที่สุด</span> ช่วยให้เขาสามารถดำเนินชีวิตอยู่ต่อไปได้ โดยมีกำลังในการปรับตัวต่อสู้จัดการกับอุปสรรคประการ
            </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 mt-lg-0">
				<img loading="lazy" decoding="async" src="../template/front/images/about/about-11.jpg" alt="Business Loans &lt;br&gt; For Daily Expenses" class="rounded w-100">
			</div>
		</div>
	</div>
</section>

<section class="about-section section bg-tertiary position-relative overflow-hidden">
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-lg-5">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3"></p>
					<h2>มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้</h2>
				</div>
        <h4 style="color: #EC002E;"><i></i></h4>
				  <p class="lead">
            ก่อตั้งขึ้นเมื่อวันที่ 19 มกราคม 2553 เป็นองค์กรในรูปแบบมูลนิธิ ที่บริหารจัดการโดยคณะบุคคลที่มีความโปร่งใส และมีประสบการณ์จากการปฏิบัติงานในกระเด็นของการเยียวยาในพื้นที่ และสามารถส่งต่อความต้องการการช่วยเหลือของผู้ได้รับผลกระทบในจังหวัดชายแดนใต้
          </p>
			</div>
			<div class="col-lg-5">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3"></p>
					<h2>เราทำอะไรบ้าง?</h2>
				</div>
				<p class="lead">Our loan sanction is one of the quicke with eas documentation and doorstep lorem ipsum serviceullam dolor sitisi.</p>
				<div class="content">
					<ul>
						<li>Habit building in essential steps choose habit</li>
						<li>Get an overview of Habit Calendars Latest Posts</li>
						<li>Start building habit with Habitify on platform</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<?php require_once('../comp/footer.php'); ?>


<!-- # JS Plugins -->
<script src="../template/front/plugins/jquery/jquery.min.js"></script>
<script src="../template/front/plugins/bootstrap/bootstrap.min.js"></script>


</body>
</html>
