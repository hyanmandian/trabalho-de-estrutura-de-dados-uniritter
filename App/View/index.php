<?php include './inc/header.php'; ?>

<?php 

$tabelaHash = new TabelaHash;
$paciente = new Paciente("A", 1, 19, 81678957, 33666678);
$tabelaHash->cadastrar($paciente);
$paciente = new Paciente("B", 2, 19, 81678957, 33666678);
$tabelaHash->cadastrar($paciente);
$paciente = new Paciente("C", 3, 19, 81678957, 33666678);
$tabelaHash->cadastrar($paciente);
$paciente = new Paciente("D", 4, 19, 81678957, 33666678);
$tabelaHash->cadastrar($paciente);
$paciente = new Paciente("E", 5, 19, 81678957, 33666678);
$tabelaHash->cadastrar($paciente);

print_r($tabelaHash->pesquisar(0));
?>

<?php include './inc/footer.php'; ?>