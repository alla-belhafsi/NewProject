<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../public/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
    
        <?php if ($showFormFilled) { ?>
        <h1 class="title"><?= $paramTitle ?></h1><br>
        <!-- Formulaire prérempli pour la modification -->
        <form action="index.php?action=<?= $action ?>&id=<?= $_GET['id'] ?>" method="POST">
        
            <label for="prenom">Prénom :
                <input type="text" id="prenom" name="prenom" value="<?= $value['prenom'] ?>">
            </label><br><br>

            <label for="nom">Nom :
                <input type="text" id="nom" name="nom" value="<?= $value['nom'] ?>">
            </label><br><br>
        
            <label for="dateNaissance">Date de naissance :
                <input type="date" id="dateNaissance" name="dateNaissance" value="<?= date('Y-m-d', strtotime($value['dateNaissance'])) ?>">
            </label><br><br>
        
            <label for="sexe">Sexe :
                <input type="text" id="sexe" name="sexe" value="<?= $value['sexe'] ?>">
            </label><br><br>
            
            <label>
                <?= $button ?>
                
            </label>
            
        </form>        
           <?php } elseif ($showFormBlank) { ?>
            <h1 class="title"><?= $paramTitle ?></h1><br>
            <!-- Formulaire vide pour ajouter une personne (réalisateur ou acteur) -->
            <form action="index.php?action=<?= $action ?>" method="POST">
            
                <label for="prenom">Prénom :
                    <input type="text" id="prenom" name="prenom" value="">
                </label><br><br>
    
                <label for="nom">Nom :
                    <input type="text" id="nom" name="nom" value="">
                </label><br><br>
            
                <label for="dateNaissance">Date de naissance :
                    <input type="date" id="dateNaissance" name="dateNaissance" value="">
                </label><br><br>
            
                <label for="sexe">Sexe :
                    <input type="text" id="sexe" name="sexe" value="">
                </label><br><br>
                
                <label>
                    <input type="submit" name= "ajouter" value="Ajouter">
                </label>
            
            </form>
          <?php } ?>
        <?= $query ?>
        <script src="public/js/script.js"></script>
        
        <?php
        
        $showIconMenu = false;
        
        $tabTitle = "Paramètres";
        
        $title = "";
        
        $counter = "";
        
        $list = "";

        $query = ob_get_clean();
        require_once "template.php";
        ?>
        </body>
        </html>