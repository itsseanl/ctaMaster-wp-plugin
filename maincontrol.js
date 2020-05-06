console.log("plugincontroller");
var addBanner = document.getElementById("addBanner");
var addPopUp = document.getElementById("addPopUp");
var previewText = document.getElementById("preview-text");
var previewBtn = document.getElementById("preview-btn");
var previewBanner = document.getElementById("banner");
var bannerText;
var bannerColor;
var bannerTextColor;
var buttonLink;
var btnLink;
var btnColor;
var btnTextColor;
var pagesDisplayed;

addBanner.addEventListener("click", newBanner);

function newBanner() {
	var addBanner = document.getElementById("add-banner");
	addBanner.classList.add("active");
}

function updateBanner(elem) {
	if (elem.id == "banner-text") {
		bannerText = elem.value;
		previewText.innerHTML = bannerText;
	}
	if (elem.id == "button-link") {
		btnLink = elem.value;
	}
	if (elem.id == "button-text") {
		btnText = elem.value;

		previewBtn.innerHTML = btnText;
	}
	if (elem.id == "bg-color") {
		bannerColor = elem.value;
		previewBanner.style.backgroundColor = bannerColor;
	}
	if (elem.id == "btn-color") {
		btnColor = elem.value;
		previewBtn.style.backgroundColor = btnColor;
	}
	if (elem.id == "btn-text-color") {
		btnTextColor = elem.value;
		previewBtn.style.color = btnTextColor;
	}
	if (elem.id == "banner-text-color") {
		previewText.style.color = elem.value;
		bannerTextColor = elem.value;
	}
	if (elem.id == "pages") {
		pagesDisplayed = elem.value;
	}
}

function disable(elem) {
	var enabled;
	if (elem.checked == true) {
		enabled = false;
	} else {
		enabled = true;
	}
	var src = document.getElementById("pluginSrc");

	jQuery(document).ready(function () {
		jQuery
			.ajax({
				url: `${src.innerHTML}writeToEnable.php`,
				type: "POST",
				dataType: "html",
				data: { enable: enabled },
			})
			.done(function (data) {
				alert(data);
			});
	});
}

function submitForm(e) {
	e.preventDefault();
	jQuery(document).ready(function () {
		var src = document.getElementById("pluginSrc");

		jQuery
			.ajax({
				url: `${src.innerHTML}writeToScript.php`,
				type: "POST",
				dataType: "html",
				data: {
					bannerText: bannerText,
					bannerTextColor: bannerTextColor,
					btnText: btnText,
					btnLink: btnLink,
					bannerColor: bannerColor,
					btnColor: btnColor,
					btnTextColor: btnTextColor,
					pagesDisplayed: pagesDisplayed,
				},
			})
			.done(function (data) {
				alert(data);
			});
	});
}
