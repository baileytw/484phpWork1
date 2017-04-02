<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=calendar;charset=utf8', 'root', 'Twspike1994?');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
