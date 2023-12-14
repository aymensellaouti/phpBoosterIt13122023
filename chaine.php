<?php 

$slug = "nom-de-la-page";
// => nom de la page

$lesComposantsDuSlug = explode("-", $slug);

var_dump($lesComposantsDuSlug);

$slugFormaté = implode(" ", $lesComposantsDuSlug);
var_dump($slugFormaté);
