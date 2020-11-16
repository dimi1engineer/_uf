<?php
function ins($oo, $nome, $telefone, $endereco, $idade){
    $sql = "INSERT INTO cadastro(nome, telefone, endereco, idade) VALUES ('". $nome ."', '". $telefone ."', '". $endereco ."', ". $idade .")";
    
    if ($oo->query($sql) === TRUE) {
      echo "Cadastro feito com sucesso!";
    } else {
      echo "Error: " . $sql . "<br>" . $oo->error;
    }
}


function sel($oo){
    $sql = "SELECT id, nome, telefone, endereco, idade FROM cadastro";
    $aux = $oo->query($sql);

    if ($aux->num_rows > 0) {
    // output data of each row
    while($row = $aux->fetch_assoc()) {
        $resultado = "id: " . $row["id"]. 
        " - Name: " . $row["nome"]. 
        " - Tel: " . $row["telefone"].
        " - End: " . $row["endereco"].
        " - Idade: " . $row["idade"]. 
        "<br>";
        echo $resultado;
    }
    } else {
        echo "Sem cadastros";
    }
    
}
