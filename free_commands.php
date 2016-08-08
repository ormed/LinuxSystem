<?php
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
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="free_commands.php">Free Command Line</a></li>
        </ul>

        <div class="row-fluid">

                    <h1 class="page-header">Free Command Line</h1>
                    
                    <form class="form-horizontal" role="form" style="margin-bottom: 70px;">
							
							<div class="form-group">
								<label for="inputCommand" class="control-label">Enter Command: </label>
								<div class="">
									<input type="text" class="form-control" name="command" placeholder="Command">
								</div>
							</div>
							
							<div class="col-sm-offset-1 col-sm-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
					</form>
					
					<pre id="command-respond"></pre>

        </div>

    <!-- end: Content -->
    </div><!--/#content.span10-->

</div><!--/fluid-row-->

<script src="js_lib/shell_commands.js"></script>

<?php include_once 'parts/bottom.php';?>

</body>

</html>