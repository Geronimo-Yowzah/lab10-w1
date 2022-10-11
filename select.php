<html>
<body>
    <?php
        if(empty($_COOKIE["lang"])){
            $lang = $_GET["language"];
            setcookie("lang",$lang,time()+10);
        }
        if(!isset($_COOKIE["lang"])){
            $lang = $_GET["language"];
            setcookie("lang",$lang,time()+10);
            echo $lang;
        }
        else{
            $lang = $_GET["language"];
            setcookie("lang",$lang,time()+10);
            echo $lang;
        }
        
    ?>
</body>
</html>