function animateOnSubmit(){
    let item = document.getElementById("hidden");
    item.style.animation = "slide-in ease-out 5s";
    item.style.animationIterationCount = "1";
    item.style.animationDelay = "1s";
    setTimeout(()=>{item.style.transform = "translate(120px)"; item.style.visibility = "visible"}, 6000);
}