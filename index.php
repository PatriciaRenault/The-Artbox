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
    <!-----------header----------------------------->
    <?php include('header.php'); ?>

    <!----------import du tableau des oeuvres------->
    <?php include('oeuvres.php'); ?>
    
    <main>
        <div id="liste-oeuvres">
       
            <?php foreach($oeuvres as $oeuvre) : ?>

                <article class="oeuvre">

                    <!----------lien vers la page de l'article------------>
                    <a href="oeuvre.php?page=<?= $oeuvre['id']; ?>">

                        <!------------Affichage de l'article-------------->
                        <img src="<?= $oeuvre['image']; ?>" 
                            alt="<?= $oeuvre['titre']; ?>">
                        <h2>
                            <?= $oeuvre['titre']; ?>
                        </h2>
                        <p class="description">
                            <?= $oeuvre['artiste']; ?>
                        </p>

                    </a>

                </article>
            
            <?php endforeach ?>

        </div>
    </main>

    <!-----------footer--------->
    <?php include('footer.php'); ?>

</body>

</html>