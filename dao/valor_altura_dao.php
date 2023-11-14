<?php

class ValorAlturaDao {
    function Buscar(){
        $con = GetConexao();
        $sql = "select * from valor_altura";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
