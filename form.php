<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo "<h1>Gönderilen Bilgiler</h1>";
    echo "<p><strong>Ad:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mesaj:</strong> $message</p>";
} else {
    echo "<!DOCTYPE html>
<html lang='tr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            margin-top: 50px;
        }
        form {
            display: inline-block;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>İletişim Formu</h1>
    <form method='post' action=''>
        <label for='name'>Adınız:</label>
        <input type='text' id='name' name='name' required>
        <label for='email'>Email:</label>
        <input type='email' id='email' name='email' required>
        <label for='message'>Mesaj:</label>
        <textarea id='message' name='message' rows='5' required></textarea>
        <button type='submit'>Gönder</button>
    </form>
</body>
</html>";
}
?>
