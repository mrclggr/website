<?php
session_start();



$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$land = $_POST['land'];
$AGB = $_POST['AGB'];


$salt = "saltystring";
$pepper = "pepperystring";

$password_hash = hash('sha256', $salt . $password . $pepper);
//-----------------------------------------------------------------------------

/*
$target_dir = 'uploads/';

$target_file = $target_dir . basename($_FILES['datei']['name']);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST['submit'])) {
  $check = getimagesize($_FILES['datei']['tmp_name']);
  if($check !== false) {
    echo "Die Datei ist ein Bild - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Die Datei ist kein Bild.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Die Datei existiert bereits.";
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Die Datei ist zu groß.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "Nur JPG-, JPEG-, PNG- und GIF-Dateien sind erlaubt.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Die Datei konnte nicht hochgeladen werden.";
} else {

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Die Datei ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " wurde erfolgreich hochgeladen.";
  } else {
    echo "Es gab einen Fehler beim Hochladen der Datei.";
  }
}
*/
//------------------------------------------------------------------------------------

/*
$csv_data = array($username, $email, $password_hash, $number,$land,$AGB);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $csv_data);
fclose($fp);
*/


$server = 'localhost';
$username = 'dummy';
$password = 'dummy123';
$database = 'cvm';
$connection = new mysqli($server, $username, $password, $database);
if(!$connection){
die('Verbindung nicht erfolgreich' . mysqli_connect_error());
}
echo ('Verbindung erfolgreich');

try{
$connection = new PDO("mysql:host=$server;dbname=$database",$username,
$password);
// EXCEPTION konfigurieren
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "INSERT INTO users (Name, Number, Hash, BL, AGB)
 VALUES ('$uname', '$number', '$password_hash', '$land', '$AGB')";
 $connection->exec($sql);
 echo ('Eintrag erfolgreich');
}
catch(PDOException $e)
 {
 echo ( 'Fehler: ' . $e->getMessage());
 }
$connection = null; // Verbindungsabbau
?>

mysqli_close($connection);



?>
