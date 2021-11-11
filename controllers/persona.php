<?php
    include_once('class/persona.php');

    function guardar(){
        if($_POST['txtNombre'] && $_POST['txtPaterno']){
            $obj = new Persona();
            $obj->setNombre($_POST['txtNombre']);
            $obj->setPaterno($_POST['txtPaterno']);
            $obj->setMaterno($_POST['txtMaterno']);
            if($_POST['rbtSexo'] == 'M')
                $obj->setSexo('M');
            else
                $obj->setSexo('F');
            $obj->setEstadoCivil($_POST['cboEstadoCivil']);
            $obj->setFechaNac($_POST['txtFechaNac']);
            if($obj->guardar())
                echo "<p style='color:green; font-size:25px;'>Persona Guardada......</p>";
                
            else
                echo "<p style='color:green; font-size:25px;'>Error al guardar la persona......</p>";
        }else{
            echo "<p style='color:green; font-size:25px;'>El nombre y el paterno es obligatorio......</p>";
        }
    }

    function modificar(){
        if($_POST['txtNombre'] && $_POST['txtIdPersona']){
            $obj = new Persona();
            $obj->setIdPersona($_POST['txtIdPersona']);
            $obj->setNombre($_POST['txtNombre']);
            $obj->setPaterno($_POST['txtPaterno']);
            $obj->setMaterno($_POST['txtMaterno']);
            if($_POST['rbtSexo'] == 'M')
                $obj->setSexo('M');
            else
                $obj->setSexo('F');
            $obj->setEstadoCivil($_POST['cboEstadoCivil']);
            $obj->setFechaNac($_POST['txtFechaNac']);
            if($obj->modificar())
                echo "<p style='color:#f821c7; font-size:25px;'>Persona Modificada......</p>";
            else
                echo "<p style='color:#e82e1f; font-size:25px;'>Error al modificar la persona......</p>";
        }else{
            echo "<p style='color:#5f99e8; font-size:25px;'>El nombre es obligatorio o seleccione correctamente......</p>";
        }
    }

    function eliminar(){
        if($_POST['txtIdPersona']){
            $obj = new Persona();
            $obj->setIdPersona($_POST['txtIdPersona']);
            if($obj->eliminar())
                echo "<p style='color:#efb022; font-size:25px;'>Persona Eliminada......</p>";
            else
                echo "<p style='color:#eb1d1d; font-size:25px;'>Error al eliminar la persona......</p>";
        }else{
            echo "<p style='color:#84ddbe; font-size:25px;'>para eliminar la persona, debe tener el codigo de la persona...</p>";
        }
    }

    function buscar(){
        $obj = new Persona();
        switch($_POST['grupo']){
            case 1:{
                $resultado = $obj->buscarPorCodigo($_POST['txtBuscar']);
                mostrarRegistros($resultado);
            }; break;
            case 2:{
                $resultado = $obj->buscarPorNombre($_POST['txtBuscar']);
                mostrarRegistros($resultado);
            }; break;
        }
    }

    function mostrarRegistros($registro){
        echo "<table border='1' align='left'>";
        echo "<tr><td>Codigo</td>
                  <td>Nombre</td>
                  <td>Paterno</td>
                  <td>Materno</td>
                  <td>Sexo</td>
                  <td>Estado Civil</td>
                  <td>Fecha Nacimiento</td>
                  <td><center>*</center></td></tr>";
        while($fila = mysqli_fetch_object($registro)){
            echo "<tr>";
            echo "<td>$fila->id_persona</td>";
            echo "<td>$fila->nombre</td>";
            echo "<td>$fila->paterno</td>";
            echo "<td>$fila->materno</td>";
            echo "<td>$fila->sexo</td>";
            echo "<td>$fila->estado_civil</td>";
            echo "<td>$fila->fecha_nac</td>";
            echo "<td><a href='index.php? pid_persona=$fila->id_persona&pnombre=$fila->nombre&ppaterno=$fila->paterno&pmaterno=$fila->materno&pSexo=$fila->sexo&pestadocivil=$fila->estado_civil&pfecha_nac=$fila->fecha_nac'>[EDITAR]</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    switch($_POST['botones']){
        case "Nuevo":{
        } break;
        case "Guardar":{
            guardar();
        } break;
        case "Modificar":{
            modificar();
        } break;
        case "Eliminar":{
            eliminar();
        } break;
        case "Buscar":{
            buscar();
        } break;
    }

?>