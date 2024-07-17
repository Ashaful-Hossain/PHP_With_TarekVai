<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subjectTitle = $_POST['subjectTitle'];
$comment = $_POST['comment'];
$errormsg = "Invalid Entry";
$validmsg = "Thank you for your message";

if ($_POST['submit']) {
    if (empty($_POST['name'])) {
        $nameError = true;
    }
    if (empty($_POST['email'])) {
        $emailError = true;
    }
    if (empty($_POST['subjectTitle'])) {
        $subjectError = true;
    }
    if (empty($_POST['comment'])) {
        $commentError = true;
    } else if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subjectTitle']) || empty($_POST['comment'])) {
        $error = true;
    } else {
        $to = "EMAIL_ADD_GOES_HERE";
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subjectTitle = trim($_POST['subjectTitle']);
        $comment = trim($_POST['comment']);
        $subject = "Contact Form Enquiry";
        $messages = "\r\n Name: $name \r\n Email: $email \r\n Subject: $subjectTitle \r\n Comments: $comment";
        $headers = "From:" . $name;
        $mailsent = mail($to, $subject, $messages, $headers);
        if ($mailsent) {
            $sent = true;
            $name = "";
            $email = "";
            $subjectTitle = "";
            $comment = "";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <?php if ($nameError == true) {
            echo $errormsg;
        } ?>

        Email: <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <?php if ($emailError == true) {
            echo $errormsg;
        } ?>

        Subject: <input type="text" name="subjectTitle" id="subjectTitle" value="<?php echo $subjectTitle; ?>">
        <?php if ($subjectError == true) {
            echo $errormsg;
        } ?>

        Comments: <textarea name="comment" id="comment"><?php echo $comment; ?></textarea>
        <?php if ($commentError == true) {
            echo $errormsg;
        } ?>
    </form>

</body>

</html>