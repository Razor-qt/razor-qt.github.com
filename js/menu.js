// JavaScript Document

var timerId = 0;
var menus = {};

function showPopup2()
{
        alert('show');
}

function hidePopup2()
{
    alert('hide');
}

function showPopup(id)
{
	var popup = document.getElementById(id);
	if (popup)
	{
		clearTimeout(timerId);
	
		for(var i in menus) {
			if (i != id)
				doHidePopup(i);
		}
		popup.style.display = '';
		menus[id] = 1;
	}
}


function hidePopup(id)
{
	 timerId = setTimeout("doHidePopup('" + id + "');", 300);
}

function doHidePopup(id)
{
	timerId = 0;
	var popup = document.getElementById(id);
	if (popup)
	{
		popup.style.display = 'none';
	}
}
