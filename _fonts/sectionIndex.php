<style>
    ul#index{
        text-decoration: none;
    }

    ul#index li{
        display: inline-block;
    }

    div#playlist{
        text-align: center;
    }

    ul#playlsitLi{
        list-style: none;
        width: 100%;
        margin: auto;
    }

    ul#playlsitLi li{
        margin: 20px;
    }

    a#right{
        float: right;
        margin-right: 20px;
    }

</style>
<ul id="index">
    <li>
        <?php
            require_once "headerIndex.php";
        ?>
    </li>
    <li>

    </li>
    <li>
        <?php
            require_once "section2Index.php";
        ?>
    </li>
    <li>

    </li>
</ul>