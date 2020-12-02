<?php

include 'con_paciente.php';
include 'header.php';

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}else{
    $pagina = 'home';
}


if($pagina =='consultas'){
    include 'views/consultas.php';
}elseif($pagina =='pacientes'){
    include 'views/pacientes.php';
}elseif($pagina =='usuarios'){
    include 'views/usuarios.php';
}else{
    include 'views/home.php';
}

include 'footer.php';

