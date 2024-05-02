window.addEventListener("DOMContentLoaded", function () {
  let formularioRegistro = document.getElementById("formularioRegistro");

  formularioRegistro.addEventListener("submit", function (evento) {
    evento.preventDefault();

    let datos = new FormData(formularioRegistro);

    fetch("/ComparadorGit/Controlador/registrocontrolador.php", {
      method: "POST",
      body: datos,
    })
      .then((respuesta) => respuesta.json())
      .then((data) => {
        console.log(data);
        if (data.registro === "registrado") {
          window.location.href = "/ComparadorGit/login.php";
        }
      });
  });
});
