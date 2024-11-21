$(document).ready(function () {
    $('#validar').click(function () {
        let valido = true;

    
        if (!$('#nombre').val()) {
            $('#error_n').html('Campo Obligatorio');
            valido = false;
        }
        else {
            $('#error_n').html('');
        }

        
        if (!$('#apellido1').val()) {
            $('#error_a1').html('Campo Obligatorio');
            valido = false;
        }
        else {
            $('#error_a1').html('');
        }

        if (!$('#apellido2').val()) {
            $('#error_a2').html('Campo Obligatorio');
            valido = false;
        }
        else {
            $('#error_a2').html('');
        }

        
        if (!$('#dni').val()) {
            $('#error_d').html('Campo Obligatorio');
            valido = false;
        }
        else {
            var dni = $('#dni').val();
            var numero;
            var letr;
            var letra;
            var expresion_regular_dni;
          
            expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
          
            if (expresion_regular_dni.test (dni) == true) {
                numero = dni.substr(0,dni.length-1);
                letr = dni.substr(dni.length-1,1);
                numero = numero % 23;
                letra='TRWAGMYFPDXBNJZSQVHLCKET';
                letra=letra.substring(numero,numero+1);
                if (letra!=letr.toUpperCase()) {
                    $('#error_d').html('Dni erroneo, la letra del NIF no se corresponde');
                    valido = false;
                }
                else {
                    $('#error_d').html('');
                }
            }
            else {
                $('#error_d').html('Dni erroneo, formato no válido');
                valido = false;
            }
        }
       
        
        if (!$('#correo').val()) {
            $('#error_c').html('Campo Obligatorio');
            valido = false;
        }
        else {
            var correo = document.getElementById("correo").value;
            var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
        
            if(validEmail.test(correo) ){
                $('#error_c').html('');            
            }
            else {
                $('#error_c').html("El correo electrónico es incorrecto");
                return false;
            }
        }

        
        if (!$('#contrasena1').val()) {
            $('#error_c2').html('Campos Obligatorios');
            valido = false;
        }
        else if (!$('#contrasena2').val()) {
            $('#error_c2').html('Campos Obligatorios');
            valido = false;
        }
        else if ($('#contrasena1').val().length && $('#contrasena2').val().length < 8) {
            $('#error_c2').html('Las contraseñas debe contener almenos 8 dígitos');
            valido = false;
        }
        else if ($('#contrasena1').val() != $('#contrasena2').val()) {
            $('#error_c2').html('Las contraseñas no coinciden');
            valido = false;
        }
        else {
            $('#error_c1').html('')
            $('#error_c2').html('');
        }
        
        
        if (!$('#check').is(':checked')) {
            $('#checkbox').html('Campo Obligatorio');
        }
        else {
            $('#checkbox').html('');
        }

        
        if (valido) {
            var apellido1 = $('#apellido1').val().toLowerCase().substring(0,3);
            var apellido2 = $('#apellido2').val().toLowerCase().substring(0,3);
            var dni = $('#dni').val().toLowerCase().substring($('#dni').val().length - 3);

            alert('Tu nombre de usuario es: '+apellido1+apellido2+dni);
        }
    });
});