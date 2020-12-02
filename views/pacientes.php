<style>
    table{
        border: 1px solid black;
        border-collapse: collapse;   
    }
    
    th, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 2px 5px;
    }
</style>

<table padding: 5px;>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Cidade</th>
        <th>UF</th>
        <th>Bairro</th>
        <th>Logradouro</th>
        <th>Número</th>
    </tr>

<?php
    while($linha = mysqli_fetch_array($consulta)){
        echo '<tr><td>'.$linha['id_paciente'].'</td>';
        echo '<td>'.$linha['nome'].'</td>';
        echo '<td>'.$linha['telefone'].'</td>';
        echo '<td>'.$linha['celular'].'</td>';
        echo '<td>'.$linha['cidade'].'</td>';
        echo '<td>'.$linha['uf'].'</td>';
        echo '<td>'.$linha['bairro'].'</td>';
        echo '<td>'.$linha['logradouro'].'</td>';
        echo '<td>'.$linha['num_logradouro'].'</td></tr>';
    }
?>

</table>