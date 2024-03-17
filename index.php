<?php	
	include  './login.php';
	//include  '../components/footer.php';
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Escola Website - Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='./src/main.css'>
    <meta charset="UTF-8">
</head>

<html>

<body>
    <header class="row">

        <div class="col-md-6 offset-md-3 text-center bg-light border border-secondary mt-5 col-sm-12">
            <!-- offset-md-3 desloca 3 colunas para a direita  -->

            <h4 class="display-4">Aplicação Escola</h4>
        </div>

    </header>
    <section class="row justify-content-center mt-5 mb-5">
        <H4> Login</H4>
    </section>
    <section class="row justify-content-center">
        <form action="login.php" method="post">
            <label for="name">Utilizador:</label>
            <input type="text" name="username" class="input form-control mb-3" value="" />
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password" class="input form-control mb-3" value="" />
            <br>
            <input type="submit" class="btn btn-success" value="Iniciar sessao" class="button" />

        </form>
    </section>


    <?php 
			if($emptyUsernameOrPassword) 
				echo '<p>Username ou password vazio</p>'
		?>



    <section class="row justify-content-center mt-5 mb-5">
        <a href="registo.php"> Novo utilizador </a>
    </section>

    <section class="row justify-content-center">
        <p>Exemplo de um sistema de login com mysqli
            </>
    </section>
    < <?php
        require_once __DIR__ . "/utils/footer.php";
    ?> </body>

</html>