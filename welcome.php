<html>
<head>
    <title>Boas-vindas</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "Welcome " . $name . "<br>";
    echo "Your email address is: " . $email;

} else {
    
    echo "Por favor, envie o formulário primeiro.";
}
?>

</body>
</html>