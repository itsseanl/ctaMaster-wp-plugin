
addElement();

function addElement() {
	var banner = document.createElement("div");
	banner.innerHTML = "<p style='margin:5px;color:#fff2cc;'>Your banner text goes here</p><a href='https://itsseanl.com' style='text-decoration:none;padding:15px;margin:5px; margin-left:15px;cursor:pointer;display:flex;background-color:#444444; color:#8fce00' class='btn'>itsseanl</a>";
	banner.id = "banner";
	banner.style.height = "auto";
	banner.style.maxHeight = "500px";
	banner.style.width = "100vw";
	banner.style.backgroundColor = "#2986cc";
	banner.style.display = "flex";
    banner.style.justifyContent = "center";
    banner.style.alignItems="center";
	document.body.insertBefore(banner, document.body.firstChild);
}
