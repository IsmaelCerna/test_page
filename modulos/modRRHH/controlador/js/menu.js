$(document).ready(function(){

    $("#main").load("load/main");

    $("#principal").click(function(e){
        e.preventDefault();
        cargando('Cargando...')
        $("#main").load("load/main", function() {
            swal.close();
        });
    });

    $("#usuarios").click(function(e){
        e.preventDefault();
        cargando('Cargando...')
        $("#main").load("load/bqUsuarios", function() {
            swal.close();
        });
    });

});