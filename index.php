<?php include('header.php');
?>

<h1>Tienda online</h1>
<?php define('PRODUCTO', array("Chocotorta", "Balcarse", "Cheesecake"));
?>
<?php


$precio = "$5500";
$cantidad = 10;

$precio2 = "$3500";
$cantidad2 = 5;

$precio3 = "$4500";
$cantidad3 = 8;


?>

<?php
$totalproductostienda =  $cantidad +  $cantidad2 + $cantidad3;
?>
<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Producto <?php echo PRODUCTO[0]; ?>
        <p>Precio <?php echo $precio;  ?></p>
        <span class="badge bg-primary rounded-pill"><?php echo $cantidad;  ?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Producto <?php echo PRODUCTO[1];  ?>
        <p class="align-items-center">Precio <?php echo $precio2;  ?></p>
        <span class="badge bg-primary rounded-pill"><?php echo $cantidad2;  ?></span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Producto <?php echo PRODUCTO[2];  ?>
        <p>Precio <?php echo $precio3;  ?></p>
        <span class="badge bg-primary rounded-pill"><?php echo $cantidad3;  ?></span>
    </li>
</ul>

<div class="totalproductos">
    <h2>Total de producto en tienda: <span class="color"> <?php echo $totalproductostienda;  ?> </span> </h2>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>