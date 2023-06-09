<?php
$active_page = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a href="../Admin/dashboard.php" class="list-group-item list-group-item-action py-2 ripple <?= ($active_page == 'dashboard') ? 'bg-success  text-light rounded' : "" ?>" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
            </a>
            <a href="../Admin/create.php" class="list-group-item list-group-item-action py-2 ripple  <?= ($active_page == 'create') ? 'bg-success  text-light rounded' : "" ?> ">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Create Post</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-lock fa-fw me-3"></i><span>Delete Post</span></a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
            <a href="../Admin/logout.php" class="list-group-item list-group-item-action py-2 ripple text-danger">
                <i class="fas fa-chart-pie fa-fw me-3"></i><span>Logout</span>
            </a>
        </div>
    </div>
</nav>