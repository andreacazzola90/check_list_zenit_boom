<?PHP
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $messaggio = $_POST["messaggio"];
    if ($nome == "" || $cognome == "" || $email == "" || $telefono == "" || $messaggio == "" )
    {
        echo "Non hai inserito tutti i campi!";
    }
    else
    {
        echo $nome . " " . $cognome. " " . $email. " " . $telefono. " " . $messaggio;
    }
?>