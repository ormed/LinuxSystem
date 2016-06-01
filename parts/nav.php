<script type="text/javascript">
    function date_time(id)
    {
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
            h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
            m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
            s = "0"+s;
        }
        result = d+'/'+months[month]+'/'+year+' '+h+':'+m;//+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
    }
</script>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><i class="fa fa-ambulance"></i> Afeka Decision Support System | <font color="green" style="font-family: Cursive">Welcome <?php echo $_SESSION['name']?> !</font></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-cogs"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="user_info.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    <?php
                    if($_SESSION['auth'] == 1) // if admin
                    {
                        ?>
                        <li><a href="edit_users.php"><i class="fa fa-users fa-fw"></i> Edit Users</a>
                        <li><a href="add_user.php"><i class="fa fa-user-plus fa-fw"></i> Add User</a>
                    <?php
                    }
                    ?>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <ul class="navbar-brand navbar-right">
        <span id="date_time" style="font-size: medium; font-family: Consolas; color: black;"></span>
        <script type="text/javascript">window.onload = date_time('date_time');</script>
        <!--<font color="black" size="2" ><span id='ct'><b></b></span></font>-->
    </ul>
    <!-- /.navbar-top-links -->


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php">Main</a>
                </li>
                <li>
                    <a href="alarm.php">Notifiers</a>
                </li>
                <li>
                    <a href="similar_cases.php">Search Cases</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
        <div>Copyright &copy; Afeka Decision Support System</div>
    </div>
    <!-- /.navbar-static-side -->
</nav>