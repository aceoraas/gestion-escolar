

 var fec="12/8/1999";

var fecha = fec.split('/');

// para calcular su cumpleaños
var fi= new Date();

var edad= fi.getFullYear()-fecha[2];
var dia=fi.getDate();
var mes=fi.getMonth();
var a =((365*(edad+1))+(fecha[1]*30)+(fecha[0]))-((365*edad)+((mes+1)*30)+(dia));


//para ver la fecha.

if(a>365){
  console.log("faltan "+a+" dias");
}
else
  {
    var b=365-a;
    if(b==0)
      {
        console.log('Hoy es tu cumpleaños');
      }
      else
        {
          console.log("llevas "+b+" dias");
        }
}