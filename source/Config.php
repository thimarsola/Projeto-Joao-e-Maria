 <?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE",[
    "name" => "João&Maria | Assessória de eventos",
    "desc" => "Somos uma empresa de Assessoria & Organização de eventos sociais!",
    "domain" => "goognet.com.br",
    "locale" => "pt_BR",
    "lang" =>  "pt-BR",
    "root" => "https://localhost/desenvolvimento/Sites/Projeto-Joao-e-Maria"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost"){
    require __DIR__ . '/Minifier.php';
}

/**
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "datalayer_example",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */
define("SOCIAL",[
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "",
    "twitter_creator" => "@",
    "twitter_site" => "@"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "smtp.sendgrid.net",
    "port" => "587",
    "user" => "apikey",
    "passwd" => "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",
    "from_name" => "João&Maria Assessoria",
    "from_email" => "thiago.marsola@goognet.com.br"
]);

/**
 * REGION
 */
define("REGION", [
   "region" => "BR-SP",
    "placename" => "Santo Andr&eacute;",
    "position" => "-23.647323;-46.524186",
    "icbm" => "-23.647323;-46.524186"
]);
