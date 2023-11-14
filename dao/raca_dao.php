<?php

class RacaDao {
    function Buscar(){
        $con = GetConexao();
        $sql = "select * from raca";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
