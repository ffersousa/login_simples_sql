<?php	
include  './database/mysqli.php';
$emptyUsernameOrPassword = '';

//print_r($_POST);

if($_POST){ // Se existir um post, entra!

	$username = $_POST['username'];  // Get do username
	$password = $_POST['password'];  // Get da password

//	print_r($_POST['password']);
	//echo $_POST['password'];
	

	//$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password = md5($password);

	echo $password;

	if ($username && $password){ // Validar se ambos os campos têm valor.	
		//$query = "SELECT * FROM users WHERE username='" . $username . "' AND password=" . $password ."";  // exemplo // PDO 
		$query = "SELECT * FROM users WHERE username='{$username}' AND passw='{$password}'";			
		//$query = "SELECT * FROM users WHERE username='Fernando' AND passw=1234"; // exemplo 
		
		$sql = mysqli_query($conn, $query);
		$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
		
							
		//echo (count($result));
		if(count($result) > 0) // Se encontrou password porque está registado
							//if($result) // Se encontrou password porque está registado
		{
			session_start() ;
			echo "utilizador encontrado";
			$_SESSION['username'] = $username; // Cria um cookie saving the username
			$_SESSION['loggedIn'] = true; // Creates a cookie saying the user is logged in
			header("Location: menu.php \n"); // redireciona para pagina protegida.
		}
		else
		{ 
			//echo $count;
			
			echo "Utilizador não encontrado";
			//header("Location: index.php \n"); // Não existe o utilizador, redirect  para a pagina de login.
		}
		}else{
				$emptyUsernameOrPassword = true; 
		}
	}
?>