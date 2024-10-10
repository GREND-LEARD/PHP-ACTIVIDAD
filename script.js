document.addEventListener('DOMContentLoaded', function () {
    const boton = document.getElementById('click-boton');
    const elementosLista = document.querySelectorAll('#lista-numeros li');
    
    boton.addEventListener('click', function () {
        elementosLista.forEach(elemento => {
            elemento.classList.toggle('highlight');
        });
    });
});