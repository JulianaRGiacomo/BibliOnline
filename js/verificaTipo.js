function verificaTipo() {
    x =  document.querySelector('[name="tipo"]').value;
    y = document.querySelector('[name="genero"]');
    if(x == "romance"){
            y.style.opacity = 1;
            y.style.display = "block";
    }
    else{
            y.style.opacity = 0;
            y.style.display = "none";
    }
}
setInterval(verificaTipo, 500);