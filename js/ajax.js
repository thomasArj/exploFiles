/*
    - Indentation
    - Rajout de la fonction setInterval
    - Suppression des console.log
*/
function dirname(path) {
    return path.replace(/\\/g,'/').replace(/\/[^\/]*$/, '');;
}
function clickup() {
    var rep = $("#chemin").val();
    var repup = dirname(rep);
    $("#chemin").val(repup);
    $.ajax({
        url: 'php/fonction1.php',
        data: {action: repup},
        type: 'post',
        success: function(output) {
            $("#arbo").html(output);
            var chemin = $("#chemin").val();
            $('.clique').click(function(){
                var foldername = $(this).text();
                loadDir(repup + '/' + foldername);
            });
        }
    });
}
//Fonction Arbo
function loadDir(rep) {
    $("#chemin").val(rep);
    $.ajax({
        url: 'php/fonction1.php',
        data: {action: rep},
        type: 'post',
        success: function(output) {
            $("#arbo").html(output);
            $('.clique').click(function(){
                var foldername = $(this).text();
                loadDir(rep + '/' + foldername);
            });
        }
    });
}
//Fonction du bouton retour
$(document).ready(function(){
    $("#back").click(clickup);
        loadDir('/home');
        $('#chemin').change(function() {
            loadDir($("#chemin").val());
        });
});
//Fonction de l'heure
$(document).ready(function(){
    var callAjax = function getTime() {
        $.ajax ({ //
            url: 'php/dateheure.php',
            data: {action: '.footer'},
            type: 'post',
            success: function(output) {
                $("#date").html(output);
            }
        });
     }
     setInterval(callAjax,1000);
});
