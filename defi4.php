<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Calcule l'aire d'un réctangle </p>
    <div class="Air">
        <form method="GET">
        <input type="number" name="longeur">
        <input type="number" name="largeur">
        <button type="submit">clique ici </button>

        <?php

        
     
           if(isset($_GET['longeur']) && isset($_GET['largeur']) && !empty($_GET['longeur']) && !empty($_GET['largeur'])) {
            $resultat=$_GET['longeur']*$_GET['largeur']. "<br>";
            echo $resultat;
           }
           else {
               echo 'Merci de remplire le champs';
           }

        ?>
       
       </form>
    </div>
</body>
</html>