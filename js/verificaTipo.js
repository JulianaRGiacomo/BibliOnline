function verificaTipo() {
    var x = document.getElementById("romance");
    var y = document.getElementById("genero");
    var z = document.getElementById("campo-genero");
    if(x.checked == true){
        y.disabled = false;
        z.style.backgroundColor = "#fff";
        z.style.opacity = 1;
    }
    else{
        y.disabled = true;
        z.style.backgroundColor = "#f1f1f1";
        z.style.opacity = 0.6;
    }
}
setInterval(verificaTipo, 500);
