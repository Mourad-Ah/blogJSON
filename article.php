
   
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout</title>
     <!-- <script src="getArticle.js"></script>  -->
    <script src="getArticle1.js"></script>

</head>
<body>
    <!-- <form action="./controllers/article.add.php" method="POST"> -->
    
        <label for="title">Title</label>
        <input id="title" type="text" name="title">

        <br>
        <br>  

        <label for="content">Content</label>
        <input id="content" type="text" name="content" style="border:solid 1px black; width:450px; height:200px;" maxlength="200">

        <br>
        <br> 

        <input onclick="getArticles()" type="submit" value="Ajouter">
        <input onclick="updateArticles()" type="submit" value="Update">

    <!-- </form> -->


    <div>
   <h3>Articles</h3>
   </div>
   <div id="Affichage" style="border:solid 1px black; width:850px; height:400px;">
      <!-- <div id="affichageTitle" style="border:solid 1px black; width:450px; height:400px;">
      </div> 
      <div id="affichageContent" style="border:solid 1px black; width:450px; height:400px;">
      </div>  -->

   </div>
</body>
</html>





</body>



</html>


