var ft_list;
// var cookie = [];


function toDo()
{
	var todo = prompt("Please enter a new to-do");
	if (todo !="")
	{
		var node = document.createElement("LI");
		var textnode = document.createTextNode(todo);
		node.appendChild(textnode);
		document.getElementById("item").insertAdjacentElement('afterbegin', node);
	}
	var listItems = document.getElementsByTagName("li");
	for (var i = 0; i < listItems.length; i++)
	{
			listItems[i].onclick = function()
			{
				if(confirm("Are you sure you want to delete?"))
				{
					this.parentNode.removeChild(this);
					deleteCookie(this.innerHTML)
				}
			}
	}
	createCookie(todo, 1);
}

function createCookie (cvalue, exdays)
{
	var d = new Date();
 	d.setTime(d.getTime() + (exdays*24*60*60*1000));
 	var expires = "expires="+ d.toUTCString();
 	var str = cvalue + "=" + cvalue + ";" + expires + ";path=/";
 	document.cookie = str;
}

function deleteCookie(cvalue)
{
	cvalue = cvalue.substring(1);
	console.log(cvalue);
	console.log(cvalue.length);
	document.cookie.replace(cvalue + "=" + cvalue, " ")
	console.log(document.cookie);
}

function refresh()
{
	var name = "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
	var node = document.createElement("LI");
	var textnode = document.createTextNode(c.split("=")[0]);
	node.appendChild(textnode);
	document.getElementById("item").insertAdjacentElement('afterbegin', node);
}
var listItems = document.getElementsByTagName("li");
for (var i = 0; i < listItems.length; i++)
{
		listItems[i].onclick = function()
		{
			if(confirm("Are you sure you want to delete?"))
			{
				this.parentNode.removeChild(this);
				deleteCookie(this.innerHTML)
			}
		}
	}
}
