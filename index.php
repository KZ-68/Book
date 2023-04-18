<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <h1>Exercice 2 - POO</h1>
    
    <h4>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
    leurs auteurs respectifs.</h4>
    <p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un <br/>
    auteur. Un auteur comporte un nom et un prénom.</p>
    <p>Une méthode toString() sera appréciée dans chacune de vos classes.</p>
    <p>Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :</p>

    <h2>Résultat</h2>
    
    <?php
      
    spl_autoload_register(function ($class_name) {
        require 'classes/'. $class_name . '.php';
    });

    $author1 = new Author("Stephen", "King");   
    $book1 = new Book("Ca", 1986, 1138, 20, $author1);
    $book2 = new Book("Simetierre", 1983, 374, 15, $author1);
    $book3 = new Book("Le Fléau", 1978, 823, 14, $author1);
    $book4 = new Book("Shining", 1977, 447, 16, $author1);
    echo $author1;
    echo $author1->afficherBibliographie();
    
    ?>

</body>
</html>