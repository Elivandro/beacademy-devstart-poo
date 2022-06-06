<?php

    include "Produto.php";

    $produto1 = new Produto();
    $produto1->AlterarNome("Tenis para corrida");
    $produto1->AlterarValor(49.90);

    // $produto2 = new Produto();
    // $produto2->nome = "Calça Jeans";
    // $produto2->valor = -39.90;


    var_dump($produto1);
    // var_dump($produto2);