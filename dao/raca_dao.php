<?php

class RacaDao {
    function Buscar($atributos){
        $con = GetConexao();
        $sql = "select raca.nome_raca from raca
        inner join atributos on raca.id_raca = atributos.id_raca
        inner join valor_altura on atributos.altura = valor_altura.id_valor_altura 
        inner join valor_cor on atributos.cor = valor_cor.id_valor_cor
        inner join valor_tamanho as pelos on atributos.pelos  = pelos.id_valor_tamanho
        inner join valor_tamanho as pata on atributos.pata = pata.id_valor_tamanho
        inner join valor_tamanho as cauda on atributos.cauda = cauda.id_valor_tamanho
        inner join valor_tamanho as focinho on atributos.focinho = focinho.id_valor_tamanho
        inner join valor_tamanho as cabeca on atributos.cabeca = cabeca.id_valor_tamanho
        inner join valor_tamanho as orelhas on atributos.orelhas = orelhas.id_valor_tamanho
        inner join valor_tamanho as olhos on atributos.olhos = olhos.id_valor_tamanho
        where 
        altura = ? and cor = ? and pelos = ? and
        pata = ? and cauda = ? and focinho = ? and
        cabeca = ? and orelhas = ? and olhos = ?";
        $stmt = $con->prepare($sql);
        $stmt->bindValue(1, $atributos->GetAltura() );
        $stmt->bindValue(2, $atributos->GetCor() );
        $stmt->bindValue(3, $atributos->GetPelos() );
        $stmt->bindValue(4, $atributos->GetPata() );
        $stmt->bindValue(5, $atributos->GetCauda() );
        $stmt->bindValue(6, $atributos->GetFocinho() );
        $stmt->bindValue(7, $atributos->GetCabeca() );
        $stmt->bindValue(8, $atributos->GetOrelhas() );
        $stmt->bindValue(9, $atributos->GetOlhos() );
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
