<?php
//DADOS PARA CONEXAO COM O BANCO DE DADOS LOCAL
//$dbHost		= "localhost";
//$dbName		= "sgt"; 
//$dbUser		= "root";
//$dbPassword	= "";
//--

//DADOS PARA CONEXAO COM O BANCO DE DADOS DOMINIO
$dbHost		= "50.116.87.250";
$dbName		= "adsix738_sgt"; 
$dbUser		= "adsix738_sgt";
$dbPassword	= "adsix2017";
//--


// CONEXAO COM O BANCO DE DADOS
$conexao = mysqli_connect($dbHost,$dbUser,$dbPassword);
mysqli_select_db($conexao, $dbName);
//--

// TÍTULO DAS PÁGINAS
//$titulo = "Painel de controle";
//--

    function conecta(){
        //DADOS PARA CONEXAO COM O BANCO DE DADOS LOCAL
        //$dbHost		= "localhost";
        //$dbName		= "sgt"; 
        //$dbUser		= "root";
        //$dbPassword	= "";
        //--

        //DADOS PARA CONEXAO COM O BANCO DE DADOS DOMINIO
        $dbHost		= "50.116.87.250";
        $dbName		= "adsix738_sgt"; 
        $dbUser		= "adsix738_sgt";
        $dbPassword	= "adsix2017";
        //--
        try{
            $conexao = new PDO('mysql:host='.$dbHost.';dbname='.$dbName , $dbUser, $dbPassword);
        } catch (Exception $ex) {
            $echo= $ex->getMessage();
        }
        return $conexao;

        
    }
?>
