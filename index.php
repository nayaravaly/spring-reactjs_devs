<?php 
    session_start();
    include("config.php");
    if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['password'])){
        $user= $_POST["name"];
        $senha= $_POST['password'];
        $sql = "SELECT * FROM client WHERE name='$user' and senha ='$senha'";
        $result=$pdo -> query($sql);
        if($result ->rowCount()< 1){
            unset($_SESSION['name']);
            unset($_SESSION['senha']);
           print_r("Erro usuario nao encontrado");
           header("location: index.php");
        }else{
            $_SESSION['name'] = $user;
            $_SESSION['senha'] = $senha;
           header('location: home.php');

        }
    }else{
        echo "<script> alert('Erro, insira um utilizador ou password valido')</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
</head>
<body>
    <header>

    </header>
    <main class="main">
       <section class="logo">
       </section>
        <section id="form">
            <img src="logo.jpg" alt="">
            <form action="index.php" method="POST">
                <p></p>
                 <a href="">
                     <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">User</label>
                        <div class="col-sm-10">
                            <input type="utilizador" class="form-control" id="inputPassword" name="name">
                        </div>
                                     </div>
                 </a>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <button name="submit" type="submit" class="btn btn-success" id="login-btn">Login</button>
            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>
