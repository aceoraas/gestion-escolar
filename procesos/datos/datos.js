var representantes = [];
var alumnos = [];
savedrepresentantes();
savedalumnos();

function getalumnos() {
    var mensaje = {
        P: {
            tipo: 'alumnos'
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
}

function getrepresentantes() {
    var mensaje = {
        P: {
            tipo: 'representante'
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

function savedlocalstorage(nameitem, item) {
    localStorage.setItem(nameitem, JSON.stringify(item));
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