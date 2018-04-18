<?
session_start();

include("functions/core.php");

$id 	= intval($_POST['id']);
$item 	= $db->real_escape_string($_POST['item']);

$db->query("UPDATE ".$item." SET status = 3 WHERE id = $id");


?>