<?php

$data = '{
    "name": "John Doe",
    "occupation": "gardener"
}';

$a = json_decode($data,true);

header('Content-type:text/html;charset=utf-8');
echo "{$a["name"]} is a {$a["occupation"]}";

?>