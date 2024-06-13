<?php 

include ("db.php");

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    //CONECCIÓN A LA BASE DE DATOS 
    //QUERY= CONSULTA
    //mysqli_query es lo que guardará 
    
    $query = "INSERT INTO task(title, description) VALUES('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }
//almacenar un mensaje dentro de session
$_SESSION['message'] = 'Task Saved Correctly';
$_SESSION['message_type'] = 'success';

// redirección a la página principal, borra y muestra de nuevo la tabla vacía pero la info guardada
    header("Location: index.php");
}

?>