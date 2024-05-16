window.addEventListener("DOMContentLoaded", function () {
  let seccionContenedores = document.getElementById("seccion-contenedores");
  let res; // Variable para almacenar la respuesta de la API

  // Realiza una solicitud a la API utilizando fetch
  fetch("/ComparadorGit/Controlador/panelcontrolador.php")
    .then((respuesta) => respuesta.json())
    .then((data) => {
      res = data; // Almacena la respuesta en la variable res
      console.log(res);
      imprimirContenedores(res);
      eliminar(res);
      actualizar(res);
    })
    .catch((error) => {
      console.error("Error al realizar la solicitud:", error);
    });

  function imprimirContenedores(datos) {
    let html = "";
    html += "<div class='contenedores' id='contenedor-subir'>";
    html += "<a href='subir.php'>";
    html +=
      "<img src='/ComparadorGit/Vista/img/foto-anadir-datos.png' alt='' height='350'>";
    html += "</a>";
    html += "</div>";

    for (let i = 0; i < datos.length; i++) {
      html += "<div class='contenedores' id='contenedor" + i + "'>";
      html += "<h3>" + datos[i].nombre + "</h3>";
      html += "<div id='info-detallada" + i + "' >";
      html += "<p>Desarrollador: " + datos[i].fabricante + "</p>";
      html += "<p>Arquitectura: " + datos[i].arquitectura + "</p>";
      html += "<p>Comunidad: " + datos[i].comunidad + " Mill.</p>";
      html += "<p>Seguridad: " + datos[i].seguridad + "</p>";
      html += "<p>Versión: " + datos[i].version + "</p>";
      html += "<p>Dispositivos: " + datos[i].dispositivos + "</p>";
      html += "<p>Gratis: " + datos[i].gratis + "</p>";
      html += "</div>";
      html +=
        "<img src='" +
        datos[i].imagen +
        "' id='imagen" +
        i +
        "' class='imagenes' width='90' height='90'/>";
      html += "<div class='contenedor-editar'>";
      html +=
        "<div class='actualizar' id='" +
        datos[i].idSO +
        "'><img src='../img/cuadrado-de-la-pluma.png' alt='' width='30' height='30' title='editar'></div>";
      html +=
        "<div class='eliminar'><img id='" +
        datos[i].nombre +
        "' src='../img/borrar.png' alt='' width='30' height='30' title='eliminar'></div>";
      html += "</div>";
      html += "</div>";
    }
    seccionContenedores.innerHTML = html;
  }

  function eliminar(datos) {
    let ventanaEliminar = document.getElementById("ventana-eliminar-oculta");
    let btnCancelar = document.getElementById("btn-cancelar");
    let overlay = document.getElementById("overlay");
    for (let i = 0; i < datos.length; i++) {
      let iconoEliminar = document.getElementById(datos[i].nombre);

      let imprimirNombre = document.getElementById("nombre-del-so");

      iconoEliminar.addEventListener("click", function (e) {
        ventanaEliminar.style.display = "flex";
        overlay.style.display = "block";

        console.log(e.target, e.target.id);

        imprimirNombre.innerHTML = "" + e.target.id;

        peticionEliminar(e.target.id);
      });
    }

    btnCancelar.addEventListener("click", function () {
      ventanaEliminar.style.display = "none";
      overlay.style.display = "none";
    });
  }

  function peticionEliminar(nombreSO) {
    let btnEliminar = document.getElementById("btn-eliminar");

    btnEliminar.addEventListener("click", function () {
      console.log("datos: ");
      fetch(
        "./../../Controlador/eliminarcontrolador.php?nombre=" + nombreSO
      ).then((respuesta) => {
        respuesta.json();
        console.log(respuesta);
        window.location.href = "paneldecontrol.php";
      });
    });
  }

  function actualizar(datos) {
    for (let i = 0; i < datos.length; i++) {
      let btnActualizar = document.getElementById(datos[i].idSO);
      btnActualizar.addEventListener("click", function () {
        console.log(datos[i].idSO);
        window.location.href =
          "actualizar.php?idSO=" +
          datos[i].idSO +
          "&nombre=" +
          datos[i].nombre +
          "&arquitectura=" +
          datos[i].arquitectura +
          "&fabricante=" +
          datos[i].fabricante +
          "&dispositivos=" +
          datos[i].dispositivos +
          "&imagen=" +
          datos[i].imagen +
          "&gratis=" +
          datos[i].gratis +
          "";
      });
    }
  }
});
