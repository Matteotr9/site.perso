<?php
$content=file_get_contents('yaml.yml');
var_dump(yaml_parse($content));
?>
