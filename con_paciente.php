<?php 

#mysqli
$servidor = "localhost";
$usuario = "";
$senha = "";
$database = "agendex_bd";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

$query = "select * from pacientes";

$consulta = mysqli_query($conexao, $query);

//$query = "INSERT INTO pacientes(nome, data_nasc, profissao, estado_civil, telefone, celular, cidade, bairro, logradouro, cep, num_logradouro, uf) VALUES('Igor Benato', '1999-09-30', 'programador', 'solteiro', '+55(43)3033-2806', '+55(43)99610-6356', 'Apucarana', 'Igrejinha', 'Saul Guimarães da Costa', '86802670', '150', 'PR')";

//$executar = mysqli_query($conexao, $query);

//if($executar){
//    echo "Executado com sucesso (insert)<br>";
//}else{
//    echo "Erro: " . mysqli_error($conexao);
//}



/*<?php
    while($linha = mysqli_fetch_array($consulta)){
        echo '<tr><td>'.$linha['id_paciente'].'</td>';
        echo '<td>'.$linha['nome'].'</td>';
        echo '<td>'.$linha['data_nasc'].'</td>';
        echo '<td>'.$linha['telefone'].'</td>';
        echo '<td>'.$linha['celular'].'</td>';
        echo '<td>'.$linha['cidade'].'</td>';
        echo '<td>'.$linha['uf'].'</td>';
        echo '<td>'.$linha['bairro'].'</td>';
        echo '<td>'.$linha['logradouro'].'</td>';
        echo '<td>'.$linha['num_logradouro'].'</td></tr>';
    }
?>*/