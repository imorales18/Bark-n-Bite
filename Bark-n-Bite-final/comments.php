<?php

function setComments($connection)
{
	if(isset($_POST['commentSubmit']))
	{
		$uid = $_POST['uid'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (uid, message) VALUES ('$uid', '$message')";
		$result = $connection->query($sql);
	}
}

function getComments($connection)
{
	$sql = "SELECT * FROM comments";
	$result = $connection->query($sql);
	while($row = $result->fetch_assoc())
	{
		echo $row['uid']."<br>";
		echo $row['message']."<br><br>";
	}
}