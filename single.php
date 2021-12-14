<?php
global $wp_query;
$wp_query->set_404();//Håndterer requesten, og fortæller at den side vi requester er en 404 side.
status_header(404);// Vi fortæller browsren at siden fineds ikke -- status 404
nocache_headers();// Hvis der var nogle headers cachet i forvejen fortæller vi at vi vil gerne bruge 404.
include('404.php');
?>