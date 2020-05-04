
addElement();

function addElement() {
	var banner = document.createElement("div");
	banner.innerHTML = "<p style='margin:5px;color:#f4fff6;'>This is my custom banner!</p><a href='https://itsseanl.com' style='text-decoration:none;padding:15px;margin:5px; margin-left:15px;cursor:pointer;display:flex;background-color:#373736; color:#fffbf8' class='btn'>Check out my website :)</a>";
	banner.id = "banner";
	banner.style.height = "auto";
	banner.style.maxHeight = "500px";
	banner.style.width = "100vw";
	banner.style.backgroundColor = "#377a97";
	banner.style.display = "flex";
    banner.style.justifyContent = "center";
    banner.style.alignItems="center";
	document.body.insertBefore(banner, document.body.firstChild);
}
