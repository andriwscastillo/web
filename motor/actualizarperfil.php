<?php
	session_start();
    include_once("head1.php");

?>
    <?php
        error_reporting(E_ALL ^ E_DEPRECATED);
        $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
        $objDB = mysql_select_db("db_lohierro");
        $strSQL = "UPDATE registrousuario SET ";
        $strSQL .="usuario = '".$_POST["txtUsuario"]."' ";
        $strSQL .=",clave = '".$_POST["txtClave"]."' ";
        $strSQL .=",nombre = '".$_POST["txtNombre"]."' ";
        $strSQL .=",apellido = '".$_POST["txtApellido"]."' ";
        $strSQL .=",email = '".$_POST["txtEmail"]."' ";
        $strSQL .=",edad = '".$_POST["txtEdad"]."' ";
if(!empty($_FILES['txtFoto']['name'])){

                $foto=$_FILES['txtFoto']['name'];

                $foto=str_replace(" ","_",$foto);

                move_uploaded_file($_FILES['txtFoto']['tmp_name'],'img/img_usuario/'.$foto);
                chmod('img/img_usuario/'.$foto,0644);
            }
            else{

                $foto="foto_default.png";
                                }	
        $strSQL .="WHERE Usuario = '".$_SESSION['Usuario']."' ";
        $objQuery = mysql_query($strSQL);
        if($objQuery)
        {
        echo "Datos guardados correctamente";
        }
        else
        {
        echo "Error Save [".$strSQL."]";
        }
        mysql_close($objConnect);
    ?>

<?php
    
    include_once("footer.php");

?>