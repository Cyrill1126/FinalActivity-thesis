<?php session_start(); 
include_once('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
	<title>Home Page</title>

</head>

<style>

    body{
        height: 100vh;
    }

	img{
		height: 100px;
		width: 150px;
		background-size: cover;
		margin-left: 30px;
		border-radius: 50%;
	}

	header{
		position: sticky;
		display: flex;
		align-items: center;
		justify-content: space-between;
		height: 15%;
		background-color: rgba(174, 177, 38, 0.65);
	}

	button{
		font-family: 'Jost', sans-serif;
		/* border-radius: 10px; */
		border: none;
		color: white;
		padding: 10px 20px;
		margin-right: 30px;
		background-color: transparent;
		letter-spacing: 1px;
		font-size: 1rem;
	}


	.home{
		height: 100%;
		width: 100vw;
		background-image: url("assets/img/chick_bg.jpg");
		box-sizing: cover;
		background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
	}

	p{
		font-family: 'Oswald', sans-serif;
		color: white;
		font-size: 2rem;
		margin: 0;
	}

</style>
<body>

	

	<div class="home">
		<header>
			<img src="assets/img/logo1.png">
			<a class="active" href="index.php"><button>Login</button></a>
		</header>

		<div align='center' class="title">
			<p>PRADOS VERDES</p> 

		</div>	
	</div>
</body>
</html>