<!DOCTYPE html>
<head> </head>
<body>
    <?php
        function loginfc($zz, $info){
            require("mandalorian.php");
            $msg="hola";
            echo "<script type='text/javascript'>alert('$msg');</script>";
            header("Location: mandalorian.php");
            if($zz == "yes"){
                $msg="hola2";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                fotoinom($zz, $info);
                echo "aceite";
                header("Location: mandalorian.php");
                exit(); 
            } else {
                $msg="hola3";
                echo "<script type='text/javascript'>alert('$msg');</script>";
                echo ".";
            }
        }
    ?>
</body>
</html>