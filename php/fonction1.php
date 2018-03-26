<!--
    - Indentation
    - Commentaire
    - Supprimer les fonctions inutiles
-->
<?php
    function explo($chemin){
        $repertoire = opendir($chemin); // variable pour ouvrir et recupérer un dossier
        $nomdefichier = readdir($repertoire); //variable pour lire l'entrée du dossier
        while($nomdefichier != false) {
            if($nomdefichier !='.' &&  $nomdefichier !='..') {
                echo '<div class="clique">';
                if (is_dir($chemin.'/'.$nomdefichier)) {
                    echo '<img style="width="20" height="20"" src="img/file.png"/>'; // on crée les images pour les dossiers
                } else {
                    echo '<img style="width="20" height="20"" src="img/file2.png"/>'; // on crée les images pour les fichiers
                }
                echo $nomdefichier.'<br>';
                echo '</div>';
            }
            $nomdefichier = readdir($repertoire);
        }
    }
    if (isset($_POST['action'])&&!empty($_POST['action'])) {
        $action=$_POST['action'];
        explo($action);
    }
?>
