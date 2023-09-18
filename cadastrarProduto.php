<?php
     session_start();
     include("config.php");
     if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['quantity']) && !empty($_POST['code']) && !empty($_POST['owner']) && !empty($_POST['description'])){
         $name= $_POST["name"];
         $quantity= $_POST['quantity'];
         $code = $_POST['code'];
         $owner =$_POST['quantity'];
         $description = $_POST['description'];
         $insert =$pdo -> prepare("insert into product(name, quantity, code, owner, description) values(:name, :quantity, :code,:owner, :description)");
         $insert -> bindValue(":name", $name);
         $insert -> bindValue(":quantity", $quantity);
         $insert -> bindValue(":code", $code);
         $insert -> bindValue(":owner",$owner);
         $insert -> bindValue(":description",$description);
         $insert -> execute();
         echo "<script> alert('cadastrado com sucesso')</script>";
     }else{
        echo"error";
     }
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once("header.php"); ?>
   <div class="container my-4 ">
     <div class="row">
        <form action="cadastrarProduto.php" method="POST" >
        <!-- Email input -->
        <div class="form-outline mb-4 col-lg-4">
            <label class="form-label" for="form2Example1">Nome Produto</label>
            <input type="text" id="form2Example1" name="name" class="form-control" />
        </div>
        <!-- Password input -->
        <div class="form-outline mb-4 mb-4 col-lg-4">
            <label class="form-label" for="form2Example2">Quantidade</label>
            <input type="text" id="form2Example2" name="quantity"class="form-control" />
        </div>

        <div class="form-outline mb-4 col-lg-4">
            <label class="form-label" for="form2Example2">Codigo</label>
            <input type="text" id="form2Example2" name="code"class="form-control" />
        </div>

        <div class="form-outline mb-4 col-lg-4">
            <label class="form-label" for="form2Example2">Dono</label>
            <input type="text" id="form2Example2" name="owner"class="form-control" />
        </div>
        <!-- 2 colum
        n grid layout for inline styling -->
        <div class="form-outline mb-4 col-lg-4">
            <label class="form-check-label" for="form2Example34">Descrição </label>
            <textarea class="form-control lg-col-lg-12" value="" id="form2Example34" name="description">  </textarea>
        </div>
        <div class="row mb-4">
      
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Cadastrar</button>
        <!-- Register buttons -->
        <div class="text-center">
           
        </div>
        </form>
    </div>
   </div>
</body>
</html>