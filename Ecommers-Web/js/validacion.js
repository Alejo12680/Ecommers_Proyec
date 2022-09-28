var form = document.getElementById(loginform);

function enviar_formulario() {
	let nombre = document.getElementsByName("nombre")[0].value;
	if (nombre == "") {
		alert("El campo nombre es obligatorio")
		return
	}
	let apellidos = document.getElementsByName("apellidos")[0].value;
	if (apellidos == "") {
		alert("El campo apellidos es obligatorio")
		return
	}
	let documento = document.getElementsByName("documento")[0].value;
	if (documento == "") {
		alert("El campo documento es obligatorio")
		return
	}

	let ciudad = document.getElementById("ciudad").value;
	if (ciudad == "") {
		alert("Seleccione una Ciudad")
		return
	}

	let telefono = document.getElementsByName("telefono")[0].value;
	if (telefono == "") {
		alert("El campo telefono es obligatorio")
		return
	}
	let email = document.getElementsByName("email")[0].value;
	if (email == "") {
		alert("El campo email es obligatorio")
		return
	}
	
	let contrasena = document.getElementsByName("contrasena")[0].value;
	let contrasena2 = document.getElementsByName("con_contrasena")[0].value;
	if (contrasena == "" && contrasena2 == "") {
		alert("Los campos contraseña y confrimación son obligatorio")
		return
	} else {
		if (contrasena != contrasena2) {
			alert("La contraseña no es igual a la confirmación ")
			return		
		}
	}
	
}