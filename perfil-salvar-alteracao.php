<?php 

include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];
$descricao = $_POST['descricao'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$youtube = $_POST['youtube'];
$senha = $_POST['senha'];
//$foto = $_POST['foto'];
$fundo = $_POST['fundo'];

//criar imagem

$pasta = "img/";
$nomeDoArquivo = ($_FILES["foto"]["name"]);
$extensao = explode(".", $nomeDoArquivo);
$nomeNovo = round(microtime(true)) . "." . end($extensao);


move_uploaded_file($_FILES["foto"]["tmp_name"],$pasta . $nomeNovo);


//fim criar imagem

$sql = "update t_perfil SET nome=[$nome],email=[$email],profissao=[$profissao],descricao=[$descricao],instagram=[$instagram],twitter=[$twitter],facebook=[$facebook],linkedin=[$linkedin],youtube=[$youtube],senha=[$senha],foto=[$foto],fundo=[$fundo]";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>