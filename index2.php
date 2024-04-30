<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Bienvenido a PET SHOP</h1>
        </div>
    </div>
    <div class="container p-4">

        <div class="row">
            <div class="col-md-8">
                <h2>Mascotas</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Raza</th>
                            <th>Tipo Animal</th>
                            <th>Fecha Nacimiento</th>
                            <th>ID</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_mascotas = "SELECT Nombre, Raza, Tipo_Animal, Fecha_Nacimiento, ID, foto FROM mascotas";
                        $result_mascotas = mysqli_query($conn, $query_mascotas);
                        while ($row_mascota = mysqli_fetch_assoc($result_mascotas)) { ?>
                            <tr>
                                <td><?php echo $row_mascota['Nombre']; ?></td>
                                <td><?php echo $row_mascota['Raza']; ?></td>
                                <td><?php echo $row_mascota['Tipo_Animal']; ?></td>
                                <td><?php echo $row_mascota['Fecha_Nacimiento']; ?></td>
                                <td><?php echo $row_mascota['ID']; ?></td>
                                <td><img src="<?php echo $row_mascota['foto']; ?>" alt="Foto de mascota" width="100"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Productos</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre producto</th>
                            <th>Proveedor</th>
                            <th>Descripción producto</th>
                            <th>Valor</th>
                            <th>Presentación</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_productos = "SELECT Nombre_producto, proveedor, descripcion_producto, valor, presentacion, ID FROM productos";
                        $result_productos = mysqli_query($conn, $query_productos);
                        while ($row_producto = mysqli_fetch_assoc($result_productos)) { ?>
                            <tr>
                                <td><?php echo $row_producto['Nombre_producto']; ?></td>
                                <td><?php echo $row_producto['proveedor']; ?></td>
                                <td><?php echo $row_producto['descripcion_producto']; ?></td>
                                <td><?php echo $row_producto['valor']; ?></td>
                                <td><?php echo $row_producto['presentacion']; ?></td>
                                <td><?php echo $row_producto['ID']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Clientes</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dirección</th>
                            <th>Ciudad</th>
                            <th>Departamento</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_clientes = "SELECT Nombre, Apellido, Direccion, Ciudad, Departamento, Celular FROM clientes";
                        $result_clientes = mysqli_query($conn, $query_clientes);
                        while ($row_cliente = mysqli_fetch_assoc($result_clientes)) { ?>
                            <tr>
                                <td><?php echo $row_cliente['Nombre']; ?></td>
                                <td><?php echo $row_cliente['Apellido']; ?></td>
                                <td><?php echo $row_cliente['Direccion']; ?></td>
                                <td><?php echo $row_cliente['Ciudad']; ?></td>
                                <td><?php echo $row_cliente['Departamento']; ?></td>
                                <td><?php echo $row_cliente['Celular']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Vacunas</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Laboratorio</th>
                            <th>Descripción</th>
                            <th>Dosis por peso</th>
                            <th>Stock</th>
                            <th>Vencimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_vacunas = "SELECT Nombre, Laboratorio, Descripcion, Dosis_por_peso, Stock, Vencimiento FROM vacunas";
                        $result_vacunas = mysqli_query($conn, $query_vacunas);
                        while ($row_vacuna = mysqli_fetch_assoc($result_vacunas)) { ?>
                            <tr>
                                <td><?php echo $row_vacuna['Nombre']; ?></td>
                                <td><?php echo $row_vacuna['Laboratorio']; ?></td>
                                <td><?php echo $row_vacuna['Descripcion']; ?></td>
                                <td><?php echo $row_vacuna['Dosis_por_peso']; ?></td>
                                <td><?php echo $row_vacuna['Stock']; ?></td>
                                <td><?php echo $row_vacuna['Vencimiento']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- volver a la página principal -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php" class="btn btn-primary btn-block">Volver a la página principal</a>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>
