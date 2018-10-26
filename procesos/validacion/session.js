function expire() {
    var time = sessionStorage.firs;
    var time = time.split('--');
    if (time[1] < getTime()) {
        window.location = '../../';
    }
}

function exite(item) {
	if (sessionStorage.firs!=sessionStorage.getItem(item)) {
		sessionStorage.removeItem('misdatosusuario');
  		sessionStorage.removeItem('firs');
  		$(document).load('../../procesos/salida.php');
	}
}
setInterval(expire, 100);
setInterval(exite, 100);