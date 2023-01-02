<?php include('header.php');
?>

    <section id="nuestrosPostres">
        <h2>Nuestros postres</h2>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item"><a href="tienda.php?producto=chocotort">Chocotorta</a> </li>
            <li class="list-group-item"><a href="tienda.php?producto=balca">Balcarse</a> </li>
            <li class="list-group-item"><a href="tienda.php?producto=cheese">Cheesecake</a> </li>
        </ol>
    </section>


    <?php
    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case 'chocotort':
                $_nombre = "Postre Chocotorta";
                $_valor = "5500$";
                $_descripcion = "A base de galletitas chocolinas, queso crema y dulce de leche";
                $_img = "./imagenes/choco.jpeg";
                break;
            case 'balca':
                $_nombre = "Postre Balcarse";
                $_valor = "3500$";
                $_descripcion = "Con durazno y crema";
                $_img = "./imagenes/balcar.jpeg";
                break;
            case 'cheese':
                $_nombre = "Postre Cheesecake";
                $_valor = "4500$";
                $_descripcion = "Cocido o frio, con cobertura de frutos rojos o maracuya";
                $_img = "./imagenes/chese.jpeg";
                break;
        }
    }

    ?>
    <div id="productos">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $_img; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><?php echo $_nombre; ?></p>
                <p class="card-text"><?php echo $_valor; ?></p>
                <p class="card-text"><?php echo $_descripcion; ?></p>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>