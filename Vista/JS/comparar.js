window.addEventListener("DOMContentLoaded", function () {
  let seccionMoviles = document.getElementById("seccion-moviles");
  let seccionOrdenadores = document.getElementById("seccion-ordenadores");
  let seccionConsolas = document.getElementById("seccion-consolas");
  let seccionTv = document.getElementById("seccion-tv");
  let seccionCoches = document.getElementById("seccion-coches");

  let res; // Variable para almacenar la respuesta de la API

  // Realiza una solicitud a la API utilizando fetch
  fetch("/ComparadorGit/Controlador/paginainfocontrolador.php")
    .then((respuesta) => respuesta.json())
    .then((data) => {
      res = data; // Almacena la respuesta en la variable res
      console.log(res);
      imprimirMoviles(res);
      imprimirOrdenadores(res);
      imprimirConsolas(res);
      imprimirTv(res);
      imprimirCoches(res);
    })
    .catch((error) => {
      console.error("Error al realizar la solicitud:", error);
    });

  function imprimirMoviles(datos) {
    let html = "";

    for (let i = 0; i < datos.length; i++) {
      if (datos[i].dispositivos === "Móviles") {
        html += "<div class='contenedores' id='contenedor" + i + "'>";
        html += "<h3>" + datos[i].nombre + "</h3>";
        html += "<div id='info-detallada" + i + "'>";
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
        html +=
          "<div id='comentario" +
          i +
          "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
        html += "</div>";
      }
    }

    seccionMoviles.innerHTML = html;
  }

  function imprimirOrdenadores(datos) {
    let html = "";

    for (let i = 0; i < datos.length; i++) {
      if (datos[i].dispositivos === "Ordenadores") {
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
        html +=
          "<div id='comentario" +
          i +
          "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
        html += "</div>";
      }
    }

    seccionOrdenadores.innerHTML = html;
  }

  function imprimirConsolas(datos) {
    let html = "";

    for (let i = 0; i < datos.length; i++) {
      if (datos[i].dispositivos === "Consola") {
        html += "<div class='contenedores' id='contenedor" + i + "'>";
        html += "<h3>" + datos[i].nombre + "</h3>";
        html += "<div id='info-detallada" + i + "' ";
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
        html +=
          "<div id='comentario" +
          i +
          "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
        html += "</div>";
      }
    }

    seccionConsolas.innerHTML = html;
  }

  function imprimirTv(datos) {
    let html = "";

    for (let i = 0; i < datos.length; i++) {
      if (datos[i].dispositivos === "TV") {
        html += "<div class='contenedores' id='contenedor" + i + "'>";
        html += "<h3>" + datos[i].nombre + "</h3>";
        html += "<div id='info-detallada" + i + "'>";
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
        html +=
          "<div id='comentario" +
          i +
          "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
        html += "</div>";
      }
    }

    seccionTv.innerHTML = html;
  }

  function imprimirCoches(datos) {
    let html = "";

    for (let i = 0; i < datos.length; i++) {
      if (datos[i].dispositivos === "Coches") {
        html += "<div class='contenedores' id='contenedor" + i + "'>";
        html += "<h3>" + datos[i].nombre + "</h3>";
        html += "<div id='info-detallada" + i + "'>";
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
        html +=
          "<div id='comentario" +
          i +
          "' class='comentarios'><img src='../img/comentario-alt.png' alt='' width='25' height='25' title='comentarios'></div>";
        html += "</div>";
      }
    }

    seccionCoches.innerHTML = html;
  }

  //Redireccionar a la página de paginainfo.php al pulsar en el buscador
  const buscador = document.getElementById("buscador");

  buscador.addEventListener("click", function () {
    window.location.href = "../VistaUsuario/paginainfo.php";
  });

  var contenedor = document.getElementById("carrusel-dispositivos");
  var btnScrollDerecha = document.getElementById("btn-derecha");

  btnScrollDerecha.addEventListener("click", function () {
    // Desplaza el scroll horizontalmente hacia la derecha
    contenedor.scrollLeft += 200; // Cambiar el valor según sea necesario
  });
});
