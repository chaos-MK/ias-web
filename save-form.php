<?php
$data = json_decode(file_get_contents("php://input"), true);

if (!file_exists("responses")) {
    mkdir("responses", 0777, true); // Create folder if it doesn't exist
}

$filename = "responses/" . time() . ".json";
file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(["success" => true, "message" => "Saved to $filename"]);
?>
