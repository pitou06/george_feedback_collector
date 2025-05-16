<?php
if ($_SERVER["REQUEST METHOD"] === "POST")
{
    $name = strip_tags(trim($_POST["name"]));
    $email = strip_tags(trim($_POST["email"]));
    $message = strip_tags(trim($_POST["message"]));

    if (empty($message))
    {
        die("Message is required.");
    }

    $entry = "Date: " . date("Y-m-d H:i:s") . "\n";
    $entry .= "Name: " . ($name ?: "Anonymous") . "\n";
    $entry .= "Email: " . ($email ?: "Not Provided") . "\n";
    $entry .= "Message:\n" . $message . "\n";
    $entry .= str_repeat("-", 40) . "\n";

    file_put_contents("feedbaxk.txt", $entry , FILE_APPEND | LOCK_EX);
    header("Location: index.html");
    exit();
}
?>