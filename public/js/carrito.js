document.addEventListener('click', async (e) => {
    if(e.target.matches('.sumar')){
        const id_parent =  e.target.parentNode.id
        const number_box = document.getElementById(id_parent).querySelector('.cantidad');
        number_box.textContent++
        monto();
    }

    if(e.target.matches('.restar')){
        const id_parent =  e.target.parentNode.id
        const number_box = document.getElementById(id_parent).querySelector('.cantidad');
        number_box.textContent > 1 ? number_box.textContent-- : 1;
        monto();
    }

    if(e.target.matches('.quitar')){
        const id_parent = e.target.parentNode.id;
        fetch(`/api/carrito/${id_parent}`, {
            method: 'DELETE'
        })

        window.location.href = "/carrito"
    }

    if(e.target.matches('#comprar')){
        console.log('a')
        const cajas = document.querySelectorAll('.caja') 

        for (const caja of cajas) {
            obj = {
                'id_cliente' : document.getElementById('id_cliente').textContent,
                'id_producto' : caja.querySelector('div').id,
                'descripcion' : caja.querySelector('.nombre').textContent.trim(),
                'monto' : caja.querySelector('.subtotal').textContent,
                'cantidad' : caja.querySelector('.cantidad').textContent
            }

            await fetch('/api/venta', {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: 'POST',
                body: JSON.stringify(obj)
            })
            .then(res => alert('Compra realizada con exito'))
            .catch(err => alert('Error al realizar la compra'))
        }
    }
})

const monto = () => {
    const monto = document.getElementById('monto_total');
    const cajas = document.querySelectorAll('.caja') 

    let m = 0;
    cajas.forEach(c => {
        const precio = c.querySelector('.precio').textContent.split('/')[1]
        const cantidad = c.querySelector('.cantidad').textContent
        c.querySelector('.subtotal').textContent = precio * cantidad
        m += precio * cantidad;
    } )

    monto.textContent = m;
}

document.addEventListener('DOMContentLoaded', e => {
    monto();
})