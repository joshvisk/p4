// JavaScript Document

function unhide(divID) {
    var item = document.getElementById(divID);
    if (item) {
      item.className=(item.className=='hidden')?'unhidden':'hidden';
    }
}
  
function hideUnhide(divID) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			var item = document.getElementById(divID);
		if (item) {
			item.className=(item.className=='hidden')?'unhidden':'hidden';
		}
	};
	xhttp.open("GET", "/recipe/create", true);
	xhttp.send();
}