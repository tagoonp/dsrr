<ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item <?php if($page_name == 'index.php'){ echo " active "; }?>">
        <a href="./" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="หน้าแรก">หน้าแรก</div>
        </a>
    </li>

    <!-- Layouts -->
    
    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">การจัดการ</span></span>
    </li>
    <li class="menu-item <?php if($page_name == 'app-create-content.php'){ echo " active "; }?>">
        <a href="app-create-content" class="menu-link">
        <i class="menu-icon tf-icons bx bx-pencil"></i>
        <div data-i18n="สร้างเนื้อหาใหม่">สร้างเนื้อหาใหม่</div>
        </a>
    </li>
    <li class="menu-item  <?php $page_arr = array('app-menu-list.php', 'app-menu-position.php'); if(in_array($page_name, $page_arr)){ echo "open active "; }?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-menu"></i>
            <div data-i18n="เมนู">เมนู</div>
        </a>
        <ul class="menu-sub">
        <li class="menu-item  <?php if($page_name == 'app-menu-list.php'){ echo " active "; }?>">
            <a href="app-menu-list" class="menu-link">
                <div data-i18n="รายการเมนู">รายการเมนู</div>
            </a>
        </li>
        <li class="menu-item <?php if($page_name == 'app-menu-position.php'){ echo " active "; }?> ">
            <a href="app-menu-position" class="menu-link">
            <div data-i18n="ตำแหน่งเมนู">ตำแหน่งเมนู</div>
            </a>
        </li>
        </ul>
    </li>
    <li class="menu-item <?php $page_arr = array('app-user-list.php'); if(in_array($page_name, $page_arr)){ echo "open active "; }?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="ผู้ใช้งาน">ผู้ใช้งาน</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item  <?php if($page_name == 'app-user-list.php'){ echo " active "; }?>">
                <a href="app-user-list" class="menu-link">
                <div data-i18n="รายชื่อผู้ใช้งาน">รายชื่อผู้ใช้งาน</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item <?php $page_arr = array('app-user-consultant.php', 'app-user-committee.php'); if(in_array($page_name, $page_arr)){ echo "open active "; }?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div data-i18n="หน้าพิเศษ">หน้าพิเศษ</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item  <?php if($page_name == 'app-user-consultant.php'){ echo " active "; }?>">
                <a href="app-user-consultant" class="menu-link">
                <div data-i18n="ที่ปรึกษา">ที่ปรึกษา</div>
                </a>
            </li>
            <li class="menu-item  <?php if($page_name == 'app-user-committee.php'){ echo " active "; }?>">
                <a href="app-user-committee" class="menu-link">
                <div data-i18n="กรรมการ">กรรมการ</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item <?php $page_arr = array('app-category-list.php', 'app-category-create.php'); if(in_array($page_name, $page_arr)){ echo "open active "; }?>">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-dock-top"></i>
        <div data-i18n="เพจและโพส">เพจและโพส</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="รายการเนื้อหา">รายการเนื้อหา</div>
                </a>
                <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-profile-user.html" class="menu-link">
                    <div data-i18n="ทั้งหมด">ทั้งหมด</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-profile-teams.html" class="menu-link">
                    <div data-i18n="เพจ">เพจ</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-profile-teams.html" class="menu-link">
                    <div data-i18n="โพส">โพส</div>
                    </a>
                </li>
                </ul>
            </li>
            <li class="menu-item <?php $page_arr = array('app-category-list.php', 'app-category-create.php'); if(in_array($page_name, $page_arr)){ echo "open active "; }?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <div data-i18n="หมวดหมู่">หมวดหมู่</div>
                </a>
                <ul class="menu-sub">
                <li class="menu-item <?php if($page_name == 'app-category-create.php'){ echo " active "; }?>">
                    <a href="app-category-create" class="menu-link">
                    <div data-i18n="สร้างหมวดหมู่เนื้อหา">สร้างหมวดหมู่เนื้อหา</div>
                    </a>
                </li>
                <li class="menu-item <?php if($page_name == 'app-category-list.php'){ echo " active "; }?>">
                    <a href="app-category-list" class="menu-link">
                    <div data-i18n="รายการหมวดหมู่">รายการหมวดหมู่</div>
                    </a>
                </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="menu-item <?php if($page_name == 'app-media.php'){ echo " active "; }?>">
        <a href="app-media" class="menu-link">
        <i class="menu-icon tf-icons bx bx-image"></i>
        <div data-i18n="มีเดีย">มีเดีย</div>
        </a>
    </li>
    
   

    <!-- Charts & Maps -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">รายงานและแผนที่</span>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-chart"></i>
        <div data-i18n="รายงาน">รายงาน</div>
        </a>
        <ul class="menu-sub">
        <li class="menu-item">
            <a href="charts-apex.html" class="menu-link">
            <div data-i18n="Apex Charts">Apex Charts</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="charts-chartjs.html" class="menu-link">
            <div data-i18n="ChartJS">ChartJS</div>
            </a>
        </li>
        </ul>
    </li>
    <li class="menu-item">
        <a href="maps-leaflet.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-map-alt"></i>
        <div data-i18n="แผนที่">แผนที่</div>
        </a>
    </li>
    </ul>