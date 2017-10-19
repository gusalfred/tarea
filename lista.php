<?php include 'conf/conexion.php';
$lista=mysqli_query($Conexion,"select * from datos");
$count=mysqli_num_rows($lista);

if($count>0){?>
<!--inicio tabla -->
    <table class="responsive-table highlight bordered centered">
        <tr>
        	<td>
            	<b>ID</b>
            </td>
            <td>
            	<b>Campo A</b>
            </td>
            <td>
            	<b>Campo B</b>
            </td>
            <td>
            	<b>Campo D</b>
            </td>
        </tr>
    <?php
    while($data=mysqli_fetch_array($lista)){
        ?>
        <tr>
            <td class="">
            	<?php echo $data['id']; ?>
            </td>
            <td>
            	<?php echo $data['campo_A']; ?>            	
            </td>
            <td>
            	<?php echo $data['campo_B']; ?>            	
            </td>
            <td>
            	<?php echo $data['Campo_C']; ?>            	
            </td>
        </tr>
    <?php } ?>
    </table>
<?php
}else{ ?>
    <div class="center-align">
        <p style="font-size: x-large;" class="grey-text text-lighten-1"><i class="fa fa-2x mdi mdi-file-hidden "></i><br>Sin registros</p>
    </div>  
<?php }
?>