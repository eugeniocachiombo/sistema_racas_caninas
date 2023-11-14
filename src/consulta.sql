SELECT raca.nome_raca FROM raca
inner join atributos on raca.id_raca = atributos.id_raca
inner join valor_altura on atributos.altura = valor_altura.id_valor_altura 
inner join valor_cor on atributos.cor = valor_cor.id_valor_cor
/*inner join valor_tamanho as pelos on atributos.pelos  = pelos.id_valor_tamanho
inner join valor_tamanho as pata on atributos.pata = pata.id_valor_tamanho
inner join valor_tamanho as cauda on atributos.cauda = cauda.id_valor_tamanho
inner join valor_tamanho as focinho on atributos.focinho = focinho.id_valor_tamanho
inner join valor_tamanho as cabeca on atributos.cabeca = cabeca.id_valor_tamanho
inner join valor_tamanho as orelhas on atributos.orelhas = orelhas.id_valor_tamanho
inner join valor_tamanho as olhos on atributos.olhos = olhos.id_valor_tamanho*/

