<?php
$MyHostName = $_SERVER ['HTTP_HOST'];
$MyScriptName = $_SERVER ['SCRIPT_NAME'];
echo $MyHostName.''.$MyScriptName;
echo "<br>";
include ('form.php');
?>
