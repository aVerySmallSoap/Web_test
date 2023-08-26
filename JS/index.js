const container = document.getElementById("container");
const hidden = document.getElementById("hidden");
setTimeout(()=>{
    container.addEventListener("mouseover", ()=>{
        container.style.transform = "skewX(20deg)";
        container.style.boxShadow = "-10px 10px 5px 0 rgba(0,0,0,0.2)";
        container.style.transitionDelay = "10s";
        hidden.style.transform = "skewX(20deg) translateX(120px)";
        hidden.style.boxShadow = "-10px 10px 5px 0 rgba(0,0,0,0.2)";
        hidden.style.transitionDelay = "10s";
    })
}, 6000);
setTimeout(()=>{
    container.addEventListener("mouseout", ()=>{
        container.style.transform = "";
        container.style.boxShadow = "";
        container.style.transitionDuration = "3s";
        hidden.style.transform = "translateX(120px)";
        hidden.style.boxShadow = "";
        hidden.style.transitionDuration = "3s";
    })
}, 6000);


