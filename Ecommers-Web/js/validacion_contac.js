var form = document.getElementById(Enviar);

function validacion() {
	let name = document.getElementsByName("nombre_apellido")[0].value;
	if (name == "") {
		alert("El campo de nombre es obligatorio")
		return
	}

    let ciudad = document.getElementById("ciudad").value;
	if (ciudad == "") {
		alert("Seleccione una Ciudad")
		return
	}

    let email = document.getElementsByName("correo")[0].value;
	if (email == "") {
		alert("El campo de correo es obligatorio")
		return
	}

    let asunto = document.getElementsByName("asunto")[0].value;
	if (asunto == "") {
		alert("El campo de asunto es obligatorio")
		return
	}

    let mensaje = document.getElementsByName("mensaje")[0].value;
	if (mensaje == "") {
		alert("El campo de mensaje es obligatorio")
		return
	}

}