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
	<title>บริจาคสมทบทุน</title>
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
				<h2 class="mb-3 text-capitalize fw-500">บริจาคสมทบทุน มยส.</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a href="index">หน้าแรก</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="about">บริจาคสมทบทุน</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12">
				<div class="section-title">
					<h2 class="h1 mb-4 text-center">ร่วมบริจาคสมทบทุนมูลนิธิฯ</h2>
					<div class="content pe-0 pe-lg-12">
						<div class="panel-content text-center">
							ท่านสามารถร่วมบริจาคเงินได้ โดยโอนเข้าบัญชี มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้... ได้ที่
							<div class="text-center">
							<img src="../images/SCB_logo2.png" alt="" />
							</div>
							<p class="text-center">
							<span style="font-size: 18px;">ธนาคารไทยพาณิชย์<br>
							สาขามหาวิทยาลัยสงขลานครินทร์ วิทยาเขตหาดใหญ่<br>
							บัญชีออมทรัพย์  เลขที่ <span style="font-size: 24px; color: #EC002E;">565-4-324694</span><br>
							ชื่อบัญชี <span style="color: #065FA3;">มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้</span>
							</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php require_once('../comp/footer.php'); ?>


<!-- # JS Plugins -->
<script src="../template/front/plugins/jquery/jquery.min.js"></script>
<script src="../template/front/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../template/front/plugins/slick/slick.min.js"></script>
<script src="../template/front/plugins/scrollmenu/scrollmenu.min.js"></script>

<!-- Main Script -->
<script src="../template/front/js/script.js"></script>

</body>
</html>
