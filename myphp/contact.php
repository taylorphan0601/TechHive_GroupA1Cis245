<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\home.css" />
    <link rel="stylesheet" type="text/css" href="css\contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images\TechHive_favicon.png">
    <script src="index.js" defer></script>
    <title>TechHive's Contact</title>
</head>

<body>
    <header></header>
    <div>
        <?php include("navbar.php"); ?>
    </div>
    <div class="container">
        <div class="contact-info">
            <h1>Tech Hive Ltd.</h1>
            <p>9527 Tech Road</p>
            <p>Abbotsford, BC, Canada A2B 3C4</p>
            <p>1-778-666-2333</p>
        </div>

        <div class="contact-form">
            <form action="YOUR_SERVER_ENDPOINT" method="POST">
                <h2>Submit a Question</h2>
                <textarea name="question" id="question" rows="4" placeholder="Enter your question here..."></textarea>

                <h3>Select a contact email:</h3>
                <select name="contact-email" id="contact-email">
                    <option value="info@techhive.com">info@techhive.com</option>
                    <option value="support@techhive.com">support@techhive.com</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>


    </div>
    <footer>
        <div>
            Coded by Team A1 with ❤️ All rights reserved.
        </div>
    </footer>
</body>

</html>