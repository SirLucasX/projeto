<?php 
include("conexao.php");

    switch($_REQUEST["acao"]){

        case "cadastrar":
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
       $qtde = filter_input(INPUT_POST, 'qtde', FILTER_SANITIZE_NUMBER_INT);
       $qtdv = filter_input(INPUT_POST, 'qtdv', FILTER_SANITIZE_NUMBER_INT);
       $valorvenda = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT);
       $datacompra = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);

       $result_produto = "INSERT INTO produtos (nome, estoque, venda, valor, data_compra) 
       VALUES ( '$nome', '$qtde', '$qtdv', '$valorvenda', '$datacompra')";

       $resultado_produto= mysqli_query($conn, $result_produto);

       if($resultado_produto==true){
        print "<script>alert('Produto cadastrado com sucesso');</script>";
        print "<script>location.href='../dashboard/pages/tables.html';</script>";
       }
       break;
        }
    
             
?>