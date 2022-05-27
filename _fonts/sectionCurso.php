<style>
    figure#figureCurso{
        position: relative;
        margin: auto;
        width: 650px;
        text-align: center;
    }

    figure#figureCurso figcaption{
        position: absolute;
        top: 0;
        left: 0;
        width: 99%;
        height: 99%;
        margin: auto auto auto 4px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        font-size: 16pt;
        font-weight: bold;
    }
</style>

<h1>Cursos Hotmart</h1>
    <p>Tenha acesso a cursos com selo de qualidade <em>Hotmart</em>!</p>
<?php
 require_once "_class/conexaoClass.php";
 $cursoConn = new conexaoClass();
 
 $cursoConn->mostrarCursos();
 

?>