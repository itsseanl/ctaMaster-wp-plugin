<?php 
header('Content-Type: application/json');
$bannerScript = fopen("banner.js", "w") or die('{"status": "unable to open file!"}');
$bannerText= $_POST['bannerText'];
$bannerTextColor = $_POST['bannerTextColor'];
$btnLink = $_POST['btnLink'];
$btnTxt = $_POST['btnText'];
$bannerColor = $_POST['bannerColor'];
$btnColor=$_POST['btnColor'];
$btnTextColor=$_POST['btnTextColor'];
$script = '
addElement();

function addElement() {
	var banner = document.createElement("div");
	banner.innerHTML = "<p style=\'margin:5px;color:'. $bannerTextColor .';\'>' .$bannerText . '</p><a href=\''. $btnLink.'\' style=\'text-decoration:none;padding:15px;margin:5px; margin-left:15px;cursor:pointer;display:flex;background-color:'. $btnColor .'; color:'. $btnTextColor .'\' class=\'btn\'>' . $btnTxt . '</a>";
	banner.id = "banner";
	banner.style.height = "auto";
	banner.style.maxHeight = "500px";
	banner.style.width = "100vw";
	banner.style.backgroundColor = "' . $bannerColor. '";
	banner.style.display = "flex";
    banner.style.justifyContent = "center";
    banner.style.alignItems="center";
	document.body.insertBefore(banner, document.body.firstChild);
}
';
fwrite($bannerScript, $script);
fclose($bannerScript);

echo '{"status":"ok"}';

