<?php
include '../../inicio.php';
error_reporting(0);

if($NOMBREa!=NULL){
	header('location: ../../../portal_administrador/indexadministrador.php');
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Asistencia</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../../css/main.css">
</head>


<body style=" overflow:scroll;background-color: #cccccc;">

	<!--NAVEGADOR -->
	<nav class="full-box  navbar navbar-default navbar-static-top">
      <div class="container nav-justified">
        <div class="navbar-header " style="height:95px;">
	<?php 
    $query ="SELECT * FROM profesores";
	$rs=mysqli_query($conexion,$query);
	while ($row=$rs->fetch_assoc()) {
		if ($row['CEDULA']==$CEDULAp) {
		
	?>
	<img style="margin-top: 5px; margin-right: 5px" width="80px" height="80px" class="img-circle" src="data:image/jpg;base64,<?php echo base64_encode($row['FOTO']);?>" alt=""></td>
	<?php
	}

		}
	?>
	<a class="navbar-brand"><center><h4><?php echo "$NOMBREp $APELLIDOp <br> V-$CEDULAp"; ?></h4></center></a>
    </div>
        <div class="navbar-collapse collapse">
          <ul class="nav nav-justified " style="margin-top: 5px;">
            <li><a class="btn btn-raised btn-danger btn-lg active " style="margin-left:10px;" href="./asistencia.php">INICIO</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" style="margin-left:4px;"href="#imprimir">IMPRIMIR</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" href="../../salida.php">salir</a></li>
            <li> <a class="btn btn-lg active"> <h4> FECHA: <?php $fecha= getdate(); echo ""; print_r($fecha[mday]);echo "/";print_r($fecha[mon]);echo "/";print_r($fecha[year]);?></h4></a> </li>
           </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 <!--FIN DEL NAVEGADOR -->

    <br><br>

<!-- CONTENIDO DE LA PAGINA-->

	<section>
		<center>
			<div class="card" style="width: 90%; height: 1000px;">
  			<div class="card-body ">
    		<div class="table-responsive">
    		<table class="table">
    			
    			<caption>Asistencia</caption>
    			<thead >
    				<tr >
                        <th class="text-center">FOTO</th>
    					<th class="text-center">NOMBRE</th>
    					<th class="text-center">APELLIDO</th>
    					<th class="text-center">COD_UNICO</th>
    					<th class="text-center">PRESENTE</th>
    				</tr>
    			</thead>
    			<tbody>
    	


    <?php
    $fechasistema=$fecha[mday]."/".$fecha[mon]."/".$fecha[year];
    
        
       

    $queryalumno=mysqli_query($conexion,"SELECT * FROM asistencia");            
    while ($asistencia=mysqli_fetch_array($queryalumno)) 
            {
                if ($asistencia['GRADO']==$gradopro)
                {
                    if ($asistencia['SECCION']==$seccionprof) {

                        if ($asistencia['FECHA']==$fechasistema) {
                                $FOTO=mysqli_query($conexion,"SELECT * FROM alumnos");
                                while ($fotoresult=mysqli_fetch_array($FOTO)) {
                                    if ($asistencia['COD_UNICO_ESTUDIANTE']==$fotoresult['COD_UNICO_ESTUDIANTE']) {
                                    
                         ?>
                         <tr>
                         <th class="text-center"><img style="width: 80px; height:90px;" class="img-circle" src="data:image/jpg;base64,<?php echo base64_encode($fotoresult['FOTO']);?>" alt=""></th>

    					<th class="text-center"><?php echo $asistencia['NOMBRE'];?></th>
    				
    					<th class="text-center"> <?php echo $asistencia['APELLIDO'];?></th>
    				
    					<th class="text-center"> <?php echo $asistencia['COD_UNICO_ESTUDIANTE'];?></th>
    				
    					<th class="text-center"><?php echo $asistencia['ESTADO'];?></th>
						
    				   </tr>
                  <?php 

                                    }
                    }
                   }
                   }
                   } 
                   }  
                    ?>

    			</tbody>
    		</table>

    		</div>
    		</div>
			</div>
		</center>
	</section>
	<br>
	<section class="full-box">
	<center>
	

</body>


</html>