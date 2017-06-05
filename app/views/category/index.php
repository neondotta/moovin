
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <div class="row">
                        <div class='col-md-10'>
                            Categoria
                        </div>

                        <div class="col-md-2">
                            <a href="/moovin/?r=category/insert">Incluir</a>
                        </div>
                    </div>

                </div>

                <?php
                foreach ($list as $category):
                    ?>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <div class="row">

                                <div class="col-md-10">
                                    <?=$category->getName()?>
                                </div>

                                <div class="col-md-1">
                                    <a href="/moovin/?r=category/edit&id=<?=$category->getIdTVLUser()?>">Editar</a>
                                </div>

                                <div class="col-md-1">
                                    <a href="/moovin/?r=category/delete&id=<?=$category->getIdTVLUser()?>">Excluir</a>
                                </div>

                <?php
                    endforeach;
                ?>
            </div>
        </div>

    </div>
</div>
<a href="/travel/">Voltar</a>