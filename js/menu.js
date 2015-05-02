function menu(){
    var x = document.getElementById("caixa-menu");
    var w = document.getElementById("tudo");
    if(x.style.left == "0px"){
        x.className = "fechado";
        x.style.left = "-250px";
        w.style.visibility = "hidden";
        w.style.opacity = 0;
    }
    else{
        x.className = "aberto";
        x.style.left = "0px";
        w.style.visibility = "visible";
        w.style.opacity = 1;
    }
}