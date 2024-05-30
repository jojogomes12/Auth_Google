<?php
require_once 'config.php';

$authorizationUrl = $oauth2->buildFullAuthorizationUri();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login com Google</title>
</head>
<body>
    <a href="<?php echo $authorizationUrl; ?>">Login com Google</a>
</body>
</html>
