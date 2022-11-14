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
	<title>ที่ปรึกษา</title>
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
				<h2 class="mb-3 text-capitalize fw-500">ที่ปรึกษา</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a href="index">หน้าแรก</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="about">ที่ปรึกษา มยส.</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="section teams">
	<div class="container">
		<div class="row position-relative">
			<?php 
			$strSQL = "SELECT * FROM dsx3_personnel WHERE dp_status = 'Y' AND dp_personnel_type = '1' ORDER BY dp_seq";
			$res = $db->fetch($strSQL, true, true);
			if(($res) && ($res['status'])){
				foreach ($res['data'] as $row) {
					?>
					<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
						<div class="card bg-transparent border-0 text-center">
							<div class="card-img">
								<img loading="lazy" decoding="async" src="<?php if($row['dp_profile'] != null) { echo $row['dp_profile']; } else { echo "../template/front/images/about/team-1.jpg"; } ?>" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
								<!-- <ul class="card-social list-inline">
									<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
									</li>
									<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
									</li>
								</ul> -->
							</div>
							<div class="card-body">
								<h3><?php echo $row['dp_fullname']; ?></h3>
							</div>
						</div>
					</div>
					<?php
				}
			}
			?>
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
