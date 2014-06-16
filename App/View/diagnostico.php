<?php include './inc/header.php'; ?>
<?php require DOCROOT . 'Classes/Model/Session.php'; ?>
<?php require DOCROOT . 'Classes/Model/Prioridades.php'; ?>
<?php
$paciente = Session::get("ArvoreHeap");
if (empty($paciente)) {
    header("location: index.php");
}
$paciente = array_shift($paciente);
$cor = $paciente[0];
$paciente = $paciente[1];
$cor = Prioridades::getCor($cor);

$consultas = Session::get("Consultas");
$informacoes = new TabelaHash();
$informacoes = $informacoes->pesquisar($paciente);

foreach($informacoes as $informacao){
    if($informacao->getCpf() == $paciente){
        $informacoes = $informacao;
        break;
    }
}
?>
<div class="row">
    <h2>Informações do paciente</h2>
    <table class="table table-responsive">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>Contato</th>
        </tr>
        <tr>
            <td><?php echo $informacoes->getNome()?></td>
            <td><?php echo $informacoes->getCpf()?></td>
            <td><?php echo $informacoes->getIdade()?></td>
            <td><?php echo $informacoes->getTelefone()?></td>
            <td><?php echo $informacoes->getContato()?></td>
        </tr>
    </table>
    <?php if(!empty($consultas) && $consultas[0]["cpf"] == $paciente):?>
    <div class="alert alert-warning clearfix">
        <h2>Consultas anteriores do paciente</h2>
        <?php foreach ($consultas as $consulta): ?>
            <?php if ($consulta["cpf"] == $paciente): ?>
                <div class="col-md-4">
                    <ul>
                        <li>Diagnostico: <?php echo $consulta["diagnostico"] ?></li>
                        <li>Data de atendimento: <?php echo $consulta["data"] ?></li>
                        <li>Prioridade: <?php echo $consulta["cor"] ?></li>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <form class="form-horizontal" action="../Classes/Controller/Consultas.php" method="post">
        <h2>Cadastro de consulta do paciente - <?php echo $paciente; ?></h2>
        <div class="form-group">
            <label for="diagnostico" class="col-md-1 control-label">Diagnostico</label>
            <div class="col-md-11">
                <input required="required" type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="Diagnostico">
            </div>
        </div>
        <div class="form-group">
            <label for="data" class="col-md-1 control-label">Data da consulta</label>
            <div class="col-md-11">
                <input required="required" type="text" class="form-control" id="data" name="data" placeholder="Data da consulta" value="<?php echo date("d/m/Y H:i:s"); ?>">
            </div>
            <input type="hidden" class="form-control" id="cor" name="cor" value="<?php echo $cor ?>">
            <input type="hidden" class="form-control" id="cpf" name="cpf" value="<?php echo $paciente ?>">
        </div>
        <input class="btn btn-block btn-info" type="submit" value="Enviar">
    </form>
</div>


<?php include './inc/footer.php'; ?>