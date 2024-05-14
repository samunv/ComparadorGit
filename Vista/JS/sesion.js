window.addEventListener("DOMContentLoaded", function () {
  // Obtener el nombre del usuario que ha iniciado sesión
  var nombreUsuario = sessionStorage.getItem("nombreUsuario");
  var permisosAdmin = sessionStorage.getItem("permisosAdmin");

  let iconoUsuario = document.getElementById("icono-usuario"); 

  // Mostrar el nombre de usuario en el HTML
  let nombreUsuarioHtml = document.getElementById("nombre-usuario");
  nombreUsuarioHtml.innerHTML = nombreUsuario;

  let pestanaSesion = document.getElementById("pestana-cerrar-sesion");
  let pestanaActiva = false;

  let cajaSesion = document.getElementById("sesionusuario");
  let enlacePanelOculto = document.getElementById("enlace-panel-oculto");

  enlacePanelOculto.style.display = "none";

  if (permisosAdmin === "1") {
    enlacePanelOculto.style.display = "block"; 
    iconoUsuario.src = "/ComparadorGit/Vista/img/alt-administrador.png"; 
  } else if(permisosAdmin !== "1"){
    enlacePanelOculto.style.display = "none";
  }

  cajaSesion.addEventListener("click", function () {
    if (!pestanaActiva) {
      pestanaSesion.style.display = "flex";
      pestanaActiva = true;
    } else if (pestanaActiva) {
      pestanaSesion.style.display = "none";
      pestanaActiva = false;
    }
  });

  let cerrarSesion = document.getElementById("cerrar-sesion");

  cerrarSesion.addEventListener("click", function () {
    // Confirmar si el usuario realmente quiere cerrar la sesión
    if (confirm("¿Estás seguro de que quieres cerrar la sesión?")) {
      cerrar();
    }
  });

  function cerrar() {
    // verificar si el nombre de usuario existe en sessionStorage
    if (sessionStorage.getItem("nombreUsuario")) {
      // eliminar el nombre de usuario
      sessionStorage.removeItem("nombreUsuario");
      // eliminar los permisos de admin
      sessionStorage.removeItem("permisosAdmin");
      // limpiar el html del nombre del usuario
      nombreUsuarioHtml.innerHTML = "";
      window.location.href = "/ComparadorGit/login.php";

      console.log("Sesión cerrada");
    } else {
      console.log("No se encontró un nombre de usuario en la sesión");
    }
  }
});
