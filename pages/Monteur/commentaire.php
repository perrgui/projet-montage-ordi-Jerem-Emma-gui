<?php
// déclaration des variables
$sql= "SELECT * FROM Commentaires where id= $Commentaires " ;
$req= mysql_query ($sql) or die 
while ($data = mysql_fetch_assoc  //Lit une ligne de résultat MySQL dans un tableau associatif
($req));

{
    echo "<h1>{$data[" Titre"]}</h1>";
    echo "<p>{$data["Contenu"]}</p>";
echo "<p>.date ("j/n/y G:i", strtotime ($data["date"]))."</p>;
?>

<from action = "index.php" method = "post">
    idemployé: <input type= "text" name= "idemployé"/></br>
    contenu:<input type="text" name="date"></br> <textarea name="contenu"></textarea>
    <input type= "submit" value="envoyé"/>

<?php
require ".../index.php";
mysql_connect (DB_HOST, DB_LOGIN, DB_PASS);
extract ($_POST);
$sql= "INSERT INTO Commentaire (idemployé,contenu) VALUE (`$idemployé`, `date`, `contenu`)"
$req= mysql_query ($sql) or die .$sql.msql_error;





