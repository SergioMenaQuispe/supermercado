const isEmpty =(str)=>str.trim()=== '';

function acceder() {
    var usua=document.getElementById('email');
    var clav=document.getElementById('contra');
    
    usuaVal = usua.value;
    clavVal = clav.value;

    if(isEmpty(usuaVal) || isEmpty(clavVal)) {
        alert('Todos los campos son obligatorios');
        return; 
    }

    var contenido = document.getElementById("mensaje");

    if (window.XMLHttpRequest) {
        ajax=new XMLHttpRequest();
    } else {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }

    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200) {
            if(ajax.responseText.trim()=="OK"){
                //window.location.href = "inicio.php";
                //--------Colocamos la pagina que quiere el usuario
                window.location.href = "/s";
                console.log("hola")
            } else {
                contenido.innerHTML = ajax.responseText;
                console.log("adio")
            }
        }
    }
    ajax.open("POST", "/api/cliente");
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("email="+ usuaVal + "&contra=" + clavVal);
};

function asignar(){
    btnAcceder = document.getElementById('btnAcceder');
    btnAcceder.addEventListener("click", acceder);
}

window.addEventListener("load", asignar);
