//Inicialicia el/los carousel/es

var carousel1 

function mueveCarousel(){
		carousel1.mueve()
}
onload = function(){
	carousel1 = new tunaCarousel('carousel1',1, 'rtl')
	carousel1.controlesCarousel()
	tiempo = setInterval(mueveCarousel, 1)
}