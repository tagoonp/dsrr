<?php 
require('../config/php/config.inc.php');
require('../config/php/database.php'); 
require('../config/php/function.php'); 
require('../config/php/mailer.php'); 

$page_name = basename(__FILE__) ;

$id = null;

if((!isset($_REQUEST['id'])) || ($_REQUEST['id'] == '')){
    $db->close($conn);
    header('Location: ./404');
    die();
}

$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

$strSQL = "SELECT * FROM dsx3_content WHERE con_id = '$id' AND con_delete = 'N' AND con_status = 'public'";
$resContent = $db->fetch($strSQL, false, false);
if($resContent){
    $new_view = $resContent['con_read'] + 1;
    $strSQL = "UPDATE dsx3_content SET con_read = '$new_view' WHERE con_id = '$id'";
    $res = $db->execute($strSQL);

    if($resContent['con_redirect'] == 'Y'){
        header('Location: ' . $resContent['con_redirect_url']);
        die();
    }
}else{
    $db->close($conn);
    header('Location: ./404');
    die();
} 


?>
<!DOCTYPE html>

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title><?php echo $resContent['con_title']; ?></title>
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
				<h2 class="mb-3 text-capitalize fw-500"><?php echo $resContent['con_title']; ?></h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a href="index">หน้าแรก</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="<?php echo $resContent['con_url']; ?>"><?php echo $resContent['con_title']; ?></a>
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
					<h2 class="h1 mb-4 text-center">มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้</h2>
					<h3 class="h1 mb-4 text-center">Deep South Relief and Reconciliation Foundation (DSRR)</h3>
					<div class="content pe-0 pe-lg-12">
						<div class="panel-content text-center text-dark">
							<p class="text-center">
							<span style="font-size: 18px;">ชั้น 6 อาคารบริหาร คณะแพทยศาสตร์<br>
							สาขามหาวิทยาลัยสงขลานครินทร์ วิทยาเขตหาดใหญ่ อ.หาดใหญ่ จ.สงขลา 90110<br><br>
							โทรศัพท์ <span style="font-size: 24px;">08 3397 220</span><br>
							โทรสาร <span style="font-size: 24px;">0 7445 5150</span><br>
							E-mail <span style="font-size: 24px;">dsrrfoundation@gmail.com</span><br>
							Website <span style="font-size: 24px;">https://dsrrfoundation.org</span>
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
