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