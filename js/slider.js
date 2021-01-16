var slide = new Array("original-cookie.png","praline.png", "pistache.png", "sspeculos.png");
var numero = 0;
alert('test')

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}