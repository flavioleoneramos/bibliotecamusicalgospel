
    <h1>Tv Via Stream</h1>
    <p>Tenha acesso grátis a diversos canais abertos!</p>
    <?php
        require_once "_class/conexaoClass.php";
        $t = new conexaoClass();

        $t->mostrarTvOnline();

    ?>