var representantes = [];
var alumnos = [];
savedrepresentantes();
savedalumnos();

function getalumnos(cantidad) {
    var mensaje = {
        P: {
            tipo: 'alumnos',
            cantidad: cantidad
        },
    };
    $.ajax({
        data: mensaje,
        type: 'post',
        url: window.location.pathname + '../../procesos/datos/datos.php',
        success: function(data) {
            alumnos = [];
            var obj = JSON.parse(data);
            if (obj.i == true) {
                for (var i in obj) {
                    if (obj[i] != true) {
                        alumnos.push(obj[i]);
                    }
                }
            }
            localStorage.removeItem('alumnos');
            savedlocalstorage('alumnos', alumnos);

        }
    });
    var total = { cantidad: alumnos.length };

            return total;
}

function getrepresentantes(cantidad) {
    var mensaje = {
        P: {
            tipo: 'representante',
            cantidad: cantidad
        },
    };
    $.ajax({
        data: mensaje,
        type: 'post',
        url: window.location.pathname + '../../procesos/datos/datos.php',
        success: function(data) {
            representantes = [];
            var obj = JSON.parse(data);
            if (obj.i == true) {
                for (var i in obj) {
                    if (obj[i] != true) {
                        representantes.push(obj[i]);
                    }
                }
            }
            localStorage.removeItem('representantes');
            savedlocalstorage('representantes', representantes);

        }
    });
}

function getmyalumnosp(area, grado, seccion) {

    switch (area) {
        case 'Particular':

            var mensaje = {
                P: {
                    tipo: 'docente',
                    area: area,
                    grado: grado,
                    seccion: seccion
                }
            };

            $.ajax({
                type: 'post',
                url: window.location.pathname + '../../procesos/datos/datos.php',
                data: mensaje,
                beforeSend: function() {
                    var html = '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
                    $('.cantidad').html(html);
                    $('.restantes').html(html);
                    $('.asistidos').html(html);
                },
                success: function(data) {

                    alumnos = [];
                    var obj = JSON.parse(data);
                    if (obj.i == true) {
                        for (var i in obj) {
                            if (obj[i] != true) {
                                alumnos.push(obj[i]);
                            }
                        }
                    }
                    localStorage.removeItem('alumnos');
                    savedlocalstorage('alumnos', alumnos);
                }

            });


            var total = { cantidad: alumnos.length };

            return total;


            break;


        case 'Especialidad':
            getalumnos(50);
            var total = { cantidad: alumnos.length };
            return total;
            break;
        default:

    }



}

function savedlocalstorage(nameitem, item) {
    localStorage.setItem(nameitem, JSON.stringify(item));
}

function savedsessionStorage(nameitem, item) {
    sessionStorage.setItem(nameitem, JSON.stringify(item));
}

function savedrepresentantes() {
    var listrepresentantes = localStorage.getItem('representantes');
    if (listrepresentantes == null) {
        representantes = [];
    } else {
        representantes = [];
        representantes = JSON.parse(listrepresentantes);
    }
}

function savedalumnos() {
    var listalumnos = localStorage.getItem('alumnos');
    if (listalumnos == null) {
        alumnos = [];
    } else {
        alumnos = [];
        alumnos = JSON.parse(listalumnos);
    }
}