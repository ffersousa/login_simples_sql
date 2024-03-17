<?php 
//include '/../database/mysqli.php' ;
require_once __DIR__."/database/mysqli.php";

include 'menu.php'; 
//require_once __DIR__."menu.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Escola Website - Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <meta charset="UTF-8">
</head>

<main>

    <div class="col-md-6 offset-md-3 text-center bg-light  border-secondary mt-5 col-sm-12">
        <h5 class=" text-secondary mt-5"> Inserir novo utilizador </h5>
        <form action="inseredados.php" method="post">

            <div class="form-group row ">
                <label for="username" class="col-sm-2 col-form-label mt-3">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mt-3" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label mt-3">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control mt-3" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Enviar</button>
        </form>
    </div>

</main>

</body>

</html>
<?php

if ($_POST){ // Se existir um post, entra!

	$username = mysqli_real_escape_string($conn, $_POST['username']); // mysqli_real_escape_string é paraproteger a base de dados com SQL injection 
	// video explicativo do SQL injection  https://youtu.be/nTgFPcYRkys
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password = md5($password);
	 
	$sql = "INSERT INTO users (username, passw) VALUES ('$username','$password')";
	if (mysqli_query($conn, $sql)) {
		echo "Novo registo adicionado com sucesso!";
	 } else {
		echo "Erro: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	

    //header("Location: menu.php \n"); // Não existe o utilizador, redirect  para a p�gina de inicio de sess�o.
}

?>