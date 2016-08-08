<?php
@session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
}

include_once 'help_functions.php';
include_once 'parts/header.php';

$error = '';

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
	//insert user to session
	$user = cleanInput($_POST['username']);
	$pass = cleanInput($_POST['password']);

	if (empty($user) || empty($pass)) {
		$error = 'Please fill in all the fields';
	} else {
		$result = shell_exec('sudo perl /var/www/html/LinuxSystem/perl/pass_verify.pl ' . $user . ' ' . $pass);

		if ($result) {
			$_SESSION['user'] = $user;
			header('Location: index.php');
		} else {
			$error = 'The user or password you entered is incorrect.';
		}
	}
} 
?>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box text-center">

                <h2>Linux System Login</h2>
                
                <?php if (!empty($error)) { ?>
				<div class="col-lg-10">
					<div class="alert alert-danger col-lg-4">
	        			<a href="#" class="close" data-dismiss="alert">&times;</a>
	        			<span id="error"><?php echo($error); ?></span>
	    			</div>
				</div>
				<?php } ?>

				<form class="form-horizontal" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> role="form" method="post">
                    <fieldset>

                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="username" id="username" placeholder="Username" value="<?php echo(isset($user) ? $user : ''); ?>" type="text" placeholder="Username"/>
                        </div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" placeholder="Password" type="password" placeholder="Password"/>
                        </div>

                        <div class="form-group text-center">
                            <button style="width: 50%;" type="submit" class="btn btn-success">Login</button>
                        </div>
                </form>
            </div>
            <!--/span-->
        </div>
        <!--/row-->
    </div>
    <!--/.fluid-container-->
</div>
<!--/fluid-row-->

<script>
    /*function explode(){
        document.getElementById("username").value = "";
        document.getElementById("password").value = ""
    }
    setTimeout(explode, 0);*/
</script>

<?php include_once 'parts/bottom.php';?>

</body>

</html>