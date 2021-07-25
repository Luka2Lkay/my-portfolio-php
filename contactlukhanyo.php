<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="contactlukhanyo.css">
    <title>Contact Lukhanyo</title>
</head>

<body>
    <div class="wrapper">
        <?php
            $page = 'contact';
            include_once "includes/header.php";
        ?>
        <main>
            <h2> Get in Touch</h2>

            <form action="getintouch.php" method="post">
                <input type="text" name="name" placeholder="Full name/ Company">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Enter messsage"></textarea>
                <input type="submit" name="submit" value="SEND">
            </form>
        </main>
    </div>

    <?php
            include_once "includes/footer.php";
        ?>