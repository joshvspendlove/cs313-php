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
	
	foreach ($db->query('SELECT * FROM public.scriptures') as $scripture)
	{
		echo '<p><b>' . $scripture['book'] . ' ' . $scripture['chapter'] . ':' . $scripture['verse'] . '</b> - "' . $scripture['content'] . '"';
		echo '<br/>';
	}

?>