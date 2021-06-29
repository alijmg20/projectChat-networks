<?php

include 'env.php';

include 'message.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">
    <title>networks-chat</title>



</head>

<body onload="ajax();">
    <div class="container content">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header text-center">Chat</div>
            <div class="card-body chat-list" id="chat">
                <div class="chat-data"></div>
            </div>
            <div class="card-footer bg-light">
                <form method="POST" action="index.php">
                    <div class="row g-3">
                        <div class="col-md-1">
                            <label for="staticEmail2" class="col-form-label">Username</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="username" class="form-control" id="" placeholder="Put in your username">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-8">
                            <textarea class="form-control" name="message" rows="3" placeholder="Put in your message"></textarea>
                        </div>
                        <div class="col-md-2">
                        <button type="submit" name="send" class="btn btn-primary mb-3">enviar</button>
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>