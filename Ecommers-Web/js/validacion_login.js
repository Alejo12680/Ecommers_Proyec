var form = document.getElementById(Ingresar);

function login_validacion() {
	let email = document.getElementsByName("usuario")[0].value;
	if (email == "") {
		alert("El campo de email es obligatorio")
		return
	}

    let password = document.getElementsByName("password")[0].value;
	if (password == "") {
		alert("El campo de password es obligatorio")
		return
	}

}