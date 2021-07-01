<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleregistro.css">
    <title>Registrar Canino</title>
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
                        </a>
                    </div>
                </div>

                <div class="logo">
                    <div>
                        <img src="../assets/logo.png" alt="" class="imglogo">
                    </div>
                    <center><p class="logtext">¡Tus canes son prioridad!</p></center>
                </div>

                
                <img src="../assets/perroregistro.png" class="imgreg" alt="">

               
            </div>

        <form method="POST" action="" enctype="multipart/form-data">


            

            <section class="container_reg">
                <div class="container" id="cards">

                    <div class="reg__textos">
                        <h2 class="reg__title">Sistema de Identificacion Perruno</h2>
                    </div>

                    <p class="reg__copy">Para una buena identificación, necesitamos la información básica de
                        su perruno amigo</p>

                        <?php
                        include("../php/Registrar_perro.php");
                        ?>    

                    <div class="reg__container">

                        <div class="bgcards"></div>

                        <div class="cardss__item">
                            <p class="parrafotop">Ingresar código</p>
                            <figure class="reg__img">
                                <img src="../assets/dni.svg" class="reg__picture">
                            </figure>
                            <div class="campo">
                                <input type="text" name="codigo" class="camp">
                            </div>
                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Ingresar Nombre</p>
                            <figure class="reg__img">
                                <img src="../assets/nombre.png" class="reg__picture">
                            </figure>
                            <div class="campo">
                                <input type="text" name="nombre" class="camp">
                            </div>
                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Fecha de nacimiento</p>
                            <figure class="reg__img">
                                <img src="../assets/calendario.svg" class="reg__picture">
                            </figure>
                            <div class="campo">
                                <input type="date" name="fechanac" class="camp">
                            </div>

                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Seleccione género</p>
                            <figure class="reg__img">
                                <img src="../assets/macho.png" class="reg__picture">
                                <img src="../assets/hembra.png" class="reg__picture">
                            </figure>
                            <div class="formulario">
                                <div class="radio">

                                    <input type="radio" name="sexo" id="Masculino" value="Macho">
                                    <label class="labell" for="Masculino">Macho</label>

                                    <input type="radio" name="sexo" id="Femenino" value="Hembra">
                                    <label class="labell" for="Femenino">Hembra</label>


                                </div>
                            </div>
                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Seleccione raza</p>
                            <figure class="reg__img">
                                <img src="../assets/razas.jpg" class="reg__picture">
                            </figure>
                            <div class="campo select">
                                <select name="raza" class="camp">
                                    <option selected disabled>Escoge una raza</option>
                                    <Option value="Pitbull"> Pitbull
                                    <Option value="Siberiano"> Siberiano
                                    <Option value="Cocker Spaniel"> Cocker Spaniel
                                    <Option value="Pequines"> Pequines
                                    <Option value="San Bernardo"> San Bernardo
                                    <Option value="Chihuahua"> Chihuahua
                                </select>
                            </div>

                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Subir foto</p>
                            <figure class="reg__img">
                                <img src="../assets/foto.png" class="reg__picture">
                            </figure>
                            <div class="campo contfile">
                                <input Type="file" name="foto" class="camp filetem">
                            </div>

                        </div>

                    </div>

                    <!-- <button type="button" name="Registrar" id="btnReg" class="butoncitoreg">Registrar</button>
                <button type="button" name="Cancelar" id="btnCan" class="butoncitocan">Cancelar</button> -->
                    <div class="botones">
                        <input type="submit" name="Registrar" id="btnReg" class="butoncitoreg" value="Registrar">
                        <input type="submit" name="Cancelar" id="btnCan" class="butoncitocan" value="Cancelar">
                    </div>

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