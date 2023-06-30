<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-left py-3">
		<div class="container">
			<a class="navbar-brand d-none d-sm-block" href="index">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="../images/logo-dsrr3.png" alt="Dsrr">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-right">
					<?php 
					$strSQL = "SELECT * FROM dsx3_menu WHERE menu_position_id = '1' AND menu_level = '1'";
					$res = $db->fetch($strSQL, true, true);
					if(($res) && ($res['status'])){
						foreach ($res['data'] as $row) {
							$menu_parent_id = $row['menu_id'];

							$strSQL = "SELECT * FROM dsx3_menu WHERE  menu_position_id = '1' AND menu_level = '2' AND menu_parent_id = '$menu_parent_id'";
							$res2 = $db->fetch($strSQL, true, true);
							
							if(($res2) && ($res2['status'])){
								?>
								<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $row['menu_title'];?></a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php 
										foreach ($res2['data'] as $row2) {
											?><li><a class="dropdown-item" href="<?php echo $row2['menu_url']; ?>" target="<?php echo $row2['menu_link_target'];?>"><?php echo $row2['menu_title']; ?></a></li><?php
										}
										?>
									</ul>
								</li>
								<?php
							}else{
								?>
								<li class="nav-item "><a class="nav-link" href="<?php echo $row['menu_url'];?>" target="<?php echo $row['menu_link_target'];?>"><?php echo $row['menu_title'];?></a></li>
								<?php
							}
						}
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->