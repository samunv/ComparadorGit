window.addEventListener("DOMContentLoaded", function () {
  let formulario = document.getElementById("formulario");
  let alerta = document.getElementById("alerta");
  let btnAlerta = document.getElementById("btn-alerta");

  formulario.addEventListener("submit", function (evento) {
    evento.preventDefault();

    let datos = new FormData(formulario);

    //console.log(datos.get("nombre"));

    fetch("/ComparadorGit/Controlador/logincontrolador.php", {
      method: "POST",
      body: datos,
    })
      .then((respuesta) => respuesta.json())
      .then((data) => {
        console.log(data);

        if (data.error) {
          alerta.style.display = "flex";
          btnAlerta.addEventListener("click", function () {
            alerta.style.display = "none";
          });
        } else {
          if (data.usuario[0].admin === "1") {
            //Entrar como administrador si el campo admin vale 1
            window.location.href =
              "/ComparadorGit/Vista/VistaUsuario/paneldecontrol.php";
          } else {
            window.location.href =
              "/ComparadorGit/Vista/VistaUsuario/inicio.php";
          }
        }
      });
  });
});
