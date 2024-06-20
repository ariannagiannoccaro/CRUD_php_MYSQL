<?php 
    include("db.php");

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE  username_id = '$username' and pass = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count== 1){
            header("Location: index.php");
    }
    else{
        echo '<script>
            window.location.href = "login_page.php";
            alert("login failed. Invalid username or password")
        </script>';
    }
}

?>

