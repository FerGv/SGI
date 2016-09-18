function soloNumeros(e) {
			var key = window.Event ? e.which : e.keyCode 
			return ((key >= 48 && key <= 57) || (key == 8) || (key == 13)) 
		}	

function soloLetras(e) {
	var key = window.Event ? e.which : e.keyCode 
	return ((key >= 65 && key <= 90) || (key >= 97 && key <= 122) || (key == 249) || (key == 32) || (key == 8) || (key == 194) || (key == 13)) 
}	