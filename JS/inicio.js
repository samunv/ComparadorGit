window.addEventListener("DOMContentLoaded", function () {
    var imagenes = [
      "../img/iOS.png",
      "../img/PS4 OS.png",
      "../img/Ubuntu.png",
      "../img/WINDOWS.png",
    ];
  
    var carruselActivo = true; // Variable para ver si el carrusel está activo
  
    var indiceImagenActual = 0;
  
    var img = document.getElementById("foto-carrusel");
  
    // Función para cambiar la imagen del carrusel
    function cambiarImagen() {
      if (carruselActivo) {
        // Cambiamos la imagen a la del indice
        img.src = imagenes[indiceImagenActual];
  
        // Se actualiza el índice de la imagen actual
        indiceImagenActual++;
  
        // Si el índice es igual al tamaño del array, lo reiniciamos a 0
        if (indiceImagenActual == imagenes.length) {
          indiceImagenActual = 0;
        }
      }
    }
  
    // CambiarImagen cada 5 segundos
    setInterval(cambiarImagen, 5000);
  
    const modal = document.getElementById("ventana");
    const closeBtn = document.querySelector(".cerrar");
  
    modal.style.display = "block"; // Mostrar ventana al cargar la página
  
    closeBtn.addEventListener("click", function () {
      modal.style.display = "none";
    });
  
    const puntos = document.getElementById("puntos");
    const menu = document.getElementById("menu");
  
    let menuActivo = false;
  
    puntos.addEventListener("mouseover", function () {
      if (!menuActivo) {
        menu.style.display = "block";
        puntos.style.backgroundColor = "#ececf0";
        menuActivo = true;
      } else {
        menu.addEventListener("mouseleave", function () {
          menu.style.display = "none";
          menuActivo = false;
          puntos.style.backgroundColor = "";
        });
      }
    });
  
    seccionAndroid = document.getElementById("seccionAndroid");
    seccionOculta1 = document.getElementById("seccionAndroid-oculta");
  
    seccionIos = document.getElementById("seccioniOS");
    seccionOculta2 = document.getElementById("seccioniOS-oculta");
  
    btnAndroid = document.getElementById("btn-Android");
    btnOculto1 = document.getElementById("btnoculto1");
  
    btnIos = document.getElementById("btn-iOS");
    btnOculto2 = document.getElementById("btnoculto2");
  
    btnAndroid.addEventListener("click", function () {
      seccionAndroid.style.display = "none";
      seccionOculta1.style.display = "block";
    });
  
    btnIos.addEventListener("click", function () {
      seccionIos.style.display = "none";
      seccionOculta2.style.display = "block";
    });
  
    btnOculto1.addEventListener("click", function () {
      seccionAndroid.style.display = "flex";
      seccionOculta1.style.display = "none";
    });
  
    btnOculto2.addEventListener("click", function () {
      seccionIos.style.display = "flex";
      seccionOculta2.style.display = "none";
    });
  
    //Cambiar el color del fondo al hacer scroll hacia abajo
    window.addEventListener("scroll", function () {
      let body = document.querySelector("body");
      let posicionScroll = window.scrollY; //establezco posicionScroll con ScrollY de window
  
      if (posicionScroll > 200) {
        body.style.backgroundColor = "#ececf0";
      } else {
        body.style.backgroundColor = "White";
      }
    });
  });
  