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
		
	};
	xhttp.open("POST", "handleRequests.php", true);
	xhttp.send("DATA={'request':'update_device','device_data':{'" + id +"':'" + state + "'}");
}