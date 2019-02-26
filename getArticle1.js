//appel de la fonction getEtudiants depuis le fichier html "etudiantsAvecAjax.php"

function getArticles(){

    //Recupération de la donnée introduite dans le input contenant l'id "data " du fichier html "etudiantsAvecAjax.php"
 
     var title=  document.getElementById("title").value;
     var content=  document.getElementById("content").value;
 
 
 
     var	xhr	=	new	XMLHttpRequest();	
 
     xhr.onreadystatechange	=	function() 
        {	
              if	(xhr.readyState	==	4	&&	xhr.status	==	200)    
                {	             
                    //version tableau json
                    var parent =document.getElementById('Affichage');
                    while (parent.firstChild)
                    {
                        parent.removeChild(parent.firstChild);
                    } 
                    var articleTab= JSON.parse(xhr.responseText);
                    
                    for (const [key,article] of Object.entries(articleTab))
                    {
                       // alert('ok');
                        var newarticle = document.createElement("span");
                        newarticle.innerHTML= +article.id + "---"+article.title+"---"+article.content+"---"+"<br>";
                        parent.insertBefore(newarticle,parent.firstChild);
                        // var parent =document.getElementById('Affichage');
                        parent.appendChild(newarticle);

                    }
                
                }	

        };	
 
 //Ouverture de la requete AJAX
 xhr.open('POST', 'controllers/articles.php');
 xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 
 
 //Envoi de la requête
     var data = 'title=' + title + '&content=' + content;
 
     xhr.send(data);
   
   // xhr.send();
 }
 
 