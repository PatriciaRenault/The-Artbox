<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<!---------header------------->
<?php include('header.php'); ?>

<!-- import du tableau de la page oeuvre.php -->
<?php include('oeuvres.php'); ?>

<main>

    <?php
    
        /*************verifie que la variable page existe */
        if (!isset($_GET['page']) )
        {
                echo('quelle page voulez vous afficher ?');
                return;
        }

        $page=$_GET['page'];

        /***********test si le numero de page est valide*********/
        if(intval($page)<=count( $oeuvres ) &&  is_numeric($page)) 
        {
    
    ?>
    <!----------Affichage de l'article---------------------->
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[intval($page)]['image']; ?>" 
                 alt="<?php echo $oeuvres[intval($page)]['titre']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1>
                <?php echo $oeuvres[intval($page)]['titre']; ?>
            </h1>
            <p class="description">
                <?php echo $oeuvres[intval($page)]['artiste']; ?>
            </p>
            <p class="description-complete">
                <?php echo $oeuvres[intval($page)]['description']; ?>
            </p>
        </div>
    </article>


    <?php
        }
        /**************Si c'est alphanumerique ou un nombre trop grand */
        else {
            echo "<br>";
            echo "<br>";
            echo "La page n'existe pas!! <br>";
            echo "<br>";
            echo "<br>";
        }
?>



</main>

 <!-----------footer--------->
 <?php include('footer.php'); ?>
 
</body>
</html>
