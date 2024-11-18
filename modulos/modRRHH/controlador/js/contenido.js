$(document).ready(function(){
  
    $("#crearUsuario").click(function(){
      cargarFormulario();
    })
    $("#regresar").click(function(){
      regresar();
  })
  });

  function cargarFormulario() {
      cargando('Cargando Contenido...')
      $("#main").load("load/formularios/agregar/usuarios", function() {
          swal.close();
      });

      
  }
    function regresar() {
      cargando('Cargando Contenido...')
      $("#main").load("load/bqUsuarios", function() {
          swal.close();
      });
  }

