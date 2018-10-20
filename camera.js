/*
//-------------------------Activacion de la camara --------------------------
var canvas = document.querySelector('canvas');
  var context = canvas.getContext('2d');
  var video = document.querySelector("#camaraOn");
	function activateCamera() {
  
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMEdia;
    if (navigator.getUserMedia) {
        navigator.getUserMedia({video: true}, handleVideo, videoError);
    }
    function handleVideo(stream) {
        video.src = window.URL.createObjectURL(stream);
    }
    function videoError(e) {
        alert("La camara No esta funcionando, por favor Permita el acceso")
    }

};*/