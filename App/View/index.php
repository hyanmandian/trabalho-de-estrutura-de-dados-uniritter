<?php include './inc/header.php'; ?>
<div class="row">
    <form class="form-horizontal" action="" method="post">
        <div class="form-group">
            <div class="col-md-offset-3 col-md-3">
                <div class="checkbox">
                    <label>
                        <input name="cadastro" type="radio" value="1"> Possui cadastro
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="checkbox">
                    <label>
                        <input type="radio" name="cadastro" value="0"> Não possui cadastro
                    </label>
                </div>
            </div>
        </div>
        <div class="pesquisa">
            <h2>Pesquisar paciente</h2>
            <div class="form-group">
                <label for="cpf" class="col-md-1 control-label">CPF</label>
                <div class="col-md-11">
                    <input type="text" class="form-control" id="cpf" placeholder="CPF">
                </div>
            </div>
            <input class="btn btn-block btn-info" type="submit" value="Enviar">
        </div>
    </form>
</div>
<?php include './inc/footer.php'; ?>