const container = document.getElementById("container");

container.addEventListener("mouseover", ()=>{
    container.style.transform = "skewX(20deg)";
    container.style.boxShadow = "-10px 10px 5px 0 rgba(0,0,0,0.2)";
    container.style.transitionDelay = "10s";
})
container.addEventListener("mouseout", ()=>{
    container.style.transform = "";
    container.style.boxShadow = "";
    container.style.transitionDuration = "3s";
})