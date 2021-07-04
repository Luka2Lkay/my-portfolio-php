<link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="contactlukhanyo.css">
<title>Contact Lukhanyo</title>

<?php
            include_once "includes/head.php";
        ?>

<body>
    <div class="wrapper">
        <header>
            <nav>
                <div id="burger_menu">
                    <div class="top_bar"></div>
                    <div class="middle_bar"></div>
                    <div class="bottom_bar"></div>
                </div>

                <ul class="nav_list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutlukhanyo.php">About</a></li>
                    <li><a href="contactlukhanyo.php" class="active">Contact</a></li>
                </ul>
            </nav>
        </header>

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

        <?php
            include_once "includes/footer.php";
        ?>