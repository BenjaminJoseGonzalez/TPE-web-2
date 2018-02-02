$(document).ready(function(){

	$('#deporte').on("click","a", function(ev){
		ev.preventDefault();
		var id_deporte = $(this).attr("id_deporte");
		$.ajax({
			method: 'GET',
			url:'index.php?action=deportes&id_deporte='+id_deporte,
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkRidersbike').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=riders',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkContacto').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=contacto',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkAdmin').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=admin',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkRegistro').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=registrar',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
				
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#lnkLogOut').on("click", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=logout',
			datatype:'HTML',
			cache:false,
			success: function(data){
				document.location.href="index.php";
			},
			error: function(){
				alert("error");
			}
		});
	});
	$("#wrap").on("click", "section #lnkIniSession" , function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'GET',
			url:'index.php?action=inicia_session',
			datatype:'HTML',
			cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #info", function(ev){
		ev.preventDefault();
		var formData = new FormData($("#form_subir")[0]);
		$.ajax({
			method: 'POST',
			url:'index.php?action=agregar_parte',
		    data: formData,
		    cache:false,
		    contentType: false,
		    processData: false,

			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #btn-contacto", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'index.php?action=agregar_contacto',
		    data:$("#subir_contacto").serialize(),
		    cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article .btn_borrar_parte", function(ev){
		ev.preventDefault();
		var id = $(this).attr("id_parte");
		$.ajax({
			method: 'POST',
			url:'index.php?action=borrar_parte',
		    data: {'id' : id},
		    cache:false,
			success: function(data){
				$("#"+id).remove();
			},
			error: function(){
				alert("error");
			}
		});
	});
	$('#wrap').on("click", "article #editar", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'index.php?action=editar_parte',
		    data:$("#form_editar").serialize(),
		    cache:false,
			success: function(data){
				$("#wrap").html(data);
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #btn-registro", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'index.php?action=agregar_usuario',
		    data:$("#registrar").serialize(),
		    cache:false,
			success: function(data){
				console.log(data);
				
				if(data == "registrado correctamente"){
					document.location.href="index.php";
				}
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #btn-logIn", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'index.php?action=login',
			data:$("#logIn").serialize(),
		    cache:false,
			success: function(data){
				document.location.href="index.php";
			},
			error: function(){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article #btn-enviarComentario", function(ev){
		ev.preventDefault();
		$.ajax({
			method: 'POST',
			url:'api/comentario',
		    data: $("#comentarios").serialize(),
		    cache:false,
			success: function(data){
				var nodeDIV = document.createElement("DIV");
				var nodeP = document.createElement("P");
				var textP1 = document.createTextNode("Puntaje: <b>{$comentario['puntaje']}</b> Usuario: <b>{$comentario['nombre']}</b>");
				var textP2 = document.createTextNode("Comentario: <br />{$comentario['comentario']}");
				nodeDIV.appendChild(nodeP);
				nodeP.appendChild(textP1);
				nodeDIV.appendChild(nodeP);
				nodeP.appendChild(textP2);
				document.getElementById('muestraComentarios').appendChild(nodeDIV);
			},
			error: function(data){
				alert("error");
			}
		});
	});

	$('#wrap').on("click", "article .btn_borrar_comentario", function(ev){
		ev.preventDefault();
		var id = $(this).attr("id_comentario");
		$.ajax({
			method: 'DELETE',
			url:'api/comentario/'+id,
		    cache:false,
			success: function(data){
				alert(data);
				$("#"+id).remove();
			},
			error: function(){
				alert("error");
			}
		});
	});

});