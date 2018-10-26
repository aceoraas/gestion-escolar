function token(item) {
    var a = '' + btoa(Math.random()) + '.' + btoa(Math.random()) + '.' + btoa(Math.random()) + '--' + (getTime() + (60000 * 60 * 2)); // Para hacer el token más largo
    sessionStorage.setItem(item, a);
    return a;
};