<?php
require_once 'config.php';

if (isset($_GET['code'])) {
    $oauth2->setCode($_GET['code']);
    $authToken = $oauth2->fetchAuthToken();

    if (isset($authToken['access_token'])) {
        $accessToken = $authToken['access_token'];
        
        // Obter informações do usuário
        $url = 'https://www.googleapis.com/oauth2/v1/userinfo?alt=json&access_token=' . $accessToken;
        $response = file_get_contents($url);
        $userData = json_decode($response, true);

        $email = $userData['email'];
        $name = $userData['name'];

        // Aqui você pode salvar as informações do usuário na sua base de dados
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header('Location: index.php');
        exit();
    } else {
        header('Location: login.php');
        exit();
    }
}
?>
