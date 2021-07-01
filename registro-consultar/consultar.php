<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleconsultar.css">
    <title>Consultar Canino</title>
</head>

<body>
    <main class="sele">
        <div class="cab">

            <div class="atras">
                <div class="contatras">
                    <img class="back" src="../assets/regreso.svg" alt="">


                    <button class="btn btn--4" onclick="panel();">
                        <div class="textbtn">Regresar</div>
                    </button>

                </div>
            </div>

            <div class="logo">
                <div>
                    <img src="../assets/logo.png" alt="" class="imglogo">
                </div>
                <center>
                    <p class="logtext">¡Tus canes son prioridad!</p>
                </center>
            </div>


            <img src="../assets/perroregistro.png" class="imgreg" alt="">


        </div>

        <form action="" method="POST">
            <section class="consult_container">
                <div class="container" id="cards">

                    <div class="consult__textos">
                        <h2 class="consult__title">Sistema de Identificacion Perruno</h2>
                    </div>

                    <p class="consult__copy">¿Desea buscar algún can? Búsquelo mediante su nombre</p>

                    <div class="consult__container">

                        <div class="bgcards"></div>

                        <div class="cardss__item">
                            <p class="parrafotop">Ingresar nombre a buscar</p>
                            <figure class="consult__img">
                                <img src="../assets/nombre.png" class="consult__picture">
                            </figure>
                            <div class="campo">
                                <input type="text" name="nombre">
                            </div>
                        </div>
                    </div>



                    <input type="submit" name="Buscar" id="btnbus" class="butoncitobus" value="Buscar">
                    <input type="submit" name="Cancelar" id="btnCan" class="butoncitocan" value="Cancelar">

                    <?php
                        include("../php/Consultar_perro.php");
                    ?>



                </div>



            </section>
        </form>
    </main>

</body>


<script>
    function panel() {
        location.href = '../html/panel.html';
    }
</script>

</html>