<?php

require('../config.php');

require('../Model/article.php');

require('../helpers/database.php');

$title = $_POST['title'];
$content = $_POST['content'];

//recuperer les articles

$connec =getDbh();


//ecriture dans la base

$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("INSERT INTO articles (title, content) 
                    VALUES ('$title', '$content')");
$request->execute();

//Recupération depuis la base de donnée
function getAllArticles() {
    $connec =getDBH(DSN,USER,PASSWORD);

    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $request = $connec->prepare("SELECT * FROM articles;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_CLASS,'Article');
 }
 
  $articles = getAllArticles();

//var_dump($articles);

echo json_encode($articles);


 



