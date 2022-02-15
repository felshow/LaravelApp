<h1>formulario de cadastro :: imoveis</h1>

<form action="<?= url('/imoveis/store'); ?>" method="post">

    <?= csrf_field(); ?>

    <label for="title">Título do imóvel</label>
    <input type="text" name="title" id="title" placeholder="digite o titulo">
    <br>

    <label for="title">Descrição</label>
    <input type="text" name="description" id="description" placeholder="digite a descrição">
    <br>

    <label for="title">Valor de locação</label>
    <input type="text" name="rental_price" id="rental_price" placeholder="digite o valor de locação">
    <br>

    <label for="title">Valor de compra</label>
    <input type="text" name="sale_price" id="sale_price" placeholder="digite o valor da compra">
    <br>

    <button type="submit">cadastrar imovel</button>
</form>