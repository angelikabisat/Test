<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         input[ type='text']{
            width: 40px;
         }
         </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes</title>
    
</head>
<body>
<form  id="form" action="" method="post" >           
Masukan Angka:<input type="text" name="satu" > 
            <input type="submit" name="submit"  value="Add">
        </form>

    <?php
    if(isset($_POST['submit'])){
        $satu=$_POST['satu'];
    
        for($box=1;$box<=$satu;$box++)
    
        echo $satu. "<br>";
    }
    ?>  


</body>
</html>