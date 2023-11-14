<?php include 'include/headHTML.php';?>
<?php include 'dao/conexao.php';?>
<?php include 'dao/valor_altura_dao.php';?>
<?php include 'dao/valor_cor_dao.php';?>
<?php include 'dao/valor_tamanho_dao.php';?>
<?php include 'dao/raca_dao.php';?>
<?php include 'class/atributos.php';?>

<div class='container mt-4 mb-4'>
    <?php include 'php_process/identificar.php';?>
    <form action='' method='post' class='row g-3 d-flex justify-content-center needs-validation' >
        <div class="row border mt-4 bg-secondary text-white">
            <div class="col">
            <h3 class="text-center text-md-start p-2">Formulário de identificação</h3>
            </div>
        </div>

        <div class='col-8 col-sm-4 col-md-4'>
            <label for=''>Altura</label>
            <select required class='form-control' name='altura' id=''>
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
            <select required class='form-control' name='cor' id=''>
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
            <select required class='form-control' name='pelos' id=''>
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
            <select required class='form-control' name='pata' id=''>
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
            <select required class='form-control' name='cauda' id=''>
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
            <select required class='form-control' name='focinho' id=''>
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
            <select required class='form-control' name='cabeca' id=''>
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
            <select required class='form-control' name='orelhas' id=''>
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
            <select required class='form-control' name='olhos' id=''>
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
                <button type="submit" class="form-control button" name="btn_indentificar" id="btn_indentificar">
                    <span id="texto_indentificar">Indentificar</span>
                    <span id="spinner" class="spinner-grow spinner-grow-sm" role="status"
                        aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </form>
    <p class="text-center text-md-start mt-3"> <i class="fab fa-dev me-2" style="font-size: 30px"></i><b>Eugénio Cachiombo</b></p>
</div>

<?php include 'include/footHTML.php'; ?>
<script src="assets/js/obrigar_campos.js"></script>
