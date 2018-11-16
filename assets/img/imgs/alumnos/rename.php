<?php 

$cod=$_POST['cod'];
$old_name=$_POST['old_name'];
$tipe=$_POST['tipe'];
$path= "./";


$files = array_diff(scandir($path), array('.', '..')); 


foreach($files as $file){
    // Divides en dos el nombre de tu archivo utilizando el . 
	$extension = explode('.',$old_name);
    

    if($old_name == $file){

        //echo $fileName
       $cod=$cod.'.'.$extension[1];
       rename('./'.$old_name,'./'.$cod);
       echo '<img class="circle z-depth-3" height="151px" width="113px" id="previa1" src="../../assets/img/imgs/'.$tipe.'/'.$cod.'">';
       break;
       }
        
  }

 


        
        



?>