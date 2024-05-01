window.addEventListener("DOMContentLoaded", function () {
  const seccionPrincipal = document.getElementById("seccion-principal");

  let res; // Variable para almacenar la respuesta de la API

  // Realiza una solicitud a la API utilizando fetch
  fetch("/ComparadorGit/Controlador/paginainfocontrolador.php")
    .then((respuesta) => respuesta.json())
    .then((data) => {
      res = data; // Almacena la respuesta en la variable res
      console.log(res);
      imprimirContenedores(res);
    })
    .catch((error) => {
      console.error("Error al realizar la solicitud:", error);
    });

  function imprimirContenedores(datos) {
    let html = "";
    let contadorResultados = 0;

    for (let i = 0; i < datos.length; i++) {
      html += "<div class='contenedores'>";
      html += "<h3 id='nombre'>" + datos[i].nombre + "</h3>";
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
      contadorResultados++;
    }
    if (contadorResultados === 0) {
      //Cuando el contadorResultados sea igual que 0, imprimirá lo siguiente:

      html += "<div class='no-resultados'>";
      html += "<p>No se encontraron resultados</p>";
      html +=
        "<img src='../img/triste.png' width='100' height='100' id='img-no-resultados'/>";
      html += "</div>";
    }
    seccionPrincipal.innerHTML = html;
  }

  // BUSCADOR
  const buscador = document.getElementById("buscador");
  buscador.addEventListener("input", function () {
    const btnBuscar = document.getElementById("btn-buscar");
    btnBuscar.addEventListener("click", function () {
      //Buscar al hacer click en el icono de buscar
      buscar(res);
    });
  });

  function buscar(datos) {
    const textoEntrada = buscador.value.toLowerCase();

    // Buscar los datos comprobando que coincida el textoEntrada con el nombre de los SO

    const datosEncontrados = []; // Inicializamos como array vacío

    for (const sistemaOperativo of datos) {
      //datos es un array al que le asignamos a cada objeto la variable sistemaOperativo
      if (sistemaOperativo.nombre.toLowerCase().includes(textoEntrada)) {
        datosEncontrados.push(sistemaOperativo);
        //El método push sirve para añadir cada sistemaOperativo al array de datosEncontrados
      }
    }

    imprimirContenedores(datosEncontrados);
  }
});
