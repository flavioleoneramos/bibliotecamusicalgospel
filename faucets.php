<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/styleAll.css">
    <link rel="stylesheet" href="_css/styleResponsive.css">
    <link rel="stylesheet" href="_css/styleButton.css">
    <link rel="stylesheet" href="_css/styleLink.css">
    <link rel="stylesheet" href="_css/styleLinkMenu.css">
    <title>Biblioteca Musical Gospel</title>

    <style>
        section#sectionFaucets{
            width: 727px;
            margin: auto;
            text-align: center;
            position: relative;
        }

        section#sectionFaucets figure.faucetList{
            position: relative;
            text-align: center;
            margin: auto;
            
        }

        section#sectionFaucets figure.faucetList figcaption{
            position: absolute;
            opacity: 0;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 99%;
            color: white;
            font-weight: bold;
            font-size: 15pt;
            text-align: center;
            transition: 1s;
            
        }

        section#sectionFaucets figure.faucetList:hover figcaption{
            opacity: 1;
            transition: 1s;
        }

        section#sectionFaucets figure.faucetList figcaption p{
            text-align: center;
            max-width: 700px;
            margin: auto;
        }

        #faucet{
            text-decoration: underline;
        }

        @media screen and (max-width: 800px){
            section#sectionFaucets figure.faucetList figcaption{
                opacity: 1;
                box-shadow: 8px 8px 8px 1px white;
            }

            section#sectionFaucets{
            width: 100%;
            margin: auto;
            text-align: center;
            position: relative;
        }
        }

        ul.carteiras{
            list-style: none;
        }

        ul.carteiras li{
            margin-bottom: 10px;
            margin-top: 10px;
        }

        a.wallet{
            text-decoration: none;
            color: #8a0015;
            margin: 10px;
            font-size: 18pt;
        }

        a.wallet:hover{
            text-decoration: underline;
            color: #e30224;
        }
        
    </style>
</head>
<body>
    
<div id="interface">
<header id="headerAll">
    <?php 
        require_once '_fonts/headerAll.php';
        
    ?>
</header>
<section id="sectionFaucets">
    <p><em>Ganhe criptomoedas gratuitamente, realizando pequenas tarefas como respoder questionários, dando suas
        sinceras opniões, experimentando novos e antigos apps na playstore, indicando amigos e resolvendo captchas para
        comprovar que você não é um robô.</em> Simples assim!</p></br>

        <h3>Como receber as criptomoedas ganhas nesses faucets?</h3></br>
        <p><em>Quando você atingir o limite para saque, basta retirar para uma das dezenas de carteira de criptomoedas
            disponíveis na internet. Com elas armazenadas em sua carteira pessoal, você deve retirar seus ativos
            para uma corretora para assim poder converter em Real $BRL e sacar para sua conta bancária.
        </em></p></br>
        <ul class="carteiras">
            <h3>Lista de algumas Wallets de criptomoedas</h3>
            <li>
                <a href="" target="blank" class="wallet">Binance</a>
            </li>
            <li>
                <a href="" target="blank" class="wallet">FaucetPay</a>
            </li>
            <li>
                <a href="" target="blank" class="wallet">Coinbase</a>
            </li>
        </ul>
        <h2>Veja abaixo alguns sites que lhe pagam em criptomoedas pelo seu
            tempo dedicado.
        </h2>
    <?php 
        require_once '_fonts/sectionFaucets.php';
    ?>
</section>
<footer id="footerAll">
    <?php 
        require_once '_fonts/footerAll.php';
    ?>
</footer>
</div>
    <script src="_js/script.js"></script>
</body>
</html>

