<div>
    <h2>Adiciona Categoria</h2>
    <form method="POST">

        <label for="name">Nome da Categoria</label>
        <input type="text" name="name" placeholder="Name" value="<?=isset($id) ? $product->getCategory() : ""?>">

        <input type="hidden" class="form-control" id="idCategory" name="idCategory" value="<?=isset($id) ? $user->getIdCategory() : ""?>">

        <button type="submit">Salvar</button>


    </form>

</div>