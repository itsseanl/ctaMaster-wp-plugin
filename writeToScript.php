<?php 
header('Content-Type: application/json');
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
$bannerScript = fopen("banner.js", "w") or die('{"status": "unable to write banner.js!"}');
fwrite($bannerScript, $script);
fclose($bannerScript);

$pagesDisplayed = $_POST['pagesDisplayed'];
$theDisplay = 'is_page('.$pagesDisplayed.')';
if ($pagesDisplayed == "all"){
	$theDisplay = "is_page() || is_front_page()";
}

$controllerScript = fopen("controller.php", "w") or die('{"status": unable to write controller.php!"}');
$script = '
<?php
if (' . $theDisplay . '){
	add_action( "wp_footer", "ctaBannerScript" );

	function ctaBannerScript() {
		wp_enqueue_script( "script", plugins_url( "/banner.js" , __FILE__ ) );
	}

}';

fwrite($controllerScript, $script);
fclose($controllerScript);
echo '{"status":"Banner Created"}';

