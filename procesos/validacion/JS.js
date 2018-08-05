var json='{"valor":"3","nombre":"raas","apellido":"acero"}';

var obj=JSON.parse(json);

console.log(obj.valor);
var retorno=prompt("su nombre es: "+obj.nombre+" "+obj.apellido);

if (retorno=='si'){
	document.write('buenas tardes '+ obj.nombre+" "+obj.apellido);
}