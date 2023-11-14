<?php include 'include/headHTML.php';?>
<?php include 'dao/conexao.php';?>
<?php include 'dao/valor_altura_dao.php';?>
<?php include 'dao/valor_cor_dao.php';?>
<?php include 'dao/valor_tamanho_dao.php';?>
<?php include 'dao/raca_dao.php';?>

<header class="bg-secondary text-white">
    <div class="d-flex justify-content-center align-items-center" style="min-height: inherit">
        <h1><b>Sistema Identificador de Raças de Caninas</b></h1>
    </div>
</header>

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

    if(empty($resultados)){
        echo "Esta Raça não existe!";
    } else{
        foreach ($resultados as $resultado) { 
            echo "<br> Saida: " . $resultado['nome_raca'];
       }
    }
    
}
?>

<div class='container mt-4 mb-4'>
    <form action='' method='post' class='row g-3 d-flex justify-content-center'>
        <div class="row border mt-4 bg-secondary text-white">
            <div class="col">
            <h3 class="text-center text-md-start p-2">Formulário de identificação</h3>
            </div>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Altura</label>
            <select class='form-control' name='altura' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_altura_dao = new ValorAlturaDao();
                    $resultados = $valor_altura_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_altura"]; ?>" > <?php echo $resultado['tipo_valor_altura'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Cor</label>
            <select class='form-control' name='cor' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_cor_dao = new ValorCorDao();
                    $resultados = $valor_cor_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_cor"]; ?>" > <?php echo $resultado['tipo_valor_cor'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho de Pelos</label>
            <select class='form-control' name='pelos' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho da Pata</label>
            <select class='form-control' name='pata' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho da Cauda</label>
            <select class='form-control' name='cauda' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho do Focinho</label>
            <select class='form-control' name='focinho' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho da Cabeça</label>
            <select class='form-control' name='cabeca' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho das Orelhas</label>
            <select class='form-control' name='orelhas' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Tamanho dos Olhos</label>
            <select class='form-control' name='olhos' id=''>
                <option value=''>Selecione...</option>
                <?php
                    $valor_tamanho_dao = new ValorTamanhoDao();
                    $resultados = $valor_tamanho_dao->Buscar();
                    foreach ($resultados as $resultado) { ?>
                       <option value="<?php echo $resultado["id_valor_tamanho"]; ?>" > <?php echo $resultado['tipo_valor_tamanho'] ?> </option>;
                   <?php 
                   }
                ?>
            </select>
        </div>

        <div class='row pt-4 d-flex justify-content-center'>
            <div class='col-8 col-sm-4 col-md-4'>
                <input class='form-control bg-success text-light' type='submit' name='submit' value='Indentificar'>
            </div>
        </div>
    </form>
</div>


<footer class="bg-secondary text-white">
    <div class="d-flex justify-content-center align-items-center" style="min-height: inherit">
        <b>Sistema Identificador de Raças de Caninas</b>
    </div>
</footer>

<?php include 'include/footHTML.php'; ?>

