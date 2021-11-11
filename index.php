<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejemplo 1</title>
</head>
<body>
    <h2>Registro de persona</h2>
    <form method="post" action="index.php" name="form1">
        <table width="400" border="0">
            <tr>
                <td>
                    <input type="hidden" name="txtIdPersona" value="<?php echo $_GET['pid_persona']; ?>"/>
                </td>
            </tr>
            <tr>
                <td width="80">Nombre</td>
                <td width="225">
                    <input type="text" name="txtNombre" value="<?php echo $_GET['pnombre']; ?>" style="border: 1px solid red; color: yellow;"/><br>
                </td>
            </tr>
            <tr>
                <td width="80">Paterno</td>
                <td width="225">
                    <input type="text" name="txtPaterno" value="<?php echo $_GET['ppaterno']; ?>" style="border: 1px solid red; color: yellow;"/><br>
                </td>
            </tr>
            <tr>
                <td width="80">Materno</td>
                <td width="225">
                    <input type="text" name="txtMaterno" value="<?php echo $_GET['pmaterno']; ?>" style="border: 1px solid red; color: yellow;"/><br>
                </td>
            </tr>
            <tr>
                <td width="80">Sexo</td>
                <td width="225">
                    <input type="radio" name="rbtSexo" checked="checked" value="M" <?php if($_GET['pSexo'] == 'M') {echo "checked";} ?> />Masculino
                    <input type="radio" name="rbtSexo" value="F" <?php if($_GET['pSexo'] == 'F') {echo "checked";} ?> />Femenino
                </td>
            </tr>
            <tr>
                <td width="80">Estado Civil</td>
                <td width="225">
                    <select name="cboEstadoCivil" value="<?php echo $_GET['pestadocivil']; ?>">
                        <option <?php if($_GET['pestadocivil'] == 'Soltera') {echo "selected = 'selected'";} ?>>Soltera</option>
                        <option <?php if($_GET['pestadocivil'] == 'Casada') {echo "selected = 'selected'";} ?>>Casada</option>
                        <option <?php if($_GET['pestadocivil'] == 'Divorciada') {echo "selected = 'selected'";} ?>>Divorciada</option>
                        <option <?php if($_GET['pestadocivil'] == 'Viuda') {echo "selected = 'selected'";} ?>>Viuda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="80">Fecha Nacimiento</td>
                <td width="225">
                    <input type="date" name="txtFechaNac" value="<?php echo $_GET['pfecha_nac']; ?>"/><br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="botones" value="Nuevo" style="border: 1px solid #21bdf7; background-color:#2309ea; color:#0cfa0c; font-size:30px; cursor:pointer;">
                    <input type="submit" name="botones" value="Guardar" style="border: 1px solid #21bdf7; background-color:#2309ea; color:#0cfa0c; font-size:30px; cursor:pointer;">
                    <input type="submit" name="botones" value="Modificar" style="border: 1px solid #21bdf7; background-color:#2309ea; color:#0cfa0c; font-size:30px; cursor:pointer;">
                    <input type="submit" name="botones" value="Eliminar" style="border: 1px solid #21bdf7; background-color:#2309ea; color:#0cfa0c; font-size:30px; cursor:pointer;">
                    <input type="submit" name="botones" value="Buscar" style="border: 1px solid #21bdf7; background-color:#2309ea; color:#0cfa0c; font-size:30px; cursor:pointer;">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Buscar por : <br>
                    <input type="radio" name="grupo" value="1" checked="checked" <?php if($_POST['grupo'] == 1) echo "checked"; ?>/>Codigo
                    <input type="radio" name="grupo" value="2" <?php if($_POST['grupo'] == 2) echo "checked"; ?>/>Nombre <br>
                    <input type="text" name="txtBuscar" style="border: 5px solid #6616e6; color: #17e2ea;"/>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <?php
            include_once('controllers/persona.php');
        ?>
    </form>
</body>
</html>