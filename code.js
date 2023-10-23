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


let goback = document.querySelectorAll("#back");
let page1 = document.querySelectorAll("#p1");
let page2 = document.querySelectorAll("#p2");
let page3 = document.querySelectorAll("#p3");
let gonext = document.querySelectorAll("#next");

let infopage1 = document.getElementById("contenido-page1");
let infopage2 = document.getElementById("contenido-page2");
let infopage3 = document.getElementById("contenido-page3");
let actual = 1

page1.forEach(function(boton) {
    boton.addEventListener("click", function() {
        pagina1()
    });
});
page2.forEach(function(boton) {
    boton.addEventListener("click", function() {
        pagina2()
    });
});
page3.forEach(function(boton) {
    boton.addEventListener("click", function() {
        pagina3()
    });
});

goback.forEach(function(boton){
    boton.addEventListener("click", function(){
        switch (actual){
            case 1:
                pagina3()
                break;
            case 2:
                pagina1()
                break;    
            case 3:
                pagina2()
                break;
        }
    })
})
gonext.forEach(function(boton){
    boton.addEventListener("click", function(){
        switch (actual){
            case 1:
                pagina2()
                break;
            case 2:
                pagina3()
                break;    
            case 3:
                pagina1()
                break;
        }
    })
})


function pagina1(){
    actual=1
    infopage1.style.display = "block";
    infopage2.style.display = "none";
    infopage3.style.display = "none";
    document.body.scrollTop = document.documentElement.scrollTop = 0;

}
function pagina2(){
    actual=2
    infopage1.style.display = "none";
    infopage2.style.display = "block";
    infopage3.style.display = "none";
    document.body.scrollTop = document.documentElement.scrollTop = 0;

    // page1.style.backgroundColor = "wheat"
    // page1.style.transform = "scale(1)"
    // page1.style.opacity = "1"
    // page2.style.opacity = ".5"
    // page2.style.transform = "scale(0.8)"
    // page3.style.backgroundColor = "wheat"
    // page3.style.transform = "scale(1)"
    // page3.style.opacity = "1"
}
function pagina3(){
    actual=3
    infopage1.style.display = "none";
    infopage2.style.display = "none";
    infopage3.style.display = "block";
    document.body.scrollTop = document.documentElement.scrollTop = 0;
    // page1.style.backgroundColor = "wheat"
    // page1.style.transform = "scale(1)"
    // page1.style.opacity = "1"
    // page2.style.backgroundColor = "wheat"
    // page2.style.transform = "scale(1)"
    // page2.style.opacity = "1"
    // page3.style.opacity = ".5"
    // page3.style.transform = "scale(0.8)"
}