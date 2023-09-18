<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="bg-dark p-4">
                <h5 class="text-body-emphasis h4">Collapsed content</h5>
                <span class="text-body-secondary">Toggleable via the navbar brand.</span>
            </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" onClick="bar()" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
    </nav>
    </header>
    <main>
       <?php include("sidebar.php");?>
    </main>
    <footer>

    </footer>
</body>
    <script>
        function bar(){
           var sidebar = document.querySelector(".sidebar")
            sidebar.Style.marginLeft=0

        }
        
    </script>
</html>

