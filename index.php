<!--
    - Indentation
    - Rangement des dossiers et fichiers
    - Reprise du html
    - Reprise de bootstrap pour le responsive design
    - Deplacement du footer dans la balise body
 -->
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="Librairie/jquery.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <link rel="stylesheet" href="Librairie/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Explorateurs</title>
</head>
<body>
    <header class="header container-fluid">
        <div class="row input">
            <input type="text" class="input1 offset-1 col-5 col-md-6" id="chemin">
            <input type="button" value="Retour" class="input2 col-5 offset-md-1 col-md-2" id="back">
        </div>
    </header>
    <section class="section1 container-fluid">
        <div class="row">
            <div id="arbo" class="col-12 offset-md-3 col-md-6 text-center"></div>
        </div>
    </section>
    <footer class="footer container-fluid">
        <div id="date" class="text-center "></div>
    </footer>
</body>
</html>
