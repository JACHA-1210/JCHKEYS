var imgCentral = document.getElementById("imgCentral");
var thumbnails = document.getElementById("thumbnails");
var botonIzq = document.getElementById("izq");
var botonDer = document.getElementById("der");

var imagenes = [
    "Imagenes/1.jpg",
    "Imagenes/2.jpg",
    "Imagenes/3.jpg",
    "Imagenes/4.jpg",
    "Imagenes/5.jpg",
    "Imagenes/6.jpg"
];

var indiceActual = 0;

imgCentral.src = imagenes[indiceActual];

function mostrarImagen(imagen) {
  var indice = Array.prototype.indexOf.call(imagen.parentNode.children, imagen);
  var imgCentral = document.getElementById("imgCentral");
  imgCentral.src = imagenes[indice];
}


function imagenAnterior() {
    var imgCentral = document.getElementById("imgCentral");
    var miniaturas = document.getElementById("thumbnails").getElementsByTagName("img");
  
    // Buscar la miniatura seleccionada
    var indiceSeleccionado = -1;
    for (var i = 0; i < miniaturas.length; i++) {
      if (miniaturas[i].classList.contains("seleccionada")) {
        indiceSeleccionado = i;
        break;
      }
    }
  
    // Si no hay ninguna miniatura seleccionada, seleccionar la primera
    if (indiceSeleccionado === -1) {
      miniaturas[0].classList.add("seleccionada");


      imgCentral.src = imagenes[0];
      return;
    }
  
    // Si la miniatura seleccionada es la primera, ocultar la flecha izquierda
    if (indiceSeleccionado === 0) {
      miniaturas[0].classList.remove("seleccionada");

      if (indiceSeleccionado === 1) {
        document.getElementById("izq").style.display = "none";
      }

      imgCentral.src = imagenes[0];
      document.getElementById("izq").style.display = "none";
      return;
    } else {
      // Seleccionar la miniatura anterior
      miniaturas[indiceSeleccionado].classList.remove("seleccionada");
      miniaturas[indiceSeleccionado - 1].classList.add("seleccionada");
      imgCentral.src = imagenes[indiceSeleccionado - 1];
      if (indiceSeleccionado === 1) {
        document.getElementById("izq").style.display = "none";
      }
    }
  
    // Mostrar la flecha derecha
    document.getElementById("der").style.display = "block";
  }

function imagenSiguiente() {
    var imgCentral = document.getElementById("imgCentral");
    var miniaturas = document.getElementById("thumbnails").getElementsByTagName("img");
  
    // Buscar la miniatura seleccionada
    var indiceSeleccionado = -1;
    for (var i = 0; i < miniaturas.length; i++) {
      if (miniaturas[i].classList.contains("seleccionada")) {
        indiceSeleccionado = i;
        break;
      }
    }
  
    // Si no hay ninguna miniatura seleccionada, seleccionar la primera
    if (indiceSeleccionado === -1) {
      miniaturas[0].classList.add("seleccionada");
      imgCentral.src = imagenes[0];
      return;
    }
  
    // Si la miniatura seleccionada es la última, ocultar la flecha derecha
    if (indiceSeleccionado === miniaturas.length - 1) {
      miniaturas[indiceSeleccionado].classList.remove("seleccionada");
      if (indiceSeleccionado === miniaturas.length - 2) {
        document.getElementById("der").style.display = "none";
      }

      imgCentral.src = imagenes[miniaturas.length - 1];
      document.getElementById("der").style.display = "none";
      return;
    } else {
      // Seleccionar la miniatura siguiente
      miniaturas[indiceSeleccionado].classList.remove("seleccionada");
      miniaturas[indiceSeleccionado + 1].classList.add("seleccionada");
      imgCentral.src = imagenes[indiceSeleccionado + 1];

      if (indiceSeleccionado === miniaturas.length - 2) {
        document.getElementById("der").style.display = "none";
      }
    }
  
    // Mostrar la flecha izquierda
    document.getElementById("izq").style.display = "block";
}