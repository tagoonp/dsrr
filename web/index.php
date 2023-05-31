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
	<title>มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้, มยส.</title>
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

<section class="banner bg-tertiary position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้</h1>
          <h2 class="text-capitalize mb-4">Deep South Relief and Reconciliation Foundation (DSRR)</h2>
          <p class="mb-4 text-primary">"สู่การเยียวยาที่ยั่งยืน สร้างสมานฉันท์และสันติสุข"</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5 text-center">
          <img loading="lazy" decoding="async"
            src="../template/front/images/banner/banner.png"
            alt="banner image" class="w-100">
        </div>
      </div>
    </div>
  </div>
</section>



<section class="about-section section bg-tertiary position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="section-title">
          <p class="text-primary text-uppercase fw-bold mb-3">เกี่ยวกับเรา</p>
          <h1>มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้</h1>
          <p class="lead mb-0 mt-4">
            <p>มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้ ก่อตั้งขึ้นเมื่อวันที่ 19 มกราคม 2553 เป็นองค์กรในรูปแบบมูลนิธิ ที่บริหารจัดการโดยคณะบุคคลที่มีความโปร่งใส และมีประสบการณ์จากการปฏิบัติงานในกระเด็นของการเยียวยาในพื้นที่ และสามารถส่งต่อความต้องการการช่วยเหลือของผู้ได้รับผลกระทบในจังหวัดชายแดนใต้
            </p>
          </p> <a class="btn btn-primary mt-4" href="about">อ่านต่อ</a>
        </div>
      </div>
      <div class="col-lg-7 text-center text-lg-end">
        <img loading="lazy" decoding="async" src="../template/front/images/about-us.png" alt="About Ourselves" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-5">
        <div class="section-title">
          <p class="text-primary text-uppercase fw-bold mb-3">สู่การเยียวยาที่ยั่งยืน สร้างสมานฉันท์และสันติสุข</p>
          <h1>วัตถุประสงค์</h1>
          <div class="content mb-0 mt-4">
            <p>ภารกิจที่สำคัญยิ่ง คือ การเยียวยาผู้ประสบเหตุความไม่สงบให้ได้รับผลกระทบจากความสูญเสียให้น้อยที่สุด ช่วยให้เขาสามารถดำเนินชีวิตอยู่ต่อไปได้ โดยมีกำลังในการปรับตัวต่อสู้จัดการกับอุปสรรคประการ</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"> <i class="fas fa-shield-alt mt-4" style="font-size:36px"></i>
            </div>
            <div class="block">
              <h3 class="mb-3">1. แหล่งทุนและประสานงาน</h3>
              <p class="mb-0">เป็นแหล่งระดมทุมและประสานการช่วยเหลือเยียวยาผู้ได้รับผลกระทบจากเหตุความไม่สงบ</p>
            </div>
          </div>
        </div>
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"> <i class="fas fa-blender-phone mt-4" style="font-size:36px"></i>
            </div>
            <div class="block">
              <h3 class="mb-3">2. สนับสนุนกิจกรรม</h3>
              <p class="mb-0">สนับสนุนให้เกิดกิจกรรมเพื่อสร้างความสมานฉันท์และความเข้มแข็งแก่คนในท้องถิ่น</p>
            </div>
          </div>
        </div>
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"> <i class="fas fa-money-bill-alt mt-4" style="font-size:36px"></i>
            </div>
            <div class="block">
              <h3 class="mb-3">3. สนับสนุนวิจัย</h3>
              <p class="mb-0">สนับสนุนให้เกิดงานวิจัยหรืองานวิชาการด้านการเยียวยาและความสมานฉันท์</p>
            </div>
          </div>
        </div>
        <div class="difference-of-us-item p-3 rounded mr-0 me-lg-4">
          <div class="d-block d-sm-flex align-items-center m-2">
            <div class="icon me-4 mb-4 mb-sm-0"> <i class="fas fa-money-bill-alt mt-4" style="font-size:36px"></i>
            </div>
            <div class="block">
              <h3 class="mb-3">4. สื่อสารเพื่อความเข้าใจ</h3>
              <p class="mb-0">สื่อสารสาธารณะเพื่อนำไปสู่ความเข้าใจและการวางนโยบายที่ถูกต้อง</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="homepage_tab position-relative">
  <div class="section container">
    <div class="row justify-content-center">
      <div class="col-lg-8 mb-4">
        <div class="section-title text-center">
          <p class="text-primary text-uppercase fw-bold mb-3">Donation</p>
          <h1>ร่วมบริจาคสมทบทุนมูลนิธิ ฯ</h1>
        </div>
      </div>
      <div class="col-lg-10">
        <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
          <div class="content pe-0 pe-lg-12">
						<div class="panel-content text-center">
							ท่านสามารถร่วมบริจาคเงินได้ โดยโอนเข้าบัญชี มูลนิธิเพื่อการเยียวยาและสร้างความสมานฉันท์ชายแดนใต้... ได้ที่
							<div class="text-center">
							<img src="../images/SCB_logo2.png" alt="" class="mb-0" />
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


</body>
</html>
