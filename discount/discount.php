<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Diskon</title>
</head>
<body>
    <h1>Cek Diskon</h1>

    <form action="<?PHP $_PHP_SELF ?>" method="post">
    Total <input type="text" name="total" value="" placeholder="Masukkan Total"/><br>
    Diskon <input type="text" name="diskon" value="" placeholder="Masukkan Diskon"><br>

    <input type="submit" name="btnsubmit" value="Cek">
    </form>
</body>
</html>

<?php
    if(isset($_POST['total']) && isset($_POST['diskon'])) {
        $total = $_POST['total'];
        $diskon = $_POST['diskon'];
                echo "Total : ".$total;
                if($diskon >= 100){
                    $besar = $diskon;
                    $besarr = $total - $diskon;
                    echo "<br>Diskon : "."Rp.".$diskon;
                    echo "<br>Total Diskon :".$besar;
                    echo "<br>Grand Total :".$besarr;
                }else{
                    $besar = $total - ($total * $diskon /100);
                    echo "<br>Diskon : ".$diskon."%";
                    echo "<br>Total Diskon :".$total*$diskon/100;
                    echo "<br>Grand Total :".$besar ;
                }
    }    
?>