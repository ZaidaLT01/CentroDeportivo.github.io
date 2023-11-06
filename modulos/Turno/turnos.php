<div class="container">
  <br>
  <h2 align="center">TURNOS</h2>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" style="color: black" data-toggle="tab" href="#home">Lista</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: black" data-toggle="tab" href="#menu1">Registrar Nuevo</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Lista</h3>
      <div class="row">
          <div class="col">
            <div class="table-responsive">
              <table border="1" width="50%" align="center" class="l">
                  <tr align="center" class="t">
                    <th>Turno</th>
                    <th>Ingreso</th>
                    <th>Salida</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                  </tr>
                  <?php
                  $consulta="select *from turno ";
                  $res=mysqli_query($conexion,$consulta);
                  while($reg=mysqli_fetch_array($res)){
                    echo "<tr align='center'>";
                    echo "<td>".$reg['turno']."</td>";
                    echo "<td>".$reg['ingreso']."</td>";
                    echo "<td>".$reg['salida']."</td>";
                    echo '<td><a href="modulos/Turno/eliminar.php?cod='.$reg['id_turno'].'"class="btn btn-danger">';
                    echo '<span><i class="fa fa-trash "></i></span>';
                    echo '<td><a href="modulos/Turno/modificar.php?cod='.$reg['id_turno'].'"class="btn btn-warning">'; 
                    echo '<span><i class="fa fa-edit "></i></span></td>';
                    echo "</tr>";
                  }
                  ?>
              </table>
            </div>
          </div>
        </div>
    </div>
    <br>
 <!-- Tab pane2 -->
    <div id="menu1" class="container tab-pane fade">
      <h3>Registro Turno</h3>

        <form name="form" method="post" id="form" action="?mod=guardarTu" class="form-horizontal">
                <table align="center">
                  <tr>
                    <div class="input-group">
                      <td><label>Turno: </label></td>
                      <td><input type="text" name="turno" class="form-control" id="turno" value="" placeholder="ej:Nocturno" autofocus="" required=""><br></td>          
                    </div>
                  </tr>
                  <tr>
                    <div class="input-group">
                      <td><label>Hora de Ingreso:</label></td>
                      <td><input  type="time" name="time_i" id="time_i" class="form-control" placeholder="Hora de Entrada" required="" ><br></td>
                    </div>                         
                  </tr>                                
                  <tr>
                    <div class="input-group">
                      <td>  <label>Hora de Salida:</label></td>
                      <td> <input type="time" name="time_s" id="time_s"  class="form-control" placeholder="hora en que sale" required=""><br></td>
                    </div>    
                  </tr>                                                                                
                  <tr>
                    <div class="form-group">
                      <div class="col-sm-12 controls">
                        <td colspan="2" align="center">
                          <br>
                          <input align="center" type="submit"  value="Registrar Turno" class="btn btn-danger">
                        </td>
                      </div>
                    </div>
                  </tr>                                                       
              </table>
            </form>   
    </div>
  </div>
</div>
<br>