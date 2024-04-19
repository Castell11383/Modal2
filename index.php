<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url(./Images/tierra-durante-la-noche_3840x2160_xtrafondos.com.jpg);
        background-size: 1900px;
    }
</style>

<body class="bg-black p-5 mt-5">

    <div class="row">
        <div class="col">
            <div class="container p-3 bg-black bg-gradient text-center rounded border-light" style="width: 550px">
                <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <b>Precaución</b> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-radioactive" viewBox="0 0 16 16">
                        <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8" />
                        <path d="M9.653 5.496A3 3 0 0 0 8 5c-.61 0-1.179.183-1.653.496L4.694 2.992A5.97 5.97 0 0 1 8 2c1.222 0 2.358.365 3.306.992zm1.342 2.324a3 3 0 0 1-.884 2.312 3 3 0 0 1-.769.552l1.342 2.683c.57-.286 1.09-.66 1.538-1.103a6 6 0 0 0 1.767-4.624zm-5.679 5.548 1.342-2.684A3 3 0 0 1 5.005 7.82l-2.994-.18a6 6 0 0 0 3.306 5.728ZM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
                    </svg>
                </button>
                <div class="col mt-3">
                    <img src="./Images/1.gif" width="50px" height="50px" class="rounded ml-5">



                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-black bg-gradient text-light">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Suma</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container p-3" style="width: 350px">
                                        <h3 class="text-center"><b>Ingrese los números que desea sumar</b></h3>
                                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
                                            <div class="mb-3">
                                                <p><label for="numero1">Número 1</label></p>
                                                <p><input type="number" name="numero1" placeholder="X" style="width: 50px;"></p>
                                            </div>
                                            <div class="mb-3">
                                                <p><label for="numero2">Número 2</label></p>
                                                <p><input type="number" name="numero2" placeholder="X" style="width: 50px;"></p>
                                            </div>
                                            <button type="submit" name="sumar" class="btn btn-danger">Sumar</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sumar"])) {
                        $numero1 = isset($_POST["numero1"]) ? $_POST["numero1"] : 0;
                        $numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] : 0;
                        $total = $numero1 + $numero2;
                        echo "<div class='mt-4 alert alert-info emphasis' style='width: 320px text-center'>La suma de $numero1 y $numero2 es: $total</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>