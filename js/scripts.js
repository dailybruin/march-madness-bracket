function changeImage(id, a) {
    document.getElementById(id).src=a;
}

function squareToWide(a) {
    return a.replace("square","wide");
}

function updateDropdown(img1, id1, img2, id2) {
	var menu1 = document.getElementById(img1).src;
	var menu2 = document.getElementById(img2).src;
	
	menu1 = menu1.substring(menu1.lastIndexOf("/") + 1, menu1.lastIndexOf("square"));
	menu2 = menu2.substring(menu2.lastIndexOf("/") + 1, menu2.lastIndexOf("square"));
	
	document.getElementById(id1).innerHTML = menu1;
	document.getElementById(id2).innerHTML = menu2;
}