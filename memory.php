<?php
/*if (!isset($_SESSION['user'])) {
    header("Location: /LinuxSystem/login.php");
}*/
include_once 'parts/header.php';

$disk_usage = shell_exec('df -BM');

//build array from df
$disks = array();
foreach(explode("\n", $disk_usage) as $line) {
    $partition = array();
    $found = preg_match_all("/([^\s].+?)\s/", $line, $partition);
    if ($found) {
        $disks[] = $partition[1];
    }
}
array_shift($disks); //remove the headers at the start of array

$cpu = shell_exec('mpstat | grep "all"');

$mem_free = shell_exec('free -m');
?>

<body>

    <?php include_once 'parts/nav.php';?>

    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.php">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="blank.php">Blank</a></li>
        </ul>

        <div class="row-fluid">
            <h1 class="page-header">Monitor</h1>

            <div class="row">
                <div class="span7" id="chart_div" style="width: 500px; height: 200px;"></div>
                <div class="span6">
                    <label>Monitor</label>
                    <div class="span7" id="cpu_div" style="width: 500px; height: 200px;"></div>
                </div>
            </div>

            <label>Memory usage</label>
            <pre><?php echo($mem_free); ?></pre>

            <label>Processes table</label>
            <pre id="process-table"></pre>


        </div>

    <!-- end: Content -->
    </div><!--/#content.span10-->

</div><!--/fluid-row-->


    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
    <script>var disks = <?php echo(json_encode($disks)); ?>;</script>
    <script type="text/javascript" src="js_lib/monitor.js"></script>


<?php include_once 'parts/bottom.php';?>

</body>

</html>
