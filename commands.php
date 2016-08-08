<?php
include_once 'parts/header.php';
?>

<body>

    <?php include_once 'parts/nav.php';?>

    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <a href="index.php"><i class="icon-home"></i> Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li>
            	<a href="commands.php">Commands</a>
            </li>
        </ul>

        <div class="row-fluid">

                    <h1 class="page-header">Commands</h1>
                    <input id="page" type="hidden" name="page" value="ls">
							<div class="form-group">
								<label for="inputCommand" class="col-sm-1 control-label">Option: </label>
								<div class="col-sm-3">
									<select name="option" class="form-control">
										<option value="other">no option</option>
										<option value="-a">Show hidden file (-a)</option>
										<option value="-l">Show long format (-l)</option>
										<option value="-al">Show hidden and long format (-al)</option>
										<option value="-i">Show index number (-i)</option>
										<option value="-s">Show size (-s)</option>
										<option value="-F">List files and directories (-F)</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPath" class="col-sm-1 control-label">File path: </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="path" placeholder="File path">
								</div>
							</div>
							
							<div class="col-sm-offset-1 col-sm-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							
							<pre id="command-respond"></pre>
        </div>

    <!-- end: Content -->
    </div><!--/#content.span10-->

</div><!--/fluid-row-->

<script src="js_lib/shell_commands.js"></script>


<?php include_once 'parts/bottom.php';?>

</body>

</html>