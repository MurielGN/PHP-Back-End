/**
 * Funciones auxiliares de javascripts 
 */
function confirmarBorrar(nombre,id){
  if (confirm("¿Quieres eliminar el usuario:  "+nombre+"?"))
  {
   document.location.href="?orden=Borrar&id="+id;
  }
}

function confirmarTerminar(){
  if (!confirm("¿Quieres terminar?"))
      document.forms[0].elements[1].value = "";
  {
   
  }
}