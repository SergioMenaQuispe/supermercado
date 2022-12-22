
function ventana_barra() {
    document.getElementById("modal_container").style.visibility = "visible";
};

function ventana_cerrar() {
    document.getElementById("modal_container").style.visibility = "hidden";
};


document.addEventListener('click', e=> {
    if(e.target.matches('.vermas')){
        fetch('/api/carrito', {
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            method: 'POST',
            body: JSON.stringify({'id':e.target.id})
        });
    }
})


