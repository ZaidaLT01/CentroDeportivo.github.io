<div class="container">
  <br>
  <h2 align="center">CARGOS</h2>
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
                    <th>Cargo</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                  </tr>
                  <?php  
                  $consulta="select * from cargo ";
                  $res=mysqli_query($conexion,$consulta);
                  while($reg=mysqli_fetch_array($res)){
                    echo "<tr align='center'>";
                    echo "<td>".$reg['cargo']."</td>";
                    echo '<td><a href="modulos/Cargo/eliminar.php?cod='.$reg['id_cargo'].'"class="btn btn-danger"><span><i class="fa fa-trash "></i></span> </td>';
                    echo '<td><a href="modulos/Cargo/modificar.php?cod='.$reg['id_cargo'].'"class="btn btn-warning">'; 
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
      <h3>Registro Nuevo</h3>
        <form name="form" method="post" id="form" action="?mod=guardarCa" class="form-horizontal">  <div class="form" align="center">
            <div class="col-lg-4">
              <div class="form-inline">
                <label for="cargo" class="mr-sm-2" >Nombre del Cargo:</label>

                <input type="cargo" class="form-control mb-2 mr-sm-2" id="cargo" name="cargo" required="true" placeholder="Ingrese el cargo">
              </div>
              <div class="container">
                <input align="center" type="submit" class="btn btn-danger btn-block" value="Registrar">
              </div>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
<br>