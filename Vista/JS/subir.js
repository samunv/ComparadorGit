window.addEventListener("DOMContentLoaded", function () {
    let formulario = document.getElementById("formulario-subida");
  
    formulario.addEventListener("submit", function (evento) {
      evento.preventDefault();
  
      let datos = new FormData(formulario);

  
      fetch("./../../Controlador/subircontrolador.php", {
        method: "POST",
        body: datos,
      })
        .then((respuesta) => respuesta.json())
        .then((data) => {
          console.log(data);
          alert(data); 
          window.location.href = "./../VistaUsuario/paneldecontrol.php"; 

          

  
        });
    });
  });
  