function CAMPOCEDULA() {
    var cedula = document.getElementById('cedula');
    var nacionalidad = document.getElementById('nacio');
    cedula + 0;
    //verifica si la cedula esta vacio o null
    if (nacionalidad.value != '') {
        if (cedula.value != '') {
            if (cedula != '0') {
                //mensaje post
                var mensaje = {
                    laci: cedula.value,
                    naci: nacionalidad.value
                };
                $.ajax({
                    data: mensaje,
                    url: '../../procesos/validacion/validacion_registro.php',
                    type: 'post',
                    beforeSend: function() {
                        $("#labelcedula").html("Procesando, espere por favor...");
                    },
                    success: function(data) {
                        console.log(data);
                        obj = JSON.parse(data);
                        
                        //verifica el booleano de servidor.
                        if (obj.valor == '1' || obj.valor == '0' || obj.valor == '3') {
                            // mensaje  cedula valida.
                            if (obj.valor == '1') {
                            	 $('#primer_name').val("");
    							$('#segundo_name').val("");
                                $("#cedula").removeClass("red-text");
                                $("#cedula").addClass("teal-text");
                                $("#labelcedula").html("Confirmado");
                                cedula = nacionalidad.value + "-" + cedula.value;
                                return true;
                            }
                            //mensaje cedula invalidado
                            if (obj.valor == '0') {
                            	 $('#primer_name').val("");
    							$('#segundo_name').val("");
                                $("#cedula").removeClass("teal-text");
                                $("#cedula").addClass("red-text");
                                $('#labelcedula').text('INGRESE UN NUMERO DE CEDULA VALIDO');
                                return false;
                            }
                            if (obj.valor == '3') {
                                $("#cedula").removeClass("red-text");
                                $("#cedula").addClass("teal-text");
                                $("#labelcedula").html("Confirmado: "+obj.nombre);
                                 $('#primer_name').val(obj.nombre);
    							$('#segundo_name').val(obj.apellido);
                                return true;
                                
                            }
                        }
                    }
                });
            } //error cedula vacia o 0
            else {
                $("#cedula").removeClass("teal-text");
                $("#cedula").addClass("red-text");
                $('#labelcedula').text('LA NUMERO DE CEDULA NO PUEDE SER 0');
                return false;
            }
        } else {
            $("#cedula").removeClass("teal-text");
            $("#cedula").addClass("red-text");
            $('#labelcedula').text('NO PUEDES DEJAR ESTE CAMPO VACIO');
            return false;
        }
    } else {
        $("#cedula").removeClass("teal-text");
        $("#cedula").addClass("red-text");    
        $('#labelcedula').text('DEBE SELECIONAR UNA NACIONALIDAD');
        return false;
    }
}
    

