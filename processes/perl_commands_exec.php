<?php
@session_start();

header('Content-type: application/json');

if (!isset($_SESSION['user'])) {
	$result = 'You are not logged in!';
	echo (json_encode($result));
	exit;
}

// Get the current user
$performing_user = $_SESSION['user'];

// Get all the data from POST
$page = $_POST['page'];
$option = $_POST['option'];
$path = $_POST['path'];

$result = array();

// Delete the path in case we have spaces in it
$path = str_replace(' ', '\\ ', $path); 

// Check which option user chose
switch ($page) {
	case 'ls':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/ls.pl ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	break;
	case 'more':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/more.pl ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	break;
    case 'wc':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/wc.pl ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	break;
	case 'rm':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/rm.pl ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	break;
	case 'find':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/findv2.pl ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	break;
	case 'cp':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/cp.pl -R ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	break;
	case 'mv':
    	$result = shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/cp.pl -R ' . $option . ' ' . $path . '" -s /bin/sh ' .  $performing_user);
    	shell_exec('sudo su -c "perl /var/www/html/LinuxSystem/perl/rm.pl -r ' . $option . '" -s /bin/sh ' .  $performing_user);
    	break;
} 


echo ($result);
