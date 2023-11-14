<?php include 'include/headHTML.php';?>
<?php include 'dao/conexao.php';?>
<?php include 'dao/valor_altura_dao.php';?>
<?php include 'dao/valor_cor_dao.php';?>
<?php include 'dao/valor_tamanho_dao.php';?>
<?php include 'dao/raca_dao.php';?>

<h1>Sistema Identificador de Raças de Cães</h1>

<?php
if(isset($_POST["submit"])){
    echo "<br> Saida: " . $_POST["altura"];
    echo "<br> Saida: " . $_POST["cor"];
    echo "<br> Saida: " . $_POST["pelos"];
    echo "<br> Saida: " . $_POST["pata"];
    echo "<br> Saida: " . $_POST["cauda"];
    echo "<br> Saida: " . $_POST["focinho"];
    echo "<br> Saida: " . $_POST["cabeca"];
    echo "<br> Saida: " . $_POST["orelhas"];
    echo "<br> Saida: " . $_POST["olhos"];

    $raca_dao = new RacaDao();
    $resultados = $raca_dao->Buscar();
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

<?php include 'include/footHTML.php'; ?>