<?php
@session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

include_once 'help_functions.php';
include_once 'parts/header.php';
?>

<body>

<?php include_once 'parts/nav.php';?>

<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a>
        </li>
    </ul>

    <div class="row-fluid">

        <h1 class="page-header">Welcome to Linux SYSTAT System</h1>

        <img src="http://www.freetechie.com/blog/wp-content/uploads/2015/11/9322ab268d57db860da56647cfecf7d3.png" width="40%" height="40%"></img>
        <img src="http://www.co2partners.com/blog/wp-content/uploads/2014/02/Perfomance-Meter-High.png" width="40%" height="40%"></img>

    </div>

    <!-- end: Content -->
</div><!--/#content.span10-->

</div><!--/fluid-row-->


<?php 
	include_once 'parts/bottom.php';
	include_once 'parts/footer.php';
?>