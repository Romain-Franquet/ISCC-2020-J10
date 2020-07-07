<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="connexion.php">
<html>
<title>Produit</title>
 

<head>
    <header>
    
</header>
</head>
<body>


<?php
function connect_to_database(){
$servername = "localhost" ; 
$username = "root";
$password = "root"; 
$databasename = "basetest01";

try {
$pdo = new PDO("mysql:$servername;dbname=$databasename", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected seccessfully";
return $pdo;
} catch (PDOException $e){
echo "Connection failed : ". $e->getMessage(); 

}



}


?>
<?php
$password = connect_to_database(); 
$query = $pdo->query("SELECT * FROM produit")->fetchAll();
var_dump($users);
foreach ($users as $user) {
    echo "<ul><li>$user['nom']. '<br/>'</li></ul>";
}

?>

</body>



<footer>
  




</footer>

</html> 