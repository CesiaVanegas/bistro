function contacto(id_contacto) {
    axios.get(url + '/' + id_contacto)
        .then(res => {
            const contacto = res.data.contacto;
            // Actualiza el contenido de los elementos por sus IDs dentro del modal
            document.getElementById('id').innerText = contacto.id;
            document.getElementById('nombre').innerText = contacto.nombre;
            document.getElementById('email').innerText = contacto.email;
            document.getElementById('titulo').innerText = contacto.titulo;
            document.getElementById('mensaje').innerText = contacto.mensaje;

            // Obtén el modal
            var modal = document.getElementById('myModal');

            // Abre el modal
            modal.style.display = 'block';

            // Cierra el modal cuando se hace clic fuera de él
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            };
        })
        .catch(error => {
            console.log(error);
        });
}