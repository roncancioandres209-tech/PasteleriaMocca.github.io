//======================0INDEX.HTML==================================
document.addEventListener("DOMContentLoaded", () => {
  const boton = document.querySelector(".boton-ver-mas");

  boton.addEventListener("mouseover", () => {
    boton.textContent = "¡Te van a encantar nuestros postres!";
  });

  boton.addEventListener("mouseout", () => {
    boton.textContent = "CLIC AQUII! para ver todos nuestros productos";
  });
});


//============================PRODUCTOS===================================
//------formulario testimonios--------------------
function mostrarFormulario() {
  document.getElementById("formTestimonio").style.display = "flex";
}

function cerrarFormulario() {
  document.getElementById("formTestimonio").style.display = "none";
}

function enviarTestimonio(event) {
  event.preventDefault();
  alert("¡Gracias por tu testimonio!");
  cerrarFormulario();
}







