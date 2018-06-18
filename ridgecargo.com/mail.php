<?php

$recepient = "tmnt20082@gmail.com";
$sitename = "RidgeCargo";

$name = trim($_POST["name"]);
$client_email = trim($_POST["client_email"]);
$transport_to = trim($_POST["transport_to"]);
$transport_from = trim($_POST["transport_from"]);
$departure = trim($_POST["departure"]);
$message = "Name: $name \nEmail: $client_email \nTransport To: $transport_to \nTransport From: $transport_from \nDeparture: $departure";

$pagetitle = "New request from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
