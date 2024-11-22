<?php
$error_message = '';

foreach ($_GET as $key => $value) {
    $formatted_value = str_replace('-', ' ', $value);
    $error_message .= $formatted_value . ', ';
}

$error_message = rtrim($error_message, ', ');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Handler | ERROR</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="handler.css">
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
    <center>
        <br><br>
        <p><?php echo $error_message; ?></p>
        <br><br>
        <button onclick="goBack()">Go Back</button>
    </center>
</body>
</html>