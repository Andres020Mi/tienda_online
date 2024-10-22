let nav_pc = document.querySelectorAll("#nav_pc");
let btn_nav_mv = document.getElementById("btn_nav_mv");
let nav_mv = document.getElementById("nav_mv");

if(window.innerWidth > 780){
    nav_pc.forEach(element => {
        element.classList.remove("desaparecer");
    });
    btn_nav_mv.classList.add("desaparecer");
    
}else{
    nav_pc.forEach(element => {
        element.classList.add("desaparecer");
    });
    btn_nav_mv.classList.remove("desaparecer");
    
}

nav_mv.classList.add("desaparecer");

window.addEventListener("resize",function(){
    if(window.innerWidth > 780){
        nav_pc.forEach(element => {
            element.classList.remove("desaparecer");
        });
        btn_nav_mv.classList.add("desaparecer");
        
    }else{
        nav_pc.forEach(element => {
            element.classList.add("desaparecer");
        });
        btn_nav_mv.classList.remove("desaparecer");
        
    }
    nav_mv.classList.add("desaparecer");
});

btn_nav_mv.addEventListener("click",function(){
    if(nav_mv.classList.contains("desaparecer")){
        nav_mv.classList.remove("desaparecer");
    }else{
        nav_mv.classList.add("desaparecer");
    }
    
})