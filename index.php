
<?php
require('autoload.php');
session_start();

$head = new Head("Calculadora PHP POO");
$head->addProp(new Meta("viewport", "width=device-width, initial-scale=1"));
$head->addProp(new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous"));
$head->addProp(new Link("./css/style.css", "stylesheet"));
$head->addProp(new Link("./css/.ico/calculadora.ico", "shortcut icon", null, null, "image/x-icon"));


$body = new Body();
$body->addProp(new MontaCalculadora());

echo (new Html("pt-br", $head, $body));

?>
</body>
</html>