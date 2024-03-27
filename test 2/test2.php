<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
      
        
        .box{
            width: 600px;          
            margin: 10px auto;
            text-align: center
        }
       
        
        input[type='text']{
            width: 40px;
        }
    </style>
 
</head>

<body>
<div class="box">
       <h1> Masukan Jumlah Pemain : </h1>
       <form action="" method="post">           
            <input type="text" name="pemain">
     
      

    <h3> Masukan Score: </h3>
   
           
            <input type="text" name="satu">
            <input type="text" name="dua">
            <input type="text" name="tiga">
            <input type="text" name="empat">
            <input type="text" name="lima">
            <input type="text" name="enam">
            <input type="text" name="tujuh">

            <h1> Masukan Jumlah Pemain : </h1>        
            <input type="text" name="pemain">
    
        <h3> Masukan Score: </h3>
         
            <input type="text" name="one">
            <input type="text" name="two">
            <input type="text" name="three">
            <input type="text" name="four"> <br><br>
            <input type="submit" name="submit"  value="SORTING">
          
       
        </form>
        <?php  
    
        if(isset($_POST['submit'])){
    
           
            $satu=$_POST['satu'];
            $dua=$_POST['dua'];
            $tiga=$_POST['tiga'];
            $empat=$_POST['empat'];
            $lima=$_POST['lima'];
            $enam=$_POST['enam'];
            $tujuh=$_POST['tujuh'];
            $one=$_POST['one'];
            $two=$_POST['two'];
            $three=$_POST['three'];
            $four=$_POST['four'];
 
            $angka=array($satu,$dua,$tiga,$empat,$lima,$enam,$tujuh,$one,$two,$three,$four); 	
            $sorting = $angka;
            rsort( $angka);  
foreach ($angka as $key => $value) {
	foreach ($sorting as $key_sorting => $value_sorting) {
		if($value===$value_sorting)
		{
			$key=$key_sorting;
			break;
		}
		
	}

	echo $value_sorting .'- Rank:'.((int)$key+1).'<br>';
	//
}
            
           	
            echo "</div>";
 
        }
        ?>  
 
    
            </div>
</body>
</html>