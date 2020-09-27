$(document).ready(function(){
		$('#btn').click(function(e){
			let code, name, description, price, stock;
			code = document.getElementById('code')
			name = document.getElementById('name')
			description = document.getElementById('description')
			price = document.getElementById('price')
			stock = document.getElementById('stock')


			function validate(){
				if (code.value === null || code.value === '') {
					code.className += " is-invalid"
				}
				if (name.value === null || name.value === '') {
					name.className += " is-invalid"
				}
				if (description.value === null || description.value === '') {
					description.className += " is-invalid"
				}
				if (price.value === null || price.value === '') {
					price.className += " is-invalid"
				}
				if (stock.value === null || stock.value === '') {
					stock.className += " is-invalid"
				}

				if (code.value < 0) {
					code.className += " is-invalid"
				}
				if (stock.value < 0) {
					code.className += " is-invalid"
				}
				if (code.value === '' || name.value === '' || description.value === '' || price.value === ''|| stock.value === ''|| stock.value < 0 || code.value < 0) {

					$("#alerts").html("<div class='alert alert-danger alert-dismissible fade show'  role='alert'><strong>Por favor ingrese los datos faltantes.</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
				}else{
					alert('¡Los productos han sido agregados exitosamente!')
				}
			}
			validate();
		});
	});