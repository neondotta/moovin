<div>
	<h2>Adiciona Produto</h2>
	<form method="POST" enctype="multipart/form-data">


		<input type="text" name="name" placeholder="Nome do Produto" value="<?=isset($id) ? $product->getName() : ""?>">
		<input type="text" name="description" placeholder="Descrição do produto" value="<?=isset($id) ? $product->getDescription() : ""?>">
		<input type="text" name="price" placeholder="Preço do produto" value="<?=isset($id) ? $product->getPrice() : ""?>">
		<input type="number" name="height" placeholder="Altura do produto (Medida em centimetro)" value="<?=isset($id) ? $product->getHeight() : ""?>">
		<input type="number" name="width" placeholder="Largura do produto (Medida em centimetro)" value="<?=isset($id) ? $product->getWidth() : ""?>">
		<input type="number" name="length" placeholder="Comprimento do produto (Medida em centimetro)" value="<?=isset($id) ? $product->getLength() : ""?>">
		<input type="number" name="value_promotion" placeholder="Promoção do produto (Valor de porcentagem)" value="<?=isset($id) ? $product->getValuePromotion() : ""?>">
        <label for="active">
            <p>Produto ativo?</p>
        </label>
        <select name="active" id="">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
        <input type="number" name="quantity" placeholder="Quantidade de produto no estoque" value="<?=isset($id) ? $product->getQuantity() : ""?>">
        <label for="idCategory">
            <p>Categoria do produto</p>
        </label>
        <select name="idCategory" id="">
            <?php
                foreach ($listaCategory as $category):
            ?>
                <option value="<?=$category->getIdCategory()?>"><?=$category->getName()?></option>
            <?php
                endforeach;
            ?>
        </select>

        <input type="file" name="image[]" multiple />

		<input type="hidden" class="form-control" id="idProduct" name="idProduct" value="<?=isset($id) ? $product->getIdProduct() : ""?>">

		<button type="submit">Salvar</button>


	</form>

</div>