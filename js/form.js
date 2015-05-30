function ativar(element){
    var x = element.parentNode;
    x.style.background = "#F4FBFF";
    x.childNodes[1].style.color = "#42B5FE";
}
function desativar(element){        
    var x = element.parentNode;
    x.style.background = "#fff";
    x.childNodes[1].style.color = "#666";
}
function verificaDisabled(){
    var x = document.getElementsByClassName("caixa");
    var i;
    for(i = 0; i < x.length; i++){
        if(x[i].disabled){
            x[i].parentElement.style.backgroundColor = "#f1f1f1";
            x[i].parentElement.style.opacity = "0.7";
        }
    }
}
window.onload(verificaDisabled());