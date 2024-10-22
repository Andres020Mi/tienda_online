let contenedor_principal = document.getElementById("contenedor_contenido")

if(window.innerWidth < 780){
    contenedor_principal.classList.add("container-flex-column");
    contenedor_principal.classList.remove("container-20-80");
}else{
    contenedor_principal.classList.remove("container-flex-column");
    contenedor_principal.classList.add("container-20-80");
}

window.addEventListener("resize",function(){
    if(this.window.innerWidth < 780){
        contenedor_principal.classList.add("container-flex-column");
        contenedor_principal.classList.remove("container-20-80");
    }else{
        contenedor_principal.classList.remove("container-flex-column");
        contenedor_principal.classList.add("container-20-80");
    }
});