var nombre = document.getElementById("nombre");
var tamaño = document.getElementById("tamaño");
var precio = document.getElementById("precio");
var fecha = document.getElementById("fecha");
var form = document.getElementById("formulario");

form.addEventListener("submit", function (evt) {
  var numero = parseFloat(precio.value);

  if (
    nombre.value == "" ||
    tamaño.value == "" ||
    isNaN(numero) == true ||
    fecha.value == "" ||
    numero == ""
  ) {
    evt.preventDefault();
    if (nombre.value == "") {
      nombre.classList.add("warning");
    }
    if (tamaño.value == "") {
      tamaño.classList.add("warning");
    }
    if (isNaN(numero) == true || numero == "") {
      precio.classList.add("warning");
    }
    if (fecha.value == "") {
      fecha.classList.add("warning");
    }
  } else {
  }
});
nombre.onclick = () => {
  nombre.classList.remove("warning");
};
tamaño.onclick = () => {
  tamaño.classList.remove("warning");
};
precio.onclick = () => {
  precio.classList.remove("warning");
};
fecha.onclick = () => {
  fecha.classList.remove("warning");
};
