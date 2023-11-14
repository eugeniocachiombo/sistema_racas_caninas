<?php

class ValorTamanhoDao {
    function Buscar(){
        $con = GetConexao();
        $sql = "select * from valor_tamanho";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
