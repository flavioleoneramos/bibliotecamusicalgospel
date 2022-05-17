<h1>Cursos Hotmart</h1>
    <p>Tenha acesso a cursos com selo de qualidade <em>Hotmart</em>!</p>
<?php
 require_once "_class/conexaoClass.php";
 $cursoConn = new conexaoClass();
 
 $cursoConn->mostrarCursos();

?>