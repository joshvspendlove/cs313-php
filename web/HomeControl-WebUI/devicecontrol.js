function toggleLight(id)
{
	var xhttp = new XMLHttpRequest();
	var state = null;
	if (document.getElementById(id).checked == true)
	{
		state = 'On';
	}
	else
	{
		state = 'Off';
	}
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById('lightstate' +id).innerHTML = this.responseText;
		}
	};
	xhttp.open("POST", "sendRequests.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('DATA=update_device&deviceid=' + id +'&devicetype=light&state=' + state);
}

function toggleLock(id)
{
	var xhttp = new XMLHttpRequest();
	var state = null;
	if (document.getElementById(id).checked == true)
	{
		state = 'Locked';
	}
	else
	{
		state = 'Unlocked';
	}
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById('lockstate' +id).innerHTML = this.responseText;
		}
	};
	xhttp.open("POST", "sendRequests.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('DATA=update_device&deviceid=' + id +'&devicetype=lock&state=' + state);
}