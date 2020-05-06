<?php
header('Content-Type: application/json');

$enable=$_POST['enable'];
$enableScript = fopen("enable.php", "w") or die('{"status": "unable to write banner.js!"}');
$script='
<?php
$enable='.$enable.';';

fwrite($enableScript, $script);
fclose($enableScript);
echo '{"status":" banner'.$enable.'"}';
