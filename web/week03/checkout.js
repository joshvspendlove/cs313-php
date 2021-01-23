function validateForm()
{
	var needed_info = []
	var count = 0
	var checkout = document.forms["checkoutinfo"];
	var name = checkout["name"].value;
	var streetaddr = checkout["street-address"].value;
	var city = checkout["city"].value;
	var state = checkout["state"].value;
	var zipcode = checkout["zipcode"].value;
	
	if (name == "")
	{
		count = needed_info.push("Full Name");
	}
	
	if (streetaddr == "")
	{
		count = needed_info.push("Street Address");
	}
	
	if (city == "")
	{
		count = needed_info.push("City");
	}
	
	if (state == "")
	{
		count = needed_info.push("State");
	}
	
	if (zipcode == "")
	{
		count = needed_info.push("Zipcode");
	}
	
	if (count != 0)
	{
		var missing = "";
		var item = needed_info.shift();
		while (item != null)
		{
			missing += item + "\n";
			item = needed_info.shift();
		}
		alert("The following fields are required:\n\n" + missing);
		
		return false;
	}
}