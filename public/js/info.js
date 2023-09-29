// Obtén los elementos por sus IDs

const id_contacto = document.getElementById('id');
const nombre = document.getElementById('nombre');
const email = document.getElementById('email');
const titulo = document.getElementById('titulo');
const mensaje = document.getElementById('mensaje');
document.addEventListener('DOMContentLoaded', function () {
function contacto(id_contacto = null) {
if (id_contacto) {
console.log(id_contacto);
axios.get(url + '/' + id_contacto)
.then(res => {
const contacto = res.data.contacto;
console.log(contacto.id);
console.log(contacto.nombre);
console.log(contacto.email);
console.log(contacto.titulo);
console.log(contacto.mensaje);
console.log(contacto);

// Actualiza el contenido de los elementos por sus IDs
id_contacto.innerText = contacto.id;
nombre.innerText = contacto.nombre;
email.innerText = contacto.email;
titulo.innerText = contacto.titulo;
mensaje.innerText = contacto.mensaje;
})
.catch(error => {
console.log(error);
});
}
}
contacto();
});
