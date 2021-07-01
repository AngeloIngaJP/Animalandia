submit.onclick=function(){

    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var subject=document.getElementById('subject').value;
    var message=document.getElementById('message').value;

    var expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    var valido=expReg.test(email);


    if(name.length<4 || valido==false || subject.length<4 || message.length==0){
        Swal.fire(
    
            '¡Campos incorrectos!',
            'Ingrese los datos correctamente 😰',
            'warning',
            'Ok'
    
         );
    }else{
        Swal.fire(
            'Mensaje enviado',
            'Pronto nos pondremos en contacto 😉',
            'success'
        );
    }

    
}