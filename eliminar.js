function alerta_eliminar(codigo){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          mandar_php(codigo);
        }
      })
}

function mandar_php(codigo){
  parametros = { id: codigo };
  $.ajax({
    data: parametros,
    url: "eliminar.php",
    type: "POST",
    beforeSend: function(){},
    success: function(){
      Swal.fire("Deleted!", "Your file has been deleted.", "success").then((result) => {
        window.location.href = "consultarCitas.php"
      });
    },
  });
}