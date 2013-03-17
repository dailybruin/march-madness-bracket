function changeImage(id, a) {
    document.getElementById(id).src=a;
}

function squareToWide(a) {
    return a.replace("square","wide");
}

function getNameFromURL(img) {
	var imgurl = document.getElementById(img).src;
	return imgurl.substring(imgurl.lastIndexOf("/") + 1, imgurl.lastIndexOf("square"));
}

function getInnerImage() {
	return this.getElementsByTagName("img")[0].src;
	
}

