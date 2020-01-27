<?php
$req = $_POST['path'];

$parts = explode('\\', $req);

shell_exec("cp -r $req ./doc/" . $parts[sizeof($parts) - 1]);

echo json_encode("cp -r $req ./doc/" . $parts[sizeof($parts) - 1]);