<?php
@session_start();
if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
    header("Location: index.php");
}

include_once 'parts/header.php';
?>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">

                <h2>Login</h2>

                <form class="form-horizontal" action="index.php" method="post">
                    <fieldset>

                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="username" id="username" type="text" placeholder="Username"/>
                        </div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="Password"/>
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