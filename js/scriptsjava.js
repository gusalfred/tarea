$('form')[0].reset();
var llenos='0';		//variable para los campos llenos
var necesarios='10'; //varialbe 

$(document).ready(function(){
	lista();
//TOOLTIP
	$('.tooltipped').tooltip({
		html: 'true',
		position: 'top'
	});

//MODAL
    $('.modal').modal(); //activacion de modals

//FIN DOCUMENT READY
  });

//LISTA
function lista(){
	$.ajax({
		url : "lista.php", 
		type : "POST", 
		dataType: 'html',
		success: function(data){
			$('#lista').html(data);
		}
	});
}

//DROPZONE 
Dropzone.options.myDropzone ={
	//funciones de iniciacion con eventos 
	init: function(){
		var _this=this;
		//evento para enviar los archivos
		$('#send').on('click',function(){
			_this.processQueue();
		});
		//evento para mostrar el boton se enviar
		_this.on("addedfile", function() {
			$('#send').removeClass('hide');
		});
		//evento para ocultar el boton de enviar al vaciar el dropxzone
		_this.on("reset", function() {
			$('#send').addClass('hide');
		});
		//evento que limpia el dropzone al terminar exitosamente
		_this.on("success", function() {
			setTimeout(function(){
				_this.removeAllFiles();
				lista();
			},800);
		});
	},
	//opciones del dropzone
	autoProcessQueue: false, 										//evita que se envian automaaticamente los archivos
	maxFiles: '1',													//limita el numeor de archivos a enviar a 1
	acceptedFiles:'.txt',											//filtro de tipo de archivos en este caso solo txt
	addRemoveLinks: true,											//agrega la opcion de eliminar un archivo
	dictRemoveFile: 'quitar archivo',								//mensaje del link para quitar archivo
	dictInvalidFileType: 'Este tipo de archivo no esta soportado',	//mensaje de error al insertar archivo erroneo
	dictMaxFilesExceeded:'No se pueden subir mas archivos',			//mensaje de error al exceder el limite
	success: function(file,response){
		var respuesta=JSON.parse(response);				//convertir la respuesta de string a json
		if(respuesta.stat === 'ok'){
			Materialize.toast(respuesta.msg, 4000,'green');
		}else{
			Materialize.toast(respuesta.msg, 4000,'red');
		}	
	}
};



