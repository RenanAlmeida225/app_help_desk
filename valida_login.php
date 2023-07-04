<?php

$authenticatedUser = false;
$users = array(
    array("email" => "adm@test.com", "password" => "123456"),
    array("email" => "user@test.com", "password" => "abcdef"),
);

foreach ($users as $user) {
    if ($user["email"] == $_POST["email"] && $user["password"] == $_POST["password"]) {
        $authenticatedUser = true;
    }
}

if ($authenticatedUser) {
    echo "Usuário autenticado";
} else {
    header("Location: index.php?login=erro");
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";
