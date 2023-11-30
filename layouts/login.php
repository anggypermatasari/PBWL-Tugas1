<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">
	<title>Login Sistem</title>


	<link rel="stylesheet" href="<?php echo AST; ?>/css/styless.css">
	<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:&display=swap');

body {
    height: 100vh;
    background-color: #f2f2f2;
    background-size: cover; /* optional */
}

 /* Set up the container for the leaves */
 .leaves-container {
    position: relative;
    height: 100vh;
    overflow: hidden;
 }

/* Style for the individual leaves */
.leaf {
    position: absolute;
    width: 30px;
    height: 30px;
    background-color: #9ac23c00;
    border-radius: 50%;
    animation: falling 8s ease-in-out infinite;
}

/* Keyframe animation for the falling leaves */
@keyframes falling {
        0% {
          transform: translateY(-10%);
        }
        100% {
          transform: translateY(3220%);
        }
      }

/* Position each leaf randomly within the container */
.leaf:nth-child(1) {
    left: 5%;
    top: -5%;
    animation-delay: 0.5s;
}
.leaf:nth-child(2) {
    left: 25%;
    top: -5%;
    animation-delay: 2%;
}
.leaf:nth-child(3) {
    left: 45%;
    top: -15%;
    animation-delay: 3.5s;
}
.leaf:nth-child(4) {
    left: 65%;
    top: -20%;
    animation-delay: 1s;
}
.leaf:nth-child(5) {
    left: 85%;
    top: -25%;
    animation-delay: 2.5s;
}
.leaf:nth-child(6) {
    left: 95%;
    top: -15%;
    animation-delay: 2.5s;
}
.leaf:nth-child(7) {
    left: 55%;
    top: -15%;
    animation-delay: 1.5s;
}
.leaf:nth-child(8) {
    left: 20%;
    top: -15%;
    animation-delay: 1.0s;
}
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

    /* Center the content */
       
    /* Style the login box */
.login {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.26);
    backdrop-filter: 
    z-index: -5;
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

.login h2 {
    position: relative;
    width: 100%;
    text-align: center;
    color:#5F9EA0;
    margin-bottom: 10px;
}
.login .inputbox {
    position: relative;
}
.login .inputbox input {
    width: 90%;
    height: 45px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    font-family: 'Poppins', sans-serif;
}
.login .inputbox input ::placeholder {
    color: #82302a;
}
.login .inputbox #btn{
    background-color: #5F9EA0;
    font-family: 'poppins', sans-serif;

    width: 90%;
    height: 45px;
    color: white;
    padding: 10px 20px;
    font-size: 13px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.login .inputbox #btn:hover {
    background: #d64c42;
}  
        </style>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
</body>

</html>