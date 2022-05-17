<?php
    $link = htmlspecialchars($_GET['linkTv']);
    $imagem = htmlspecialchars($_GET['imagemTv']);   
    $nome = htmlspecialchars($_GET['nomeTv']);
    $idTv = htmlspecialchars($_GET['idTv']);
?>

<head>
    
    <!-- http://videojs.com/ -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/video.js/6.2.1/video-js.min.css" rel="stylesheet">
    <script src="///cdnjs.cloudflare.com/ajax/libs/video.js/6.2.1/video.min.js"></script>
    <style>
        section#displayTv{
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<section id="displayTv">
    <h3><img src="<?php echo $imagem;?>" width="50px" height="50px"></br><em>&nbsp;Canal <?php echo $nome;?></em></h3></br>
    <video
    id="<?php echo $idTv;?>"
    width="640"
    height="360"
    class="video-js vjs-default-skin"
    controls
    poster="<?php echo $imagem; ?>">
    <source
        src="<?php echo $link; ?>"
        type="application/x-mpegURL">
    </video>

    <!-- http://videojs.com/plugins/ -->
    <!-- https://npmjs.org/package/videojs-contrib-hls -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.7.0/videojs-contrib-hls.min.js"></script>
    <script>
    var player = videojs('<?php echo $idTv;?>');
    player.play();
    </script>
</section>
