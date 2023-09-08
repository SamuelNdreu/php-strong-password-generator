    <?php 
    session_start()
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psw</title>
    </head>
    <body>
        
        <h2 class="text-center font-primary">Grazie per aver scelto incugenerator</h2>
            <div class="container bg-white p-4 text-center">
                <form action="./index.php" method="GET" class="row">
                    <h2 class="primary">La tua password è</h2>
                    <?php 
                    if(!empty($_SESSION["password"])){
                    echo $_SESSION["password"];
                    }
                    ?> 
            </div>
    </body>
    </html>