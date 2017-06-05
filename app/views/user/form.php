<div>
	<h2>Adiciona Usuário</h2>	
	<form method="POST">


		<input type="text" name="name" placeholder="Nome" value="<?=isset($id) ? $user->getNome() : ""?>">
		<input type="email" name="email" placeholder="E-mail" value="<?=isset($id) ? $user->getEmail() : ""?>">
		<input type="password" name="password" placeholder="Senha" value="<?=isset($id) ? $user->getPassword() : ""?>">
		<input type="date" name="date_year" placeholder="Data de nacimento" value="<?=isset($id) ? $user->getDateYear() : ""?>">
        <input type="file" name="image" />
        <input type="<?=isset($id) ? "text" : "hidden" ?>" name="level" value="<?=isset($id) ? $user->getLevel() : ""?>">

		<input type="hidden" class="form-control" id="idUser" name="idUser" value="<?=isset($id) ? $user->getIdUser() : ""?>">

		<button type="submit">Salvar</button>


	</form>

</div>