<?PHP
 
$USER = $_POST['USER'];
$PASS = $_POST['PASS'];
$START_ON_MOUNT = $_POST['START_ON_MOUNT'];
$PLG_EXT = $_POST['PLG_EXT'];
$PLG_PASSWORD = $_POST['PLG_PASSWORD'];
$OVPNCHOOSE = $_POST['OVPNCHOOSE'];

$arguments = "";
$arguments .= "USER_NEW=\"$USER\"\n";
$arguments .= "PASS_NEW=\"$PASS\"\n";
$arguments .= "START_ON_MOUNT_NEW=\"$START_ON_MOUNT\"\n";
$arguments .= "PLG_EXT_NEW=\"$PLG_EXT\"\n";
$arguments .= "PLG_PASSWORD_NEW=\"$PLG_PASSWORD\"\n";
$arguments .= "OVPNCHOOSE_NEW=\"$OVPNCHOOSE\"\n";

echo "Please wait while updating configuration...";

$file = "/usr/local/emhttp/plugins/openvpnclient/openvpn.args";
file_put_contents($file, $arguments);
shell_exec("/etc/rc.d/rc.openvpnclient updatecfg");
?>

<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
