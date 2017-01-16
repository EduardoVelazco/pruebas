/** funcion que ayuda a ccambiar de oagina en la misma 
 
 */
 $(function(){
	 $("boton1").click(function(){
		 $("#contenido2").fadeOut(300,function(){
			 $("#contenido1").fadeIn(300);
		 });
	 });
	$("#boton2").click(function(){
		$("#contenido1").fadeOut(300,function(){
			$("#contenido2").fadeIn(300);
		});
	}) ;
 });