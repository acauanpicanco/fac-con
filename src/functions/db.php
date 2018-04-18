<?

//Charset
ini_set('default_charset','UTF-8');

//Banco de dados

$db = new mysqli('localhost', 'root', 'root', 'dev_faccon');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$db->set_charset("utf8");

?>