<?php include './inc/header.php'; ?>

<?php include_once DOCROOT . 'Classes/Model/Session.php'; ?>
<div class="row">
    <form class="form-horizontal" action="../View/cadastrar.php" method="post">
        <div class="pesquisa">
            <h2>Pesquisar paciente</h2>
            <div class="form-group">
                <label for="cpf" class="col-md-1 control-label">CPF</label>
                <div class="col-md-11">
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
                </div>
            </div>
            <input class="btn btn-block btn-info" type="submit" value="Enviar">
        </div>
    </form>
</div>
<?php include './inc/footer.php'; ?>