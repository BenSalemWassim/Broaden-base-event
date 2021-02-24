<?PHP

$recipient = 'broadenbase@aiesec.no';
$name = $_POST['name'];
$sender = $_POST['email'];

$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    header( "Location: success.html" );
}
else
{
    header( "Location: error.html" );
}
?>