<h1>listagem de produtos</h1>

<p><a href="<?= url('/imoveis/novo'); ?>">cadastrar novo imovel</a></p>

<?php


if(!empty($properties)){

    echo "<table>";

    echo "<tr>
            <td>titulo</td>
            <td>valor de locação</td>
            <td>valor de compra</td>
        </tr>";

    foreach($properties as $property){

        $linkReadMode = url('/imoveis/' . $property->name);
        $linkEditItem = url('/imoveis/editar/{name}' . $property->name);
        $linkRemoveItem = url('/imoveis/remover/{name}' . $property->name);

        echo "<tr>
            <td>{$property->title}</td>
            <td>R$". number_format($property->rental_price, 2, ',', '.') . "</td>
            <td>R$". number_format($property->sale_price, 2, ',', '.') . "</td>
            <td><a href='{$linkReadMode}'>Ver mais</a> | <a href='{$linkEditItem}'>editar</a> | <a href='{$linkRemoveItem}'>Remover</a></td>
        </tr>";
    }

    echo "</table>";
}