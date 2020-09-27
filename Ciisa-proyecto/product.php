<?php include('templates/header.php');?>
<section class="mt-5">
	<div class="container">
		<div class="form-group">
			<label for="place">Por favor selccione su sucursal: </label>
			<select name="place" class="form-control" id="place">
				<option value="0">...</option>
				<option value="Santiago Centro">Santiago Centro</option>
				<option value="Las Condes">Las Condes</option>
			</select>
		</div>
	</div>
</section>

<div id="contenido">
	
</div>




<script type="text/javascript">
	$('#place').change(function(){
		if ($('#place').val() != '0') {
			let place = document.getElementById('place')
			//let p = document.getElementById('p')
			//p.value = place.value

			let template = `<main  class='mt-5'>
	<div id='content' class='container'>
		<form class='form-group'>
			<label>Sucursal</label>
			<input type='text' id="p" name='place' value="${place.value}" readonly class='mb-3 form-control'>
			<div id='alerts'></div>
			<div class='row'>
				<div class='col-md-6'>
					<label for='codigo'>Codigo</label>
					<input type='number' name='codigo' class='form-control' id='code' required>	
					<label for='name'>Nombre: </label>
					<input type='text' name='name' class='form-control' id='name' maxlength='50' minlength='10' required>
					<label for='description'>Descripcion</label>
					<input type='text' name='description'class='form-control' id='description' minlength='2' maxlength='255' required>
				</div>
				<div class='col-md-6'>
					<label for='price'>Precio</label>
					<input type='number' name='price' class='form-control' id='price' min='1'required>
					<label for='stock'>Stock total</label>
					<input type='number' name='stock' class='form-control' id='stock' min='1' required>
				</div>
				<button type='button' class='mt-3 btn btn-block btn-primary' id='btn' name='btn'>Enviar</button>
			</div>
		</form>	
	</div>
</main>

`
$('#contenido').html(template)

		}
	})
</script>


<script type="text/javascript" src="js/validate.js"></script>

<?php include('templates/footer.php');?>


