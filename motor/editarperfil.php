<?php
	session_start();
    include_once("head1.php");
?>
            <form action="actualizarperfil.php?id=<?php echo $_SESSION['Usuario'];?>" method="post">
            <?php
            error_reporting(E_ALL ^ E_DEPRECATED);
            $objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
            $objDB = mysql_select_db("db_lohierro");
            $strSQL = "SELECT * FROM registrousuario WHERE Usuario = '".$_SESSION['Usuario']."' ";
            $objQuery = mysql_query($strSQL);
            $objResult = mysql_fetch_array($objQuery);
            if(!$objResult)
            {
            echo "Not found CustomerID=".$_SESSION['Usuario'];
            }
            else
            {
            ?>
            <table width="600" border="1">
                <tr>
                    <th width="91"> <div align="center">Usuario </div></th>
                    <th width="160"> <div align="center">Clave </div></th>
                    <th width="198"> <div align="center">nombre </div></th>
                    <th width="97"> <div align="center">apellido </div></th>
                    <th width="70"> <div align="center">email </div></th>
                    <th width="70"> <div align="center">edad </div></th>
                    <th width="70"> <div align="center">Foto </div></th>
                </tr>
            <tr>
                <td>
                    <div align="center">
                    <input type="text" name="txtUsuario" size="5" value="<?php echo $objResult["usuario"];?>"></div>             </td>
                <td>
                    <input type="password" name="txtClave" size="20" value="<?php echo $objResult["clave"];?>">
                </td>
                <td>
                    <input type="text" name="txtNombre" size="20" value="<?php echo $objResult["nombre"];?>">
                </td>
                <td>
                    <input type="text" name="txtApellido" size="20" value="<?php echo $objResult["apellido"];?>">
                </div>
                </td>
                <td>
                    <input type="text" name="txtEmail" size="20" value="<?php echo $objResult["email"];?>">
                </td> 
                <td>
                    <input type="text" name="txtEdad" size="20" value="<?php echo $objResult["edad"];?>">
                </td>
                <td> <img class="avatar" src='img/img_usuario/<?php   echo  $_SESSION['Foto'];?>'/>
                    <input type="file" name="txtFoto" size="20" value="<?php echo $objResult["foto"];?>">
                </td>
            </tr>
            </table>
            <input type="submit" name="submit" value="submit">
            <?php
            }
            mysql_close($objConnect);
            ?>
            </form>
<?php
    
    include_once("footer.php");

?>