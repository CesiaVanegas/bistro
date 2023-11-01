<a class="nav-link text-white" href="#" data-bs-toggle="dropdown">
    <i class="fa fa-bell"></i>
    <span class="badge bg-danger badge-sm badge-pill position-absolute top-1 end-1 translate-middle d-none"
        style="font-size: 9px;" id="num_notificacion"></span>
</a>

<div class="dropdown-menu dropdown-menu-end">

    <div id="notificaciones-container">

    </div>
</div>

<script>
    function cambiarEstado(id) {
        
        fetch(`http://192.168.1.59/bistro/public/cambiarestado/${id}`)
            .then(response => response.json())
            .then(data => {
                
            })
            .catch(error => {
                console.error('Error al cambiar el estado', error);
            });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const notificacionesContainer = document.getElementById('notificaciones-container');
        const numNotificacionElement = document.getElementById('num_notificacion');
        fetch('http://192.168.1.59/bistro/public/notificaciones')
            .then(response => response.json())
            .then(data => {
               
                if (data.notificaciones.data.length > 0) {

                    const html = data.notificaciones.data.map((item, index) => {
                        const notificationHtml =
                            `<a class="dropdown-item" onclick="cambiarEstado(${item.id})" href="${item.url != 'contacto/contacto' ? 'http://192.168.1.59/bistro/public/contacto' :item.url }"><i class="fa-regular fa-circle-check"></i> ${item.contacto.nombre}</a>`;
                        if (index < data.notificaciones.data.length - 1) {
                            return `${notificationHtml}<hr>`;
                        }
                        return notificationHtml;
                    }).join('');

                    notificacionesContainer.innerHTML = html;


                    numNotificacionElement.textContent = data.notificaciones.data.length;
                    if (data.notificaciones.data.length === 0) {
                        numNotificacionElement.classList.add('d-none');
                    } else {
                        numNotificacionElement.classList.remove('d-none');
                    }
                } else {
                    notificacionesContainer.innerHTML =
                        '<a class="dropdown-item" href="#">No hay notificaciones disponibles</a>';
                    numNotificacionElement.textContent = '0';
                    numNotificacionElement.classList.add('d-none');
                }
            })
            .catch(error => {
                console.error('Error al obtener notificaciones', error);
                numNotificacionElement.textContent = 'Error';
                numNotificacionElement.classList.add('d-none');
            });
    });
</script>
