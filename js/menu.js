const boton = document.getElementById("botonM");
var n = false;
var d = false;
var p = false;
document.addEventListener('DOMContentLoaded', function () {
    nombrePlatillo();
    descripcionPlatillo()
    precioPlatillo()
    activarBoton(n,d,p);

});
function nombrePlatillo() {
    const nombreInput = document.querySelector('#nombre');

    nombreInput.addEventListener('input', e => {
        const nombreTexto = e.target.value.trim();

        //Validación de regla de negocio
        if (nombreTexto === '' || nombreTexto.length < 3) {
            mostrarAlerta('Nombre no válido', 'error');
        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
                
            }
            n = true;
            activarBoton(n,d,p);
        }
    })
}
function descripcionPlatillo() {
    const mensajeInput = document.querySelector('#descripcion');

    mensajeInput.addEventListener('input', e => {
        const mensajeTexto = e.target.value.trim();

        //Validación de regla de negocio
        if (mensajeTexto === '' || mensajeTexto.length < 3) {
            mostrarAlerta('Insuficientes caracteres', 'error');
        } else {
            const alerta = document.querySelector('.alerta');
            if (alerta) {
                alerta.remove();
                
            }
            d = true;
            activarBoton(n,d,p);
        }
    })
}
function precioPlatillo(){
    const telefonoInput = document.querySelector("#precio");
    var re = /^\d+$/;
    
    telefonoInput.addEventListener('input', e => {
        const teltexto = e.target.value.trim();
      if(teltexto.match(re)===null){
         
         mostrarAlerta('Precio no valido', 'error');
         }else {
            if (teltexto===''|| teltexto.length < 2 ){
                mostrarAlerta('Precio no valido', 'error');
            }else{
                const alerta = document.querySelector('.alerta');
            if (alerta) {
              alerta.remove();
              
            }
         
                p = true;
                activarBoton(n,d,p);
            }
           
        }
    })
}
function activarBoton(nombre,descripcion,precio){
       if(nombre && descripcion && precio){
        boton.disabled = false;
       }else{
        boton.disabled = true;
       }
}
function correoCita(){
    const emailInput = document.querySelector("#email");
    var re =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    emailInput.addEventListener('input', e => {
        const emailTexto = e.target.value.trim();
        if(emailTexto===''||emailTexto.match(re)===null){
            mostrarAlerta('Correo no valido', 'error');
        }else{
        
                const alerta = document.querySelector('.alerta');
                if (alerta) {
                    alerta.remove();
                }
                cita.email = emailTexto;
            
        }
    
      
    })
}
function enviarCita(){
 
    enviar.addEventListener('click', () => {
        
        if(cita.email===''||cita.mensaje===''||cita.nombre===''||cita.telefono===''){
            mostrarAlerta('No puede dejar espacios en blanco', 'error');
        }else{
        
                const alerta = document.querySelector('.alerta');
                if (alerta) {
                    alerta.remove();
                }
                
            
        }
    
      
    })
   
}

function mostrarAlerta(mensaje, tipo) {
    //Si hay una alerta previa, entonces no crear otra
    const alertaPrevia = document.querySelector('.alerta');
    if (alertaPrevia) {
        return;
    }

    const alerta = document.createElement('DIV');
    alerta.textContent = mensaje;
    alerta.classList.add('alerta');

    if (tipo === 'error') {
        alerta.classList.add('error');
    }

    //Inserta en el HTML
    const formulario = document.querySelector('.formulario__register');
    formulario.appendChild(alerta);

    //Eliminar la alerta después de 3 segundos
    setTimeout(() => {
        alerta.remove();
    }, 3000);
}