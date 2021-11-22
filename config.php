<?php
$dbHost ='Loacalhost';
$dbUsername ='root';
$dbPassword = '';
$dbName = 'formulário-tosta';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

if($conexao->connect_errno)
{
    echo "Erro";
}

else 
{
    echo "Conexao efetuada com sucesso";
}
?>