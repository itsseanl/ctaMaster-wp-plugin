
addElement();

function addElement() {
	var banner = document.createElement("div");
	banner.innerHTML = "<p style='margin:5px;color:#f3f6f4;'>your banner text goes here</p><a href='https://itsseanl.com' style='text-decoration:none;padding:15px;margin:5px; margin-left:15px;cursor:pointer;display:flex;background-color:#990000; color:#fff2cc' class='btn'>Banner Button</a>";
	banner.id = "banner";
	banner.style.height = "auto";
	banner.style.maxHeight = "500px";
	banner.style.width = "100vw";
	banner.style.backgroundColor = "#8fce00";
	banner.style.display = "flex";
    banner.style.justifyContent = "center";
    banner.style.alignItems="center";
	document.body.insertBefore(banner, document.body.firstChild);
}
