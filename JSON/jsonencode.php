<?php

$data= ["falcon","sky","cloud","orange","wood","forest"];

header('Content-type:application/json;charset=utf-8');
echo json_encode($data);
//echo '<br>';
//var_dump(json_encode($data));

?>