
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <div class="row">
                        <div class='col-md-10'>
                            Carrinho
                        </div>
                    </div>

                </div>

                <?php
                    foreach ($list as $cartProduct):
                ?>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <div class="row">

                                <div class="col-md-10">
                                    Nome: <?=$cartProduct->getIdProduct()->getName()?>
                                </div>
                                <div class="col-md-10">
                                    Descrição: <?=$cartProduct->getIdProduct()->getDescription()?>
                                </div>
                                <div class="col-md-10">
                                    Altura: <?=$cartProduct->getIdProduct()->getHeight()?>
                                    Largura: <?=$cartProduct->getIdProduct()->getWidth()?>
                                    Comprimento: <?=$cartProduct->getIdProduct()->getLength()?>
                                </div>
                                <div class="col-md-10">
                                    Valor da promoção: <?=$cartProduct->getIdProduct()->getValuePromotion()?>
                                </div>
                                <div class="col-md-10">
                                    Valor: R$<?=$cartProduct->getIdProduct()->getPrice() * $cartProduct->getQuantity()?>
                                </div>
                                <div class="col-md-10">
                                    Quantidade:
                                    <form method="POST"
                                          action="/moovin/?r=cartProduct/updateQuantityProduct&idProduct=<?=$cartProduct->getIdProduct()->getIdProduct()?>&idCart=<?=$cartProduct->getIdCart()?>">
                                        <input type="number" name="quantity" value="<?=$cartProduct->getQuantity()?>">
                                        <input type="submit" value="Cadastrar" class="btn btn-primary">
                                    </form>
                                </div>

                                <div class="col-md-1">
                                    <a href="/moovin/?r=product/delete&id=<?=$cartProduct->getIdProduct()->getIdProduct()?>">Excluir</a>
                                </div>
                        </li>
                    </ul>
                <?php
                    endforeach;
                ?>

            </div>

        </div>

    </div>
</div>

<a href="/moovin/">Voltar</a>