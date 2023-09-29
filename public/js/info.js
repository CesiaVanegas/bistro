console.log('hola');
const id_contacto = document.getElementById('id_contacto');
const nombre = document.getElementById('nombre');
const email = document.getElementById('email');
const titulo= document.getElementById('titulo');
const mensaje= document.getElementById('mensaje');

function contacto(id_contacto=null){
    if (id_contacto) {
            console.log(id_contacto);
        axios.get(url + '/' + id_contacto).then(res=>{
            const contacto =res.data.contacto;
            console.log(contacto.id); 
            console.log(contacto.nombre);
            console.log(contacto.email);
            console.log(contacto.titulo);
            console.log(contacto.mensaje);
            console.log(contacto);
                    
        }).catch(error=>{
            console.log(error);
        });
    }

}

contacto();
