
<?php

	$form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	if($form){

		$image = $_FILES['image'];
	}
	
?>

<div class="col-sm-12">
	<form method="POST" enctype="multipart/form-data">

		<input type="file" name="image[]" multiple class="col-sm-12"/>
		<button type="submit" name="sendImage">Salvar</button>

	</form>

</div>