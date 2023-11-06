<div class="container">
  <br>
  <h2 align="center">CATEGORIAS EN PRODUCTOS DE SNACK</h2>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" style="color: black" data-toggle="tab" href="#home">Lista</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: black" data-toggle="tab" href="#menu1">Registrar Nuevo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: black" data-toggle="tab" href="#menu2">Tendencias</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Lista</h3>
            <div class="table-responsive">
              <table border="1" align="center" class="l">
                <tr align="center" class="t">
                  <th>Categoria</th>
                  <th>Eliminar</th>
                  <th>Modificar</th>
                </tr>
                <?php
                  $consulta="select * from categoriaP ";
                  $res=mysqli_query($conexion,$consulta);
                  while($reg=mysqli_fetch_array($res)){
                    echo "<tr align='center'>";
                    echo "<td>".$reg['nombre']."</td>";
                    echo '<td><a href="modulos/categoriaP/eliminar.php?cod='.$reg['id_categoria'].'"class="btn btn-danger"><span><i class="fa fa-trash "></i></span> </td>';
                    echo '<td><a href="modulos/categoriaP/modificar.php?cod='.$reg['id_categoria'].'"class="btn btn-warning">'; 
                    echo '<span><i class="fa fa-edit "></i></span></td>';
                    echo "</tr>";
                  }
                  ?>
              </table>

        </div>
    </div>
    <br>
 <!-- Tab pane2 -->
    <div id="menu1" class="container tab-pane fade">
      <h3>Registro</h3>
        <form name="form" method="post" id="form" action="?mod=guardarCat" class="form-horizontal">
                <table align="center">
                  <tr>
                    <div class="input-group">
                      <td><label>CATEGORIA: </label></td>
                      <td><input type="text" class="form-control" id="nombre" name="nombre" required="true" value="" placeholder="Ingrese Nueva Categoria" autofocus="" required=""><br></td>          
                    </div>
                  </tr>
                  <tr>
                    <div class="form-group">
                      <div class="col-sm-12 controls">
                        <td colspan="2" align="center">
                          <input align="center" type="submit"  value="Registrar" class="btn btn-danger">  
                        </td>
                      </div>
                    </div>
                  </tr>                                                       
              </table>
            </form>  

    </div>
    <div id="menu2" class="container tab-pane fade">
      <h3>TENDENCIAS</h3>
    </div>
  </div>
</div>
<br>