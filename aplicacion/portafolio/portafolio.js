// Función para desplazar un elemento hacia la derecha
function slideRight() {
    var element = document.getElementById("miElemento");
    var pos = 0;
    var id = setInterval(frame, 5);
    function frame() {
      if (pos == 300) {
        clearInterval(id);
      } else {
        pos++; 
        element.style.left = pos + 'px'; 
      }
    }
  }
  
  // Llamada a la función al hacer clic en un botón
  document.getElementById("boton").onclick = slideRight;
  