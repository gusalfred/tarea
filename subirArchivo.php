<?php
include 'conf/conexion.php';
$data=[];
if (!empty($_FILES)) {
     $file=file($_FILES['file']['tmp_name'],FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
     $referencia=$file[0];
     $fecha=$file[1];
     $monto=$file[3];

     $guardar=mysqli_query($Conexion,"insert into datos (campo_A,campo_B,Campo_C) values ('$referencia','$fecha','$monto')");
      if(!$guardar){
      	$data['stat']='error';
      	$data['msg']='<i class="mdi mdi-close-circle-outline"></i> Error al guardar '.mysqli_error($Conexion);
      }else{
      	$data['stat']='ok';
      	$data['msg']='<i class="mdi mdi-check-circle-outline"></i> Guardado';
      }
}else{
	$data['stat']='error';
	$data['msg']='Vacio';
}
echo json_encode($data)
?>