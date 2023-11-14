<?php

class ValorCorDao {
    function Buscar(){
        $con = GetConexao();
        $sql = "select * from valor_cor";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
