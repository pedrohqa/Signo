<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="#5FAFEB">
    
    <?php
        $data = date_parse($_GET["data"]);
        
        switch($data["month"]){
            case 1:if($data["month"] == 1 and $data["day"] >= 21){
                    echo "<img src='img/aqua.png'>";
                } else{
                    echo "<img src='img/capri.png'>";
                }
                break;
            case 2:if($data["month"] == 2 and $data["day"] >= 20){
                    echo "<img src='img/pei.png'>";
                } else{
                    echo "<img src='img/aqua.png'>";
                }
                break;
            case 3:if($data["month"] == 3 and $data["day"] >= 21){
                    echo "<img src='img/arie.png'>";
                } else{
                    echo "<img src='img/peixe.png'>";
                }
                break;
            case 4:if($data["month"] == 4 and $data["day"] >= 21){
                    echo "<img src='img/touro.png'>";
                } else{
                    echo "<img src='img/aries.png'>";
                }
                break;
            case 5:if($data["month"] == 5 and $data["day"] >= 21){
                    echo "<img src='img/gemio.png'>";
                } else{
                    echo "<img src='img/touro.png'>";
                }
                break;
            case 6:if($data["month"] == 6 and $data["day"] >= 21){
                    echo "<img src='img/cancer.png'>";
                } else{
                    echo "<img src='img/gemio.png'>";
                }
                break;
            case 7:if($data["month"] == 7 and $data["day"] >= 22){
                    echo "<img src='img/leao.png'>";
                } else{
                    echo "<img src='img/cancer.png'>";
                }
                break;
            case 8:if($data["month"] == 8 and $data["day"] >= 23){
                    echo "<img src='img/virg.png'>";
                } else{
                    echo "<img src='img/leoa.png'>";
                }
                break;
            case 9:if($data["month"] == 9 and $data["day"] >= 23){
                    echo "<img src='img/libr.png'>";
                } else {
                    echo "<img src='img/virg.png'>";
                }
                break;
            case 10:if($data["month"] == 10 and $data["day"] >= 23){
                    echo "<img src='img/escorp.png'>";
                } else{
                    echo "<img src='img/libr.png'>";
                }
                break;
            case 11:if($data["month"] == 11 and $data["day"] >= 22){
                    echo "<img src='img/sargi.png'>";
                } else{
                    echo "<img src='img/escorp.png'>";
                }
                break;
            case 12:if($data["month"] == 12 and $data["day"] >= 22){
                    echo "<img src='img/capri.png'>";
                } else {
                    echo "<img src='img/sargi.png'>";
                }
                break;
            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
        }

    ?>

</body>
</html>