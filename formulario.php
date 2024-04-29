<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$para = "arturmadeira2@gmail.com";
$assunto  = "Coleta de dados- site";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."mensagem: ".$mensagem;

$cabeca = "From: arturmadeira2@gmail.com"."\n"."Reply-to" .$email."\n"."X=Mailer:PHP/".phpversion();
if(mail($para,$assunto,$corpo,$cabeca,$mensagem)){
    echo("E-mail enviado com sucesso!");

}else{
    echo("Houve um erro ao enviar email!");
}

?>
