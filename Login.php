<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #2c2c2c, #4d4d4d);
        }
        div{
            background-color: rgba(0,0,0,0.9);
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
        }
        input{
            padding: 15px;
            border:none;
            outline: none;
            font-size:15px;
        }
        .inputsubmit{
            background-color: gray;
            border:none;
            padding: 15px;
            width:100%;
            border-radius:10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputsubmit:hover{
        background-image: linear-gradient(45deg, #2c2c2c, #4d4d4d);

        }
    </style>
</head>
<body>
<a href="home.php"><button style="background: black; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 15px;">
    Voltar</button></a>
    <form action="testLogin.php" method="POST">
    <div class="tela-login">
        <h1 style="color: white;">Login</h1>
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputsubmit" type="submit" name="submit" value="Enviar">
    </form>
    </div>   
</body>
</html>