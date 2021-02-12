function toggleSwitch(id)
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
			console.log(this.responseText);
		}
	};
	xhttp.open("POST", "sendRequests.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('command=update_device&deviceid=' + id +'&devicetype=light&state=' + state);
}
