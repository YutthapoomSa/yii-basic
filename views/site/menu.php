<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-dashboard"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Smart Hospital</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ผู้บริหาร
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>ข้อมูลสต็อก</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">ข้อมูลสต็อก:</h6>
                <!-- <a class="collapse-item" href="blank.html">ภาพรวม</a> -->
                <a class="collapse-item" href="index.php?r=site%2Fborrow">ใบยืม</a>
                <a class="collapse-item" href="index.php?r=site%2Fpurchase">ใบสั่งซื้อ</a>
                <a class="collapse-item" href="index.php?r=site%2Fitem">ยา</a>
                <a class="collapse-item" href="index.php?r=site%2Freturn">ใบคืน</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>ข้อมูลและสถิติ</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">ข้อมูลและสถิติ</h6>
                <a class="collapse-item" href="index.php?r=site%2Fpatient">จำนวนผู้รับบริการ</a>
                <a class="collapse-item" href="index.php?r=site%2Finpatient">ภาพรวมผู้ป่วยใน</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->