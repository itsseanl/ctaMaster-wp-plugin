
addElement();

function addElement() {
	var banner = document.createElement("div");
	banner.innerHTML = "<p style='margin:5px;color:#5093f5;'>test</p><a href='test' style='text-decoration:none;padding:15px;margin:5px; margin-left:15px;cursor:pointer;display:flex;background-color:#f52825; color:#a7cdc3' class='btn'>test</a>";
	banner.id = "banner";
	banner.style.height = "auto";
	banner.style.maxHeight = "500px";
	banner.style.width = "100vw";
	banner.style.backgroundColor = "#8d971b";
	banner.style.display = "flex";
    banner.style.justifyContent = "center";
    banner.style.alignItems="center";
	document.body.insertBefore(banner, document.body.firstChild);
}
