<?php  


define('server',"mysql:host=localhost;dbname=careGroup");
define('user',"root");
define('password',"");

try
{
    $connection  = new PDO(server,user,password);
    // echo "Data base successFully Connected";
}
catch(PDOException $error)
{
echo $error->getMessage();
}

?>