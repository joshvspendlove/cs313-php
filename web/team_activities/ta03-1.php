<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$major = htmlspecialchars($_POST['major']);
$comments = htmlspecialchars($_POST['comments']);

echo "First name: " . $name . "<br>";
echo "Email: <a href='mailto:" . $email . "'>".$email."</a><br>";
echo "Major: ".$major."<br>";
echo "Comments: ".$comments."<br><br>";

$places = array( 'northamerica' => 'North America', 'southamerica' => 'South America', 'europe' => 'Europe', 'asia' => 'Asia', 'australia' => 'Australia', 'africa' => 'Africa', 'antarctica' => 'Antarctica');
echo "Places you've visited:<br>";
foreach ($places as $key => $value)
{
	if (isset(htmlspecialchars($_POST[$key])))
	{
		echo $value . '<br>';
	}
}

?>