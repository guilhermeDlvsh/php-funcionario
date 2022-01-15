<?php
function findId($funcionarios, $id) {
    foreach($funcionarios as $func) {
        if($func['id'] == $id) {
            return $func;
        }
    }

return null;
}

$funcionarios = [
    ['id' => 4, 'nome' => 'João', ' salario' => 1500], 
    ['id' => 21, 'nome' => 'José', 'salario' => 1230,50],
    ['id' => 34, 'nome' => 'Maria', 'salario' => 1678,54]
    
        
    ];

    $id = $_POST['id'];
    $func = findId($funcionarios , $id);
    if (is_null($func)){
        echo 'Funcionário não encontrado';
        die();
    }    

$funcionario = findId($funcionarios, $id);

    echo $func['nome'] . ', R$ ' . number_format($func['salario'], 2 );




?>