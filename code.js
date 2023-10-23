// Funcion maximizar portada album
var ImagenCompleta = document.getElementById("ImagenCompleta");
var ImagenSeleccionada = document.getElementById("ImagenSeleccionada");

function abrirImagen(img){
    ImagenSeleccionada.src = img;
    console.log(ImagenSeleccionada)
    ImagenCompleta.style.display ="flex";
}

function cerrarImagen(){
    ImagenCompleta.style.display ="none";
}
document.addEventListener("keydown", function(event) {
    if (event.key === "Escape") {
        cerrarImagen();
    }
});

// Funcion Boton efecto deslizante 
var botonesScroll = document.querySelectorAll(".flecha");
botonesScroll.forEach(function(boton) {
    boton.addEventListener("click", scrollSuave);
});
function scrollSuave(event) {
    console.log(botonesScroll)
    var targetId = event.target.getAttribute("data-target");
    console.log(targetId)
    var targetElement = document.getElementById(targetId);
    console.log(targetElement)
    targetElement.parentNode.scrollTop = (targetElement.offsetTop - 250);
    console.log("Posicion: "&& targetElement.offsetTop)
}