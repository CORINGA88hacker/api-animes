<?php
// CONFIGURE SEU TOKEN AQUI
$token = "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";

$arquivo = $_POST['arquivo'];
$conteudo = $_POST['conteudo'];

$url = "https://api.github.com/repos/CORINGA88hacker/api-animes/contents/" . $arquivo;

// Buscar SHA atual
$opts = [
    "http" => [
        "header" => "Authorization: token $token\r\nUser-Agent: EditorWeb\r\n"
    ]
];
$context = stream_context_create($opts);
$res = json_decode(file_get_contents($url, false, $context), true);
$sha = $res["sha"];

// Preparar PUT
$data = [
    "message" => "Atualização via editor local",
    "content" => base64_encode($conteudo),
    "sha" => $sha
];

$options = [
    "http" => [
        "header"  => "Authorization: token $token\r\nUser-Agent: EditorWeb\r\nContent-Type: application/json\r\n",
        "method"  => "PUT",
        "content" => json_encode($data)
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result;
?>
