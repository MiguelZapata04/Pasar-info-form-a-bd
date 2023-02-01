<?php
include("conection.php");


if (strlen($_POST["name"]) > 0 && strlen($_POST["lastname"]) > 0 && strlen($_POST["email"] > 0)) {   //Verify that the fields received are not empty.
    $name = trim($_POST['name']);                                                                    //The beginning and end spaces are eliminated.
    $lastname = trim($_POST['lastname']);                                                            //The beginning and end spaces are eliminated.
    $email = trim($_POST['email']);                                                                  //The beginning and end spaces are eliminated.
    $query = "INSERT INTO registros(nombre, apellido, email) VALUES ('$name','$lastname','$email')";
   
    $result = mysqli_query($conexion,$query);                                                  // Firt parameter is the conetion to the data base and the second one is the query.
    if ($result) {                                                                             //Verify that the query was executed without errors.
        ?>
            <h2>Ingreso exitoso</h2>
        <?php
    }else {
        ?>
            <h2>Ocurrio un error</h2>
        <?php
    }
}else{
    ?>
        <h2>Completar los campos que faltan</h2>
    <?php
}
?> 