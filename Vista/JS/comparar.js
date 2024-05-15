window.addEventListener("DOMContentLoaded", function () {
  let liComparar = document.getElementById("li-comparar");
  liComparar.style.fontWeight = "bold";

  let seccionMoviles = document.getElementById("seccion-moviles");
  let seccionOrdenadores = document.getElementById("seccion-ordenadores");
  let seccionConsolas = document.getElementById("seccion-consolas");
  let seccionTv = document.getElementById("seccion-tv");
  let seccionCoches = document.getElementById("seccion-coches");

  let res; // Variable para almacenar la respuesta

  fetch("./../../Controlador/compararcontrolador.php")
    .then((respuesta) => respuesta.json())
    .then((data) => {
      res = data; // Almacena la respuesta en la variable res
      console.log(res);
      imprimirMoviles(res);
      imprimirOrdenadores(res);
      imprimirConsolas(res);
      imprimirTv(res);
      imprimirCoches(res);
      elegirSO(res, "Móviles");
      elegirSO(res, "Ordenadores");
      elegirSO(res, "Consola");
      elegirSO(res, "TV");
      elegirSO(res, "Coches");
    })
    .catch((error) => {
      console.error("Error al realizar la solicitud:", error);
    });

  function elegirSO(datos, dispositivo) {
    let seleccionados = []; // Array para guardar los dispositivos seleccionados
    let btnComparar = document.getElementById("btn-comparar-" + dispositivo);
    btnComparar.disabled = true;

    for (let i = 0; i < datos.length; i++) {
      if (datos[i].dispositivos === dispositivo) {
        let contenedor = document.getElementById("contenedor" + i);

        contenedor.addEventListener("click", function seleccionar() {
          if (seleccionados.includes(datos[i])) {
            // Si el so ya está seleccionado, lo deseleccionamos
            contenedor.style.borderWidth = "";
            contenedor.style.borderStyle = "";
            contenedor.style.borderColor = "";
            btnComparar.disabled = true;
            seleccionados = seleccionados.filter((so) => so !== datos[i]); // Eliminamos el dispositivo del array de seleccionados
          } else if (seleccionados.length < 2) {
            // Si aún no se han seleccionado dos so, seleccionamos este
            contenedor.style.borderWidth = "2px"; // Grosor del borde
            contenedor.style.borderStyle = "solid"; // Estilo del borde
            contenedor.style.borderColor = "#0071e3"; // Color del borde
            seleccionados.push(datos[i]); // Añadimos los datos al array de seleccionados
            btnComparar.disabled = true;
          } else {
            alert(
              "Solo se pueden elegir dos dispositivos. Deselecciona uno de los dispositivos elegidos."
            );
          }

          if (btnComparar.disabled) {
            desactivarBoton(btnComparar);
          }
          // Si no se han seleccionado dos so se vuelve al estilo del boton desactivado

          // Si se han seleccionado exactamente 2 so llamar a comparar

          if (seleccionados.length === 2) {
            btnComparar.disabled = false;
            if (!btnComparar.disabled) {
              activarBoton(btnComparar);
            }

            btnComparar.addEventListener("click", function () {
              comparar(seleccionados[0], seleccionados[1]);
            });
          }
        });
      }
    }
  }

  function desactivarBoton(btnComparar) {
    btnComparar.style.color = "";
    btnComparar.style.backgroundColor = "";
    btnComparar.style.border = "";
    btnComparar.style.borderRadius = "";
    btnComparar.style.padding = "";
    btnComparar.style.width = "";
    btnComparar.style.transition = "";
    btnComparar.style.cursor = "";
    btnComparar.style.fontSize = "";

    btnComparar.addEventListener("mouseover", function () {
      btnComparar.style.backgroundColor = "";
      btnComparar.style.color = "";
    });
  }

  function activarBoton(btnComparar) {
    btnComparar.style.color = "white";
    btnComparar.style.backgroundColor = "#0071e3";
    btnComparar.style.border = "1px solid #0071e3";
    btnComparar.style.borderRadius = "30px";
    btnComparar.style.padding = "10px 30px";
    btnComparar.style.width = "200px";
    btnComparar.style.transition = "all 0.5s ease";
    btnComparar.style.cursor = "pointer";
    btnComparar.style.fontSize = "18px";

    // Establecer el color de fondo al hacer hover
    btnComparar.addEventListener("mouseover", function () {
      btnComparar.style.backgroundColor = "transparent";
      btnComparar.style.color = "#0071e3";
    });
    btnComparar.addEventListener("mouseout", function () {
      btnComparar.style.backgroundColor = "#0071e3";
      btnComparar.style.color = "white";
    });
  }

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

  let ventanaComparacion = document.getElementById("ventana-comparacion");
  function comparar(so1, so2) {
    //10 Puntos por punto de seguridad:
    let seguridad1 = so1.seguridad * 15;
    let seguridad2 = so2.seguridad * 15;

    //0.5 puntos por cada millón de usuarios en la comunidad
    let comunidad1 = so1.comunidad * 0.5;
    let comunidad2 = so2.comunidad * 0.5;

    let total1 = seguridad1 + comunidad1;
    let total2 = seguridad2 + comunidad2;

    //10 puntos si el so es gratis
    let gratis1 = 0;
    let gratis2 = 0;
    if (so1.gratis === "Si") {
      gratis1 = 10;
      total1 += gratis1;
    } else {
      total1 += 0;
    }

    if (so2.gratis === "Si") {
      gratis2 = 10;
      total2 += gratis2;
    } else {
      total2 += 0;
    }

    let ganador = "";

    if (total1 > total2) {
      ganador = so1.nombre;
    } else if (total1 < total2) {
      ganador = so2.nombre;
    } else if (total1 == total2) {
      //console.log("empate");
    }

    imprimirComparacion(
      so1,
      so2,
      seguridad1,
      seguridad2,
      comunidad1,
      comunidad2,
      gratis1,
      gratis2,
      total1,
      total2,
      ganador
    );

    crearGraficas(so1, so2, total1, total2);
  }

  function crearGraficas(so1, so2, total1, total2) {
    const miGraficoCanvas = document.getElementById("grafico").getContext("2d");

    // Crear datasets
    const datasets = [
      {
        label: so1.nombre,
        data: [total1],
        borderColor: "#0071e3",
        backgroundColor: "#0071e3",
      },
      {
        label: so2.nombre,
        data: [total2],
        borderColor: "cyan",
        backgroundColor: "cyan",
      },
    ];

    //los datos del gráfico
    const datos = {
      labels: ["Puntos"],
      datasets: datasets,
    };

    // Configuración del gráfico
    const configuracion = {
      type: "bar",
      data: datos,
      options: {
        responsive: true,
        maintainAspectRatio: false,
      },
    };

    // Crear el gráfico
    new Chart(miGraficoCanvas, configuracion);
  }

  function imprimirComparacion(
    so1,
    so2,
    seguridad1,
    seguridad2,
    comunidad1,
    comunidad2,
    gratis1,
    gratis2,
    total1,
    total2,
    ganador
  ) {
    let html = "";

    html += "<h1>Ganador: " + ganador + "</h1>";

    //caja para todos los elementos
    html += "<div class='caja-general'>";

    //Caja para el primer SO
    html += "<div id='so1' class='cajas-so'>";
    html += "<h3>" + so1.nombre + "</h3>";
    html +=
      "<img src='" +
      so1.imagen +
      "' id='imagen1' class='imagenes' width='90' height='90'/>";
    html += "<ul>";
    html += "<li>Puntos de Seguridad: " + seguridad1 + "</li>";
    html += "<li>Puntos de Comunidad: " + comunidad1 + "</li>";
    html += "<li>Puntos por Estatus: " + gratis1 + "</li>";
    html += "</ul>";
    html += "<h3>Total de puntos: " + total1 + "</h3>";
    html += "</div>";

    //Caja para el segundo SO
    html += "<div id='so2' class='cajas-so'>";
    html += "<h3>" + so2.nombre + "</h3>";
    html +=
      "<img src='" +
      so2.imagen +
      "' id='imagen2' class='imagenes' width='90' height='90'/>";
    html += "<ul>";
    html += "<li>Puntos de Seguridad: " + seguridad2 + "</li>";
    html += "<li>Puntos de Comunidad: " + comunidad2 + "</li>";
    html += "<li>Puntos por Estatus: " + gratis2 + "</li>";
    html += "</ul>";
    html += "<h3>Total de puntos: " + total2 + "</h3>";
    html += "</div>";

    html +=
      "<div class='contenedor-canvas' width='400px' height='300px'><canvas id='grafico'></canvas></div>";
    html += "</div>";
    html += "<button id='btn-cerrar' type='button'>Cerrar</button>";

    ventanaComparacion.style.display = "flex";
    ventanaComparacion.innerHTML = html;

    //Al pulsar en cerrar, no se mostrará la ventana
    let btnCerrar = document.getElementById("btn-cerrar");
    btnCerrar.addEventListener("click", function () {
      ventanaComparacion.style.display = "none";
    });
  }

  // Hacer scroll en el carrusel con los botones
  var contenedor = document.getElementById("carrusel-dispositivos");
  var btnScrollDerecha = document.getElementById("btn-derecha");
  var btnScrollIzquierda = document.getElementById("btn-izquierda");

  btnScrollDerecha.addEventListener("click", function () {
    var scroll = contenedor.scrollLeft;
    var nuevaPosicion = scroll + 300;
    // Hacer un scroll suave
    contenedor.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  btnScrollIzquierda.addEventListener("click", function () {
    var scroll = contenedor.scrollLeft;
    var nuevaPosicion = scroll - 300;
    contenedor.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  var btnMovilesDer = document.getElementById("btn-derecha-moviles");
  var btnMovilesIzq = document.getElementById("btn-izquierda-moviles");

  btnMovilesDer.addEventListener("click", function () {
    var scroll = seccionMoviles.scrollLeft;
    var nuevaPosicion = scroll + 600;
    seccionMoviles.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  btnMovilesIzq.addEventListener("click", function () {
    var scroll = seccionMoviles.scrollLeft;
    var nuevaPosicion = scroll - 600;
    seccionMoviles.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  var btnOrdenadresDer = document.getElementById("btn-derecha-ordenadores");
  var btnOrdenadoresIzq = document.getElementById("btn-izquierda-ordenadores");

  btnOrdenadresDer.addEventListener("click", function () {
    var scroll = seccionOrdenadores.scrollLeft;
    var nuevaPosicion = scroll + 600;
    seccionOrdenadores.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  btnOrdenadoresIzq.addEventListener("click", function () {
    var scroll = seccionOrdenadores.scrollLeft;
    var nuevaPosicion = scroll - 600;
    seccionOrdenadores.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  var btnConsolasDer = document.getElementById("btn-derecha-consolas");
  var btnConsolasIzq = document.getElementById("btn-izquierda-consolas");

  btnConsolasDer.addEventListener("click", function () {
    var scroll = seccionConsolas.scrollLeft;
    var nuevaPosicion = scroll + 600;
    seccionConsolas.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  btnConsolasIzq.addEventListener("click", function () {
    var scroll = seccionConsolas.scrollLeft;
    var nuevaPosicion = scroll - 600;
    seccionConsolas.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  var btnTvDer = document.getElementById("btn-derecha-tv");
  var btnTvIzq = document.getElementById("btn-izquierda-tv");

  btnTvDer.addEventListener("click", function () {
    var scroll = seccionTv.scrollLeft;
    var nuevaPosicion = scroll + 600;
    seccionTv.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  btnTvIzq.addEventListener("click", function () {
    var scroll = seccionTv.scrollLeft;
    var nuevaPosicion = scroll - 600;
    seccionTv.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  var btnCochesDer = document.getElementById("btn-derecha-coches");
  var btnCochesIzq = document.getElementById("btn-izquierda-coches");

  btnCochesDer.addEventListener("click", function () {
    var scroll = seccionCoches.scrollLeft;
    var nuevaPosicion = scroll + 600;
    seccionCoches.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });

  btnCochesIzq.addEventListener("click", function () {
    var scroll = seccionCoches.scrollLeft;
    var nuevaPosicion = scroll - 600;
    seccionCoches.scrollTo({
      left: nuevaPosicion,
      behavior: "smooth",
    });
  });
});
