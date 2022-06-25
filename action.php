<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />
    <title>Thank You!</title>
</head>
<body>
    <h1 class="project">Your response was recorded!</h1>
    <p class="msg">Thanks <?php $name = $_POST['fname']; echo $name; ?>! for visiting and reviewing my site.</p>
    <p class="msg" ><a href="index.html">Back to Home</a></p>
    <hr>
</body>
</html>