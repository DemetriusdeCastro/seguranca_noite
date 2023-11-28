<?php

session_start();

include('validarlogin.php');

$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : '';

$url = file_get_contents('https://www.receitaws.com.br/v1/cnpj/'.$cnpj);
$dados = json_decode($url);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<?php

			echo "<h1>".$dados->nome."</h1>";
			echo "<h2>".$dados->fantasia."</h2>";
			echo "<h2>CNPJ: ".$dados->cnpj."</h2>";
			echo "<h2>Endereço</h2>";
			echo "Logradouro: ".$dados->logradouro.", ";
			echo "Nº: ".$dados->numero." ";
			echo "Nº: ".$dados->complemento." ";
			echo "Bairro: ".$dados->bairro."<br>";
			echo "Município: ".$dados->municipio." - ";
			echo "UF: ".$dados->uf."<br>";
			echo "CEP: ".$dados->cep."<br>";
			echo "<h2>Contatos</h2>";
			echo "Telefone: ".$dados->telefone."<br>";
			echo "E-mail: ".$dados->email."<br>";
			echo "<h2>Atividades</h2>";
			echo "<b>Atividade Principal</b><br>";
			echo "Código: ".$dados->atividade_principal[0]->code." - ";
			echo $dados->atividade_principal[0]->text."<br><br>";
			echo "<b>Atividades Secundárias</b><br>";
			for ($secundarias=0; $secundarias < count($dados->atividades_secundarias) ; $secundarias++) { 
				$atividade_secundaria = $dados->atividades_secundarias[$secundarias];
				echo "<b>Código</b>: ".$atividade_secundaria->code." - ";
				echo $atividade_secundaria->text."<br>";
			}
			echo "<h2>Outras Informações</h2>";
			echo "Natureza Jurídica: ".$dados->natureza_juridica."<br>";
			echo "Abertura: ".$dados->abertura."<br>";
			echo "Situação: ".$dados->situacao."<br>";
			echo "Data Situação: ".$dados->data_situacao."<br>";
			echo "Porte: ".$dados->porte."<br>";
			echo "Status: ".$dados->status."<br>";
			echo "Última Atualização: ".$dados->ultima_atualizacao."<br>";
			echo "Capital Social: ".number_format(($dados->capital_social),2,',','.')."<br>";
			echo "<h2>Sócios</h2>";
			for ($socios=0; $socios < count($dados->qsa) ; $socios++) { 
				$socio = $dados->qsa[$socios];
				echo "<b>Nome</b>: ".$socio->nome." - ";
				echo "<b>Cargo</b>: ".$socio->qual."<br>";
			}
		?>
		<br>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>