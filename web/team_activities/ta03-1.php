<?php
$name = $_POST['name'];
$email = $_POST['email'];
$major = $_POST['major'];
$comments = $_POST['comments'];

echo "First name: " . $name . "<br>";
echo "Email: <a href='mailto:" . $email . "'>".$email."</a><br>";
echo "Major: ".$major."<br>";
echo "Comments: ".$comments."<br><br>";

$places = array( 'northamerica' => 'North America', 'southamerica' => 'South America', 'europe' => 'Europe', 'asia' => 'Asia', 'australia' => 'Australia', 'africa' => 'Africa', 'antarctica' => 'Antarctica');
echo "Places you've visited:<br>";
foreach ($places as $key => $value)
{
	if (isset($_POST[$key]))
	{
		echo $value . '<br>';
	}
}

?>