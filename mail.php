<html>
<head>

</head>

<body>
<?php

$to = "mohitthakur.buest@gmail.com";
$from = $_POST["mail"];
$name = $_POST["name"];
$message = $_POST["comment"];
$subject = $_POST["subject"];
if(mail($to, $subject, $message, 'From: <'.$name.'>'.$from)){
echo "alert('Mail ($subject), was successfully sent.')";
} else {
echo "alert('The email ($subject) could not be sent.')";
}
?>
</body>
</html>