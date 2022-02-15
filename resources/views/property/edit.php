<h1>formulario de Edição :: imoveis</h1>

<?php

?>

<form action="<?= url('/imoveis/store'); ?>" method="post">

    <?= csrf_field(); ?>

    <label for="title">Título do imóvel</label>
    <input type="text" name="title" id="title" value="<?=$property->title;?>">
    <br>

    <label for="title">Descrição</label>
    <textarea type="text" name="description" id="description" cols="30" rows="10">value="<?=$property->title; ?>"</textarea>
    <br>

    <label for="title">Valor de locação</label>
    <input type="text" name="rental_price" id="rental_price" value="<?=$property->rental_price;?>">
    <br>

    <label for="title">Valor de compra</label>
    <input type="text" name="sale_price" id="sale_price" value="<?=$property->sale_price;?>">
    <br>

    <button type="submit">cadastrar imovel</button>
</form>