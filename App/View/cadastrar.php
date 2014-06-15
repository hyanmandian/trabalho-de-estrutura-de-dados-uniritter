<?php include './inc/header.php'; ?>
<div class="row">
    <form class="form-horizontal">
        <h2>Diagnostico</h2>
        <div class="form-group">
            <?php foreach (Prioridades::$perguntas as $key => $value): ?>
                <div class="radio col-md-3">
                    <label>
                        <input type="radio" name="diagnostico" value="<?php echo $key . ";" . $value ?>"><?php echo $key ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <h2>Paciente</h2>
        <div class="form-group">
            <label for="nome" class="col-md-1 control-label">Nome</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="cpf" class="col-md-1 control-label">CPF</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
        </div>
        <div class="form-group">
            <label for="idade" class="col-md-1 control-label">Idade</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="idade" placeholder="Idade">
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-md-1 control-label">Telefone</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="telefone" placeholder="Telefone">
            </div>
        </div>
        <div class="form-group">
            <label for="contato" class="col-md-1 control-label">Contato</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="contato" placeholder="Contato">
            </div>
        </div>
        <h2>Consulta</h2>
        <div class="form-group">
            <label for="data" class="col-md-1 control-label">Data</label>
            <div class="col-md-11">
                <input type="date" class="form-control" id="data" placeholder="Data">
            </div>
        </div>
        <input class="btn btn-block btn-info" type="submit" value="Enviar">
    </form>
</div>

<?php include './inc/footer.php'; ?>