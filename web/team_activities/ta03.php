<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" action="./ta03-1.php">
<label>Name: </label>
<input type="text" name="name"/><br>
<label>Email: </label>
<input type="text" name="email"/><br><br>
<?php
$majors = array( "CS" =>"Computer Science", "WDD" => "Web Design and Development",
				 "CIT" => "Computer Information Technology", "CE" => "Computer Engineering");

foreach ($majors as $abrev => $name)
{
	echo '<input type="radio" name="major" value="'.$name.'">'.$name.'</input>';
}
?>
<br>
<input type="textarea" name="comments">Comments</input><br><br>
<label>Places you've Visited: </label><br>
<input type="checkbox" name="northamerica">North America</input>
<input type="checkbox" name="southamerica">South America</input>
<input type="checkbox" name="europe">Europe</input>
<input type="checkbox" name="asia">Asia</input>
<input type="checkbox" name="australia">Australia</input>
<input type="checkbox" name="africa">Africa</input>
<input type="checkbox" name="antarctica">Antarctica</input><br><br>
<input type="submit"/>
</form>
</body>
</html>
