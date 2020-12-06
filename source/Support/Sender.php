<?php

require_once (dirname(__DIR__, 2) . '/vendor/autoload.php');

use Source\Support\Email;

if ($_POST) {
    $subjectForm = "Solicitação de Orçamento";
    $nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $mailForm = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);
    $eventForm = filter_var($_POST['eventList'], FILTER_SANITIZE_STRING);
    $whatsappForm = filter_var($_POST['whatsapp'], FILTER_SANITIZE_STRING);
    $dateForm = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $phoneForm = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $amountPeopleForm = filter_var($_POST['amountPeople'], FILTER_SANITIZE_STRING);
    $placeForm = filter_var($_POST['place'], FILTER_SANITIZE_STRING);
    $messageForm = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $email = new Email();

    $email->add(
            $subjectForm,
            "<h1>Mensagem de Orçamento - Site João&Maria</h1>
                    <br>
                    <p>Olá " . SITE('name') . ",</p>
                    <p>Me chamo <strong>{$nameForm}</strong>, estou entrando em contato através do formulário do site.</p>
                    <br>
                    <p>Aqui estão os meus dados para o orçamento</p>
                    <p><strong>E-mail:</strong> <br>{$mailForm}</p>
                    <p><strong>Telefone:</strong> <br>{$phoneForm}</p>
                    <p><strong>Tipo de evento:</strong> <br>{$eventForm}</p>
                    <p><strong>Whatsapp:</strong> <br>{$whatsappForm}</p>
                    <p><strong>Data do evento:</strong> <br>{$dateForm}</p>
                    <p><strong>Telefone:</strong> <br>{$phoneForm}</p>
                    <p><strong>Quantidade de pessoas:</strong> <br>{$amountPeopleForm}</p>
                    <p><strong>Local do evento:</strong> <br>{$placeForm}</p>
                    <br>
                    <p><strong>Observações:</strong><p>
                    <p>$messageForm</p>",
            site('title'),
            "tmarsola94@gmail.com"
    )->send();

    if (!$email->error()) {
        echo '<script>$(document).ready(function(){swal("'.$nameForm.'", "Sua mensagem foi enviada.  \n Obrigado pelo contato!", "success")})</script>';
    } else {

        echo '<script>$(document).ready(function(){swal("Ops...", "Houve um erro ao enviar a mensagem, tente novamente!", "error")})</script>';
    }
}