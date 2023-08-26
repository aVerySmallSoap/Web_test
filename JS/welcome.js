const arr = document.getElementsByClassName("item");
for(let i = 0; i < arr.length; i++){
    arr[i].addEventListener("mouseover", ()=>{
        if(i === 2){
            arr[i].style.transition = "ease-out 1300ms";
            arr[i].style.backgroundColor = "red";
            arr[i].style.transform = "translateY(20px)";
            arr[i].style.boxShadow = "0px 3px 3px 0 rgba(0,0,0,0.3)";
        }else{
            arr[i].style.transition = "ease-out 1300ms";
            arr[i].style.backgroundColor = "#96B6C5";
            arr[i].style.transform = "translateY(20px)";
            arr[i].style.boxShadow = "0px 3px 3px 0 rgba(0,0,0,0.3)";
        }
    });
    arr[i].addEventListener("mouseout", ()=>{
        arr[i].style.transition = "ease-in 1300ms";
        arr[i].style.backgroundColor = "#96B6C5";
        arr[i].style.paddingTop = "";
        arr[i].style.boxShadow = "";
        arr[i].style.transform = "";
    });
}
