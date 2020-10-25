<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 03</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between mb-3">

            <div class="logo-acs"><img
                    src="https://www.accesscodeschool.fr/wp-content/uploads/2018/10/logo_acs_noir.png"
                    style="max-height: 66px; max-width: 200px;" />
            </div>


            <div class="logo-ofp"> <img src="https://www.onlineformapro.com/wp-content/uploads/2020/01/logo-03.svg"
                    style="max-height: 66px; max-width: 200px;" />
            </div>

        </div>

        <div class="jumbotron">
            <h1>Défi PHP - 03</h1>
            <p> Saisissez des valeurs dans les deux champs puis choisissez l'action à effectuer (additionner,
                soustraire, multiplier, diviser)<br />
                Une fois l'opérateur choisi affichez le résultat de votre calcul</p>
        </div>
        <div id="resultat" class="row">
            <div class="col-6">
                <form method="GET">
                    <div class="form-group">
                        <input type="number" placeholder="Saisissez la première valeur"
                          name="nombree"  class="form-control"></input><br />
                        <input type="number" placeholder="Saisissez la seconde valeur"
                          name="nombre"  class="form-control"></input><br />
                        <label  class="form-check-label" for="exampleCheck1">Choisissez un opérateur</label><br />
                        <button name="operation" value="add"class="btn btn-primary" name="addition">Addition</button>
                        <button name="operation" value="soustr"class="btn btn-primary" anme="soustraction">Soustraction</button>
                        <button name="operation" value="multi" class="btn btn-primary" name="mutiplication">Multiplication</button>
                        <button name="operation" value="divi"class="btn btn-primary" name="division">Division</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
            <?php 

/* On verifie que les variables sont bien dans l'url et ne sont pas vide */
if(isset( $_GET['nombree']) && isset($_GET['nombre']) &&isset($_GET['operation'])   && !empty($_GET['nombre']) && !empty($_GET['nombree']) && !empty($_GET['operation'])){

 
  
    if (($_GET["operation"]=="add")){
             /* On fait le calcul produit*/
             echo ($_GET['nombre']+$_GET['nombree']);
        
         /* On fait le calcul somme */

    }


    
    if (($_GET["operation"]=="soustr")){
        /* On fait le calcul produit*/
        echo ($_GET['nombree']-$_GET['nombre']);
   
    /* On fait le calcul somme */

}



if (($_GET["operation"]=="multi")){
    /* On fait le calcul produit*/
    echo ($_GET['nombree']*$_GET['nombre']);

/* On fait le calcul somme */

}



if (($_GET["operation"]=="divi")){
    /* On fait le calcul produit*/
    echo ($_GET['nombree']/$_GET['nombre']);

/* On fait le calcul somme */

}



    
}

?>
         </div>
        </div>
    </div>

</body>

</html>