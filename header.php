<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Cursos Online'; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1, h2 {
            color: #333;
        }
        .curso-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .curso-item {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .curso-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .detalhes-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 600px;
        }
        .login-container {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin: 50px auto;
            max-width: 300px;
            text-align: center;
        }
        .erro {
            color: red;
        }
        .sucesso {
            color: green;
        }
    </style>
</head>
<body>