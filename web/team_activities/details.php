<?php 
	try
	{
		$dbUrl = getenv('DATABASE_URL');

		$dbOpts = parse_url($dbUrl);
	
		$dbHost = $dbOpts["host"];
		$dbPort = $dbOpts["port"];
		$dbUser = $dbOpts["user"];
		$dbPassword = $dbOpts["pass"];
		$dbName = ltrim($dbOpts["path"],'/');

		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $exc)
	{
		echo 'Error!: ' . $exc->getMessage();
		die();
	}
	
	$id = $_GET['id'];
	echo $id;
	foreach ($db->query("SELECT * FROM public.scriptures WHERE id = '$id'") as $scripture)
	{
		$books = $scripture['book'];
		$chapter = $scripture['chapter'];
		$verse = $scripture['verse'];
		$content = $scripture['content'];
		echo "<p><b>$books $chapter:$verse</b></p><p>$content</p></br>";
	}
	
?>