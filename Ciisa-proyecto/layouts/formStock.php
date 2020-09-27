<?php 

$place = $_GET['p'];


$template =
"
<main  class='mt-5'>
	<div id='content' class='container'>
		<form class='form-group'>
			<label>Sucursal</label>
			<input type='text' name='place' value=".$place." readonly class='mb-3 form-control'>
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
					<!-- Agrege min a todo lo que tuviera opcion de numero, cambien el type de stock a number pq antes estaba en text,
					y en el scrip agrege que te marque error al tipear un numero negativo -->	
				</div>
				<button type='button' class='mt-3 btn btn-block btn-primary' id='btn' name='btn'>Enviar</button>
			</div>
		</form>	
	</div>
</main>
";

echo $template;