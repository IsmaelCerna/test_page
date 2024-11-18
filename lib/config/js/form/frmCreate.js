$(document).ready(function(){
    $('#guardar').click(function(){
        var datos = $('#frmUsuario').serialize();
        $.ajax({
            type:"POST",
            url:"insertar.php",
            data: datos,
            success:function(e){
                if(e==1){
                    alert("Agregado con exito");
                }else{
                    alert("Erro no se pudo");
                }
            }
        });

        return false;
});
});

<script src="lib/assets/js/jquery.min.js"></script>