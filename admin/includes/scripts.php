 <!-- Core -->
 <script src="../assets/bundles/libscripts.bundle.js"></script>
 <script src="../assets/bundles/vendorscripts.bundle.js"></script>

 <script src="../assets/bundles/c3.bundle.js"></script>
 <script src="../assets/bundles/jvectormap.bundle.js"></script>
 <!-- JVectorMap Plugin Js -->

 <script src="../assets/js/theme.js"></script>
 <script src="../assets/js/pages/index.js"></script>
 <!-- <script src="../assets/js/pages/todo-js.js"></script> -->

 <!-- previsualizar imagen a cargar -->
 <script>
// Obtener referencia al input y a la imagen
const $blog_portada = document.querySelector("#blog_portada"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$blog_portada.addEventListener("change", () => {
    // Los archivos seleccionados, pueden ser muchos o uno
    const archivos = $blog_portada.files;
    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
        $imagenPrevisualizacion.src = "";
        return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];
    // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);
    // Y a la fuente de la imagen le ponemos el objectURL
    $imagenPrevisualizacion.src = objectURL;
});
 </script>


<!-- Alertas -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#myButton').click(function() {
    // Realizar una solicitud AJAX al servidor
    $.ajax({
      url: '/admin/backend/galeria.php',
      type: 'POST',
      data: {action: 'upload'},
      success: function(response) {
        // Mostrar la alerta según la respuesta obtenida del servidor
        if (response === 'success') {
          alert('La foto se ha subido correctamente.');
        } else if (response === 'error') {
          alert('Ha ocurrido un error al subir el archivo, por favor reintente nuevamente.');
        } else if (response === 'warning') {
          alert('Por favor, seleccione una imagen para subir.');
        }
      },
      error: function(xhr, status, error) {
        console.error('Error en la solicitud. Estado: ' + status);
      }
    });
  });
});
</script>