<?php include './inc/header.php'; ?>
<?php 
    if(!empty($_POST["cpf"])){
        $paciente = Session::getPaciente($_POST["cpf"]);
    }
?>

<div class="row">
    <form class="form-horizontal" action="../Classes/Controller/Paciente.php<?php echo isset($paciente) ? "?editar=sim" : ""?>" method="post">
        <h2>Sintomas</h2>
        <div class="form-group">
            <?php foreach (Prioridades::$perguntas as $key => $value): ?>
                <div class="radio col-md-3">
                    <label>
                        <input type="radio" name="sintoma" value="<?php echo $value; ?>"><?php echo $key ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <h2>Paciente</h2>
        <div class="form-group">
            <label for="nome" class="col-md-1 control-label">Nome</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo isset($paciente) ? $paciente->getNome() : "";?>">
            </div>
        </div>
        <div class="form-group">
            <label for="cpf" class="col-md-1 control-label">CPF</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="<?php echo isset($paciente) ? $paciente->getCpf() : "";?>">
            </div>
        </div>
        <div class="form-group">
            <label for="idade" class="col-md-1 control-label">Idade</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade" value="<?php echo isset($paciente) ? $paciente->getIdade() : "";?>">
            </div>
        </div>
        <div class="form-group">
            <label for="telefone" class="col-md-1 control-label">Telefone</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="<?php echo isset($paciente) ? $paciente->getTelefone() : "";?>">
            </div>
        </div>
        <div class="form-group">
            <label for="contato" class="col-md-1 control-label">Contato</label>
            <div class="col-md-11">
                <input type="text" class="form-control" id="contato" name="contato" placeholder="Contato" value="<?php echo isset($paciente) ? $paciente->getContato() : "";?>">
            </div>
        </div>
        <input class="btn btn-block btn-info" type="submit" value="Enviar">
    </form>
</div>

<?php include './inc/footer.php'; ?>