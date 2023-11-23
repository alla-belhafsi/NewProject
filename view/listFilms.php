<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">

    
</head>
<body>
<?php ob_start(); 

$titre = "La liste des films";

$type = "<p> Il y a ".$requete->rowCount()." Films</p>";

$liste = "
<table>
    <thead>
        <tr class='column'>
            <th class='column'>Titre</th>
            <th class='column'>Réalisateur</th>
            <th class='column'>Durée</th>
            <th class='column'>Date de Sortie</th>
        </tr>
    </thead>
    <tbody>";
        foreach ($requete->fetchAll() as $film) { 
            $liste .= "
            <tr>
                <td class='column'>".$film['titre']."</td>
                <td class='column'>".$film['realisateur']."</td>
                <td class='tableCenter'>".$film['dureeHeure']."</td>
                <td class='tableCenter'>".$film['dateSortie']."</td>
            </tr>";
        }
$liste .= "</tbody>
</table>";

$requete = ob_get_clean();

require_once "template.php";
?>
</body>
</html>