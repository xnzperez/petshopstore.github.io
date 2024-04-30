<?php include "includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <h1>Ventas de Mascotas por Mes</h1>

    <!-- Contenedor para la gráfica de ventas de mascotas por mes -->
    <div style="width: 50%;">
        <canvas id="mascotas-chart"></canvas>
    </div>

    <?php
    // Incluir archivo de conexión a la base de datos
    include("db.php");

    // Consulta para obtener las ventas de mascotas por mes
    $query_mascotas_mes = "SELECT MONTH(fecha_venta) as mes, COUNT(*) as total_ventas FROM mascota_vendida GROUP BY mes ORDER BY mes";
    $result_mascotas_mes = mysqli_query($conn, $query_mascotas_mes);
    ?>

    <script>
        // Datos para la gráfica de ventas de mascotas por mes
        var mascotasMesData = {
            labels: [<?php while ($row = mysqli_fetch_assoc($result_mascotas_mes)) { echo $row['mes'] . ','; } ?>],
            datasets: [{
                label: 'Ventas de Mascotas',
                data: [<?php mysqli_data_seek($result_mascotas_mes, 0); while ($row = mysqli_fetch_assoc($result_mascotas_mes)) { echo $row['total_ventas'] . ','; } ?>],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        // Configuración de la gráfica de ventas de mascotas por mes
        var mascotasMesConfig = {
            type: 'bar',
            data: mascotasMesData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        };

        // Dibujar la gráfica de ventas de mascotas por mes
        var mascotasMesChart = new Chart(document.getElementById('mascotas-chart'), mascotasMesConfig);
    </script>

    <h1>Ventas de Productos por Mes</h1>

    <!-- Contenedor para la gráfica de ventas de productos por mes -->
    <div style="width: 50%;">
        <canvas id="productos-chart"></canvas>
    </div>

    <?php
    // Consulta para obtener las ventas de productos por mes
    $query_productos_mes = "SELECT MONTH(fecha_venta) as mes, COUNT(*) as total_ventas FROM producto_vendido GROUP BY mes ORDER BY mes";
    $result_productos_mes = mysqli_query($conn, $query_productos_mes);
    ?>

    <script>
        // Datos para la gráfica de ventas de productos por mes
        var productosMesData = {
            labels: [<?php while ($row = mysqli_fetch_assoc($result_productos_mes)) { echo $row['mes'] . ','; } ?>],
            datasets: [{
                label: 'Ventas de Productos',
                data: [<?php mysqli_data_seek($result_productos_mes, 0); while ($row = mysqli_fetch_assoc($result_productos_mes)) { echo $row['total_ventas'] . ','; } ?>],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        // Configuración de la gráfica de ventas de productos por mes
        var productosMesConfig = {
            type: 'bar',
            data: productosMesData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        };

        // Dibujar la gráfica de ventas de productos por mes
        var productosMesChart = new Chart(document.getElementById('productos-chart'), productosMesConfig);
    </script>

    <h1>Ventas de Vacunas por Mes</h1>

    <!-- Contenedor para la gráfica de ventas de vacunas por mes -->
    <div style="width: 50%;">
        <canvas id="vacunas-chart"></canvas>
    </div>

    <?php
    // Consulta para obtener las ventas de vacunas por mes
    $query_vacunas_mes = "SELECT MONTH(fecha_venta) as mes, COUNT(*) as total_ventas FROM vacuna_vendida GROUP BY mes ORDER BY mes";
    $result_vacunas_mes = mysqli_query($conn, $query_vacunas_mes);
    ?>

    <script>
        // Datos para la gráfica de ventas de vacunas por mes
        var vacunasMesData = {
            labels: [<?php while ($row = mysqli_fetch_assoc($result_vacunas_mes)) { echo $row['mes'] . ','; } ?>],
            datasets: [{
                label: 'Ventas de Vacunas',
                data: [<?php mysqli_data_seek($result_vacunas_mes, 0); while ($row = mysqli_fetch_assoc($result_vacunas_mes)) { echo $row['total_ventas'] . ','; } ?>],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Configuración de la gráfica de ventas de vacunas por mes
        var vacunasMesConfig = {
            type: 'bar',
            data: vacunasMesData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        };

        // Dibujar la gráfica de ventas de vacunas por mes
        var vacunasMesChart = new Chart(document.getElementById('vacunas-chart'), vacunasMesConfig);
    </script>

    <!-- Volver a la página principal -->
    <div class="container p-4">
        <a href="index.php" class="btn btn-primary">Volver a la página principal</a>
    </div>

</body>
</html>

<?php include "includes/footer.php"; ?>
