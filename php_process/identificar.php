<?php
    if(isset($_POST["submit"])){

        $altura = $_POST["altura"];
        $cor = $_POST["cor"];
        $pelos = $_POST["pelos"];
        $pata = $_POST["pata"];
        $cauda = $_POST["cauda"];
        $focinho = $_POST["focinho"];
        $cabeca = $_POST["cabeca"];
        $orelhas = $_POST["orelhas"];
        $olhos = $_POST["olhos"];

        $atributos = new Atributos ($altura, $cor, $pelos, $pata, $cauda, $focinho, $cabeca, $orelhas, $olhos);
        $raca_dao = new RacaDao();
        $resultados = $raca_dao->Buscar($atributos);

        if(empty($resultados)){ ?>
            <div class="row border mt-4 bg-danger text-white" style="border-radius: 20px">
                <div class="info">
                    <h5 class="text-center p-2"><b>Esta Raça não existe</b></h5>
                </div>
            </div>
        <?php
        } else{
            foreach ($resultados as $resultado) { ?>
                <div class="row border mt-4 bg-success text-white" style="border-radius: 20px">
                    <div class="info">
                        <h3 class="text-center p-2"><b><?php echo $resultado['nome_raca']; ?></b></h3>
                    </div>
                </div>

                <div class="row border mt-4" style="border-radius: 20px">
                    <div class="col-5">
                        <?php 
                            $resultado_tratado = str_replace(" ", "_", $resultado['nome_raca']);
                        ?>
                        <img src="assets/img/<?php echo $resultado_tratado.'.jpg'; ?>" alt="">
                    </div>
                </div>
           <?php }
        }
        
    }
    ?>