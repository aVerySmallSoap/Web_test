const arr = document.getElementsByClassName("item-get");
const walletSlider = document.getElementById("container-left");

for(let i = 0; i < arr.length; i++){
    arr[i].addEventListener("mouseover", ()=>{
        if(i === 2){
            arr[i].style.transition = "ease-out 1300ms";
            arr[i].style.backgroundColor = "red";
            arr[i].style.transform = "translateY(20px)";
            arr[i].style.boxShadow = "0px 3px 3px 0 rgba(0,0,0,0.3)";
        }else{
            arr[i].style.transition = "ease-out 1300ms";
            arr[i].style.backgroundColor = "#EEE0C9";
            arr[i].style.transform = "translateY(20px)";
            arr[i].style.boxShadow = "0px 3px 3px 0 rgba(0,0,0,0.3)";
        }
    });
    arr[i].addEventListener("mouseout", ()=>{
        arr[i].style.transition = "ease-in 1300ms";
        arr[i].style.backgroundColor = "#F1F0E8";
        arr[i].style.paddingTop = "";
        arr[i].style.boxShadow = "";
        arr[i].style.transform = "";
    });
}
walletSlider.addEventListener("mouseover", () => {
    walletSlider.style.transition = "ease-out 1300ms";
    walletSlider.style.transform = "translateX(-50px)";
})
walletSlider.addEventListener("mouseout", () => {
    walletSlider.style.transition = "ease-out 1300ms";
    walletSlider.style.transform = "";
})